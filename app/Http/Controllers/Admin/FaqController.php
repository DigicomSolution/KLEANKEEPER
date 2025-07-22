<?php 

namespace App\Http\Controllers\Admin;

use Spiderworks\MiniWeb\Controllers\BaseController;
use Spiderworks\MiniWeb\Traits\ResourceTrait;
use View, Redirect, DB;
use App\Models\Faq;
use App\Models\FaqQuestionAnswers;
use Helper;
use Illuminate\Http\Request;

class FaqController extends BaseController
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

        $this->model = new Faq;

        $this->route = 'admin.faq';
        $this->views = 'admin.faq';
        $this->url = "admin/faq/";

        $this->resourceConstruct();

    }


    protected function getCollection() {
        return $this->model->select('id','name', 'status');
        
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
            ->editColumn('updated_at', function($obj) { return date('m/d/Y H:i:s', strtotime($obj->updated_at)); })
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    public function store(Request $request)
    {
      
        
        $this->model->validate();
        $data = request()->all();
        $this->model->fill($data);
        if($this->model->save())
        {
            if(isset($data['faq']))
                foreach ($data['faq'] as $key => $value) {
                    if($value['question'] !='' && $value['answer'] != '')
                    {
                        $question_answers = new FaqQuestionAnswers; 
                        $question_answers->question = $value['question'];
                        $question_answers->answer = $value['answer'];
                        $this->model->question_answers()->save($question_answers);
                    }
                }
        }
        return Redirect::to(url('admin/faq'))->withSuccess('Faq successfully added!');
    }

    public function update($id)
    {

        $this->model->validate(request()->all(), $id);
         if($obj = $this->model->find($id)){
            $data = request()->all();
            $obj->update($data);

            FaqQuestionAnswers::where('faq_id', $obj->id)->forcedelete();
            if(isset($data['faq']))
                foreach ($data['faq'] as $key => $value) {
                    if($value['question'] !='' && $value['answer'] != '')
                    {
                        $question_answers = new FaqQuestionAnswers; 
                        $question_answers->question = $value['question'];
                        $question_answers->answer = $value['answer'];
                        $obj->question_answers()->save($question_answers);
                    }
                }
                
            return Redirect::to(url('admin/faq/edit', ['id'=>encrypt($id)]))->withSuccess('Faq successfully updated!');
        } else {
            return Redirect::back()
                    ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                    ->withInput(request()->all());
        }
    }

    
}

   


