<?php

namespace App\Models;

use Spiderworks\MiniWeb\Models\BaseModel;
use Spiderworks\MiniWeb\Traits\ValidationTrait;

class Team extends BaseModel
{
	use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }
    
    public function __construct() {
        
        parent::__construct();
        $this->__validationConstruct();
    }

    protected $table = 'team';


    protected $fillable = array('department_id', 'slug', 'name', 'designation', 'short_description', 'content', 'featured_image_id', 'banner_image_id', 'browser_title', 'meta_description', 'meta_keywords', 'top_description', 'bottom_description', 'extra_js', 'status', 'facebook_link', 'twitter_link', 'linkedin_link', 'instagram_link', 'youtube_link');

    protected $dates = ['created_at','updated_at'];

    protected function setRules() {

        $this->val_rules = array(
            'name' => 'required|max:250',
            'slug' => 'required|alpha_dash|unique:team,slug,ignoreId',
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

    public function featured_image()
    {
        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'featured_image_id');
    }

    public function banner_image()
    {
        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'banner_image_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'department_id');
    }

}
