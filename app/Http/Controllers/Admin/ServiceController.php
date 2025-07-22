<?php



namespace App\Http\Controllers\Admin;



use App\Models\Slider;

use Spiderworks\MiniWeb\Controllers\BaseController;

use Illuminate\Http\Request as HttpRequest;

use Spiderworks\MiniWeb\Traits\ResourceTrait;



use App\Models\Service;

use App\Models\RelatedServices;

use App\Models\ServiceProcess;

use App\Models\ServiceCommitments;



use View,Redirect, DB;



class ServiceController extends BaseController

{

    use ResourceTrait;



    public function __construct()

    {

        parent::__construct();



        $this->model = new Service;

        $this->route = 'admin.services';

        $this->views = 'admin.services';



        $this->resourceConstruct();



    }



    protected function getCollection() {

        return $this->model->select('id', 'name', 'short_description', 'status', 'updated_at');

    }



    protected function setDTData($collection) {

        $route = $this->route;

        return $this->initDTData($collection)

            ->editColumn('status', function($obj) use($route) { 

                if($obj->status == 1)

                {

                    return '<a href="' . route($route.'.change-status', [encrypt($obj->id)]).'" class="btn btn-success btn-sm miniweb-btn-warning-popup" data-message="Are you sure, want to disable this record?"><i class="fa fa-check-circle"></i></a>'; 

                }

                else{

                    return '<a href="' . route($route.'.change-status', [encrypt($obj->id)]) . '" class="btn btn-danger btn-sm miniweb-btn-warning-popup" data-message="Are you sure, want to enable this record?"><i class="fa fa-times-circle"></i></a>';

                }

            })

            ->addColumn('action_delete', function($obj) use ($route) { 

                return '<a href="'.route($route.'.destroy', [encrypt($obj->id)]).'" class="btn btn-danger miniweb-btn-warning-popup" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." title="' . ($obj->updated_at ? 'Last updated at : ' . date('d/m/Y - h:i a', strtotime($obj->updated_at)) : '') . '"><i class="fa fa-trash"></i></a>';

            })

            ->rawColumns(['action_edit', 'action_delete', 'status']);

    }



    public function create()

    {

        return view($this->views . '.form')->with('obj', $this->model)->with('tab', 'basic');

    }



    public function edit($id, $tab="basic") {

        $id =  decrypt($id);

        if($obj = $this->model->find($id)){

            $slider = Slider::where('code',$obj->slug)->first();

            $offer = Slider::where('code',$obj->slug.'-offer')->first();

            return view($this->views . '.form',compact('slider','offer'))->with('obj', $obj)->with('tab', $tab);

        } else {

            return $this->redirect('notfound');

        }

    }



    public function store(HttpRequest $r)

    {

        $data = $r->all();

        $this->model->validate();

        $data['is_featured'] = isset($data['is_featured'])?1:0;
        $data['is_show_home'] = isset($data['is_show_home'])?1:0;
        $data['is_show_detail'] = isset($data['is_show_detail'])?1:0;
        $data['is_show_in_main_service'] = isset($data['is_show_in_main_service'])?1:0;

        $this->model->fill($data);

        $this->model->save();



        $slider = Slider::where('code',$this->model->slug)->first();

        if(!$slider){

            $slider = new Slider();

            $slider->slider_name = $this->model->name;

            $slider->code = $this->model->slug;

            $slider->width = 1920;

            $slider->height = 699;

            $slider->save();

        }





        $slider = Slider::where('code',$this->model->slug.'-offer')->first();

        if(!$slider){

            $slider = new Slider();

            $slider->slider_name = $this->model->name.' offer';

            $slider->code = $this->model->slug.'-offer';

            $slider->width = 1920;

            $slider->height = 699;

            $slider->save();

        }





        if(isset($data['related_services']))

            foreach ($data['related_services'] as $key => $value) {

                $relatedService = new RelatedServices; 

                $relatedService->related_service_id = $value;

                $this->model->related_services()->save($relatedService);

            }





        return Redirect::to(url('admin/services/edit', array('id'=>encrypt($this->model->id))))->withSuccess('Service successfully saved!'); 

    }



    public function update(HttpRequest $r)

    {

        $data = $r->all();

        $id = decrypt($data['id']);

        $this->model->validate($data, $id);







        if($obj = $this->model->find($id)){



            $slider = Slider::where('code',$obj->slug)->first();

            if(!$slider){

                $slider = new Slider();

                $slider->slider_name = $obj->name;

                $slider->code = $obj->slug;

                $slider->width = 1920;

                $slider->height = 699;

                $slider->save();

            }



            $slider = Slider::where('code',$obj->slug.'-offer')->first();

            if(!$slider){

                $slider = new Slider();

                $slider->slider_name = $obj->name.' offer';

                $slider->code = $obj->slug.'-offer';

                $slider->width = 1920;

                $slider->height = 699;

                $slider->save();

            }





            $data['is_featured'] = isset($data['is_featured'])?1:0;
                $data['is_show_home'] = isset($data['is_show_home'])?1:0;
        $data['is_show_detail'] = isset($data['is_show_detail'])?1:0;
        $data['is_show_in_main_service'] = isset($data['is_show_in_main_service'])?1:0;

            $obj->update($data);



            $services = []; 

            $related_services =  RelatedServices::where('service_id', $obj->id)->get();

            if($related_services)

            {

                foreach($related_services as $service)

                    $services[] = $service->related_service_id;

            }

            

            $new_services = isset($data['related_services'])?$data['related_services']:[];

            $services_to_remove = array_diff($services,$new_services);

            RelatedServices::whereIn('related_service_id', $services_to_remove)->where('service_id', $obj->id)->forcedelete();

            if(!empty($data['related_services'])){

                foreach ($data['related_services'] as $key => $value) {

                    $check_exist = RelatedServices::where('service_id', $id)->where('related_service_id', $value)->first();

                    if(!$check_exist)

                    {

                        $relatedService = new RelatedServices;

                        $relatedService->related_service_id = $value;

                        $obj->related_services()->save($relatedService);

                    }

                }

            }







            return Redirect::to(url('admin/services/edit', array('id'=>encrypt($obj->id))))->withSuccess('Service details successfully updated!');

        } else {

            return Redirect::back()

                        ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form

                        ->withInput(Input::all());

        }

    }





    public function destroy($id) {

        $id = decrypt($id);

        $obj = $this->model->find($id);



        Slider::where('code',$obj->slug.'-offer')->first()->delete();

        Slider::where('code',$obj->slug)->first()->delete();



        if ($obj) {

            $obj->delete();

            return $this->redirect('removed','success', 'index');

        }



        return $this->redirect('notfound');

    }







}

