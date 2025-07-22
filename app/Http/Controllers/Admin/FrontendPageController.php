<?php

namespace App\Http\Controllers\Admin;

use Spiderworks\MiniWeb\Controllers\BaseController;
use Illuminate\Http\Request as HttpRequest;
use Spiderworks\MiniWeb\Traits\ResourceTrait;

use App\Models\FrontendPage;
use View,Redirect, DB;

class FrontendPageController extends BaseController
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new FrontendPage;
        $this->route .= '.frontend-pages';
        $this->views .= '.frontend_pages';
        $this->url = "admin/frontend-pages/";

        $this->resourceConstruct();

    }
    protected function getCollection() {
        return $this->model->select('id', 'name', 'browser_title', 'meta_keywords');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->rawColumns(['action_edit']);
    }

    public function update(HttpRequest $r)
    {
        $data = $r->all();

        $content = $data;
        unset($content['_token']);
        unset($content['id']);
        unset($content['browser_title']);
        unset($content['meta_keywords']);
        unset($content['meta_description']);
        unset($content['bottom_description']);
        unset($content['extra_js']);
        $id = decrypt($data['id']);
        $this->model->validate($data, $id);
        if($obj = $this->model->find($id)){
            $data['top_description'] = json_encode($content);
            $obj->update($data);
            return Redirect::to(url('admin/frontend-pages/edit', array('id'=>encrypt($obj->id))))->withSuccess('Page details successfully updated!');
        } else {
            return Redirect::back()
                        ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                        ->withInput(Input::all());
        }
    }

}
