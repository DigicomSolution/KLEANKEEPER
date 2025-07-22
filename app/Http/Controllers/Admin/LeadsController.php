<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Leads;
use App\Traits\ResourceTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spiderworks\MiniWeb\Controllers\BaseController;

class LeadsController extends BaseController
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Leads();
        $this->route = 'admin.leads';
        $this->views = 'admin.leads';

        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'name', 'phone', 'email', 'notes','message','created_at')->orderby('id','DESC');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->editColumn('created_at', function($obj) use($route) {
                return Carbon::parse($obj->created_at)->format('H:iA d-F-y');
            })
            ->addColumn('action_delete', function($obj) use ($route) {
                return '<a href="'.route($route.'.destroy', [encrypt($obj->id)]).'" class="btn btn-danger miniweb-btn-warning-popup" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." title="' . ($obj->updated_at ? 'Last updated at : ' . date('d/m/Y - h:i a', strtotime($obj->updated_at)) : '') . '"><i class="fa fa-trash"></i></a>';
            })
            ->rawColumns(['action_edit', 'action_delete','message','notes']);
    }



}
