<?php 

namespace App\Http\Controllers\Admin;
use Spiderworks\MiniWeb\Controllers\BaseController;
use App\Traits\ResourceTrait;
use View, Redirect, DB;
use App\Models\Testimonials;
use App\Models\Service;
use Illuminate\Http\Request as HttpRequest;

class TestimonialController extends BaseController
{
     use ResourceTrait;
     protected $model_path;
    
    public function __construct()
    {
        parent::__construct();
       

        $this->model = new Testimonials;
        $this->route = 'admin.testimonials';
        $this->views = 'admin.testimonials';
        $this->url = "admin/testimonials/";

        
        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'name', 'designation', 'created_at', 'updated_at');
        
    }

    protected function setDTData($collection) 
    {
        $route = $this->route;
        return $this->initDTData($collection)
            
            ->rawColumns(['action_edit', 'action_delete']);
    }

    public function create()
    {
        $services = Service::all();
        return view($this->views . '.form')->with('obj', $this->model)->with('services', $services);
    }

    public function edit($id) {
        $id =  decrypt($id);
        if($obj = $this->model->find($id)){
            $services = Service::all();
            return view($this->views . '.form')->with('obj', $obj)->with('services', $services);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function store()
    {
        $this->model->validate();
        $data = request()->all();
        if($data['type'] == 'Text')
        {
            $data['youtube_link'] = null;
            $data['video_id'] = null;
        }
        elseif($data['type'] == 'Youtube Video')
        {
            $data['description'] = null;
            $data['video_id'] = null;
        }
        elseif($data['type'] == 'Video from Computer')
        {
            $data['description'] = null;
            $data['youtube_link'] = null;
        }
        $data['is_featured'] = isset($data['is_featured'])?1:0;
        $this->model->fill($data);
        $this->model->save();

        if(trim($data['services']) != '' )
        {
            $data['service'] = explode(',', $data['services']);
            foreach($data['service'] as $key=>$service)
                $this->model->services()->attach((int)$service, ['priority' => $key+1]);
        }

        return Redirect::to(url('admin/testimonials/edit', ['id'=>encrypt($this->model->id)]))->withSuccess('Testimonial successfully added!');
    }

    public function update()
    {
        $data = request()->all();
        $id =  decrypt($data['id']);
        if($obj = $this->model->find($id)){
            if($data['type'] == 'Text')
            {
                $data['youtube_link'] = null;
                $data['video_id'] = null;
            }
            elseif($data['type'] == 'Youtube Video')
            {
                $data['description'] = null;
                $data['video_id'] = null;
            }
            elseif($data['type'] == 'Video from Computer')
            {
                $data['description'] = null;
                $data['youtube_link'] = null;
            }

            $services = $obj->services->pluck('id')->toArray();
            $new_services = (trim($data['services']) != '')?explode(',', $data['services']):[];
            $services_to_remove = array_diff($services,$new_services);

            if($services_to_remove)
                $obj->services()->detach($services_to_remove);

            if($new_services)
            {
                foreach ($new_services as $key => $service) {
                    $check_exist = DB::table('testimonial_services')->where('testimonials_id', $obj->id)->where('service_id', (int)$service)->first();
                    if($check_exist)
                        $obj->services()->updateExistingPivot((int)$service, ['priority' => $key+1]);
                    else
                        $obj->services()->attach((int)$service, ['priority' => $key+1]);
                }
            }

            $data['is_featured'] = isset($data['is_featured'])?1:0;
            $obj->update($data);
            return Redirect::to(url('admin/testimonials/edit', ['id'=>encrypt($obj->id)]))->withSuccess('Testimonial successfully editted!');
        }
        else 
        {
            return Redirect::back()
                    ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                    ->withInput(request()->all());
        }
            
    }
    
}

   


