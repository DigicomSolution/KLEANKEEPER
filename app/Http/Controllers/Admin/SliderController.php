<?php namespace App\Http\Controllers\Admin;




use App\Models\Slider;
use Request, View, Redirect, DB, Datatables, Sentinel, Mail, Image,Input;
use App\Models\SliderPhoto;
use App\Traits\ResourceTrait;
use Illuminate\Http\Request as HttpRequest;
use Spiderworks\MiniWeb\Controllers\BaseController;
use Spiderworks\MiniWeb\Models\MediaLibrary;

class SliderController extends BaseController
{
    use ResourceTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->model = new Slider;

        $this->route = 'admin.sliders';
        $this->views = 'admin.sliders';
        $this->url = "admin/sliders/";

        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'slider_name', 'code', 'width', 'height', 'created_at', 'updated_at');

    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->rawColumns(['action_edit', 'action_delete']);
    }

    public function edit($id, $type="slider") {
        $id =  decrypt($id);
        if($obj = $this->model->find($id)){
            return view($this->views . '.form')->with('obj', $obj)->with('type', $type);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function store(HttpRequest $request)
    {
        $this->model->validate();
        $data = $request->all();
        $code = $this->model->createCode($data['slider_name']);
        $data['code'] = $code;
        $this->model->fill($data);
        $this->model->save();

        return Redirect::to(url('admin/sliders/edit', array('id'=>encrypt($this->model->id))))->withSuccess('Slider successfully created!');
    }

    public function photo_edit($id, $slider_id, $type)
    {
        if($photo = SliderPhoto::find($id))
        {
            $slider = Slider::where('id', $slider_id)->first();
            $crop_ratio =  ($slider->width)/($slider->height);
            return view('admin.sliders.photo_edit', array('photo'=>$photo, 'slider'=>$slider, 'crop_ratio'=>$crop_ratio, 'type'=>$type));
        }
    }

    public function update(HttpRequest $request, $id)
    {
        $data = $request->all();
        if(strlen($id)>10){
            $id = decrypt($id);
        }

        if($obj = $this->model->find($id)){
            if(isset($data['ids']))
            {
                foreach ($data['ids'] as $key => $value) {
                    $photo = new SliderPhoto;
                    $photo->media_id = $value;
                    $obj->photos()->save($photo);

                    $media = MediaLibrary::find($value);
                    $orgDestPath = public_path('uploads/media/');
                    $sliderDestPath = public_path('uploads/slider/');
                    Image::make($orgDestPath.$media->file_name)->fit($obj->width, $obj->height)->save($sliderDestPath.$media->file_name);
                }
                exit;
            }
            else{
                $obj->update($data);
                return Redirect::to(url('admin/sliders/edit', array('id'=>encrypt($obj->id))))->withSuccess('Slider successfully updated!');
            }

        } else {
            return Redirect::back()
                ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                ->withInput(Request::all());
        }
    }

    public function updatePhoto(HttpRequest $request, $id)
    {
        if($photo_obj = SliderPhoto::find($id)){
            $data = $request->all();

            $crop_data = [];
            $crop_data['x'] = $data['dataX'];
            $crop_data['y'] = $data['dataY'];
            $crop_data['width'] = $data['dataWidth'];
            $crop_data['height'] = $data['dataHeight'];
            $data['crop_data'] = json_encode( $crop_data  );

            $photo_obj->fill($data);
            $photo_obj->save();
            $obj = $this->model->find($photo_obj->sliders_id);
            if(isset($data['dataX']) && $data['dataX'] !='')
            {

                $orgDestPath = public_path('uploads/media/');
                $sliderDestPath = public_path('uploads/slider/');
                Image::make($orgDestPath.$photo_obj->media->file_name)->crop($data['dataWidth'], $data['dataHeight'], $data['dataX'], $data['dataY'])->fit($obj->width, $obj->height)->save($sliderDestPath.$photo_obj->media->file_name);
            }
            return Redirect::to(url('admin/sliders/edit', array('id'=>encrypt($obj->id))))->withSuccess('Slider successfully updated!');
        } else {
            return Redirect::back()
                ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                ->withInput(Request::all());
        }
    }

    public function photo_delete($slider_id, $id, $type)
    {
        if($photo_obj = SliderPhoto::find($id)){
            $photo_obj->forcedelete();
            return $response = response()->json(['success'=>'Slider successfully updated!']);
        }
        return $response = response()->json(['error'=>'Oops!! something went wrong...Please try again.']);
    }

    public function destroy($id) {
        $id = decrypt($id);
        $obj = $this->model->find($id);
        if ($obj) {
            $obj->forcedelete();
            return $response = response()->json(['success'=>'Slider successfully deleted!']);
        }

        return $response = response()->json(['error'=>'Oops!! something went wrong...Please try again.']);
    }



}
