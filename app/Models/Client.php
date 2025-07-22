<?php

namespace App\Models;

use Spiderworks\MiniWeb\Models\BaseModel;
use Spiderworks\MiniWeb\Traits\ValidationTrait;

class Client extends BaseModel
{
	use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }
    
    public function __construct() {
        
        parent::__construct();
        $this->__validationConstruct();
    }

    protected $table = 'clients';


    protected $fillable = array('slug', 'name', 'short_description', 'content', 'logo_id_1', 'logo_id_2', 'browser_title', 'meta_description', 'meta_keywords', 'top_description', 'bottom_description', 'extra_js', 'status', 'is_featured');

    protected $dates = ['created_at','updated_at'];

    protected function setRules() {

        $this->val_rules = array(
            'name' => 'required|max:250',
            'slug' => 'required|alpha_dash|unique:clients,slug,ignoreId',
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        $ignore_array = ['slug'];
        foreach($ignore_array as $ignore){
            $this->val_rules[$ignore] = str_replace('ignoreId', $ignoreId, $this->val_rules[$ignore]);
        }
        return $this->parent_validate($data);
    }

    public function logo1()
    {
        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'logo_id_1');
    }

    public function logo2()
    {
        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'logo_id_2');
    }

    public function services()
    {
        return $this->belongsToMany('App\Models\Service', 'client_services')->withPivot('priority')->orderBy('client_services.priority');
    }

}
