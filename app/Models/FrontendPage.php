<?php

namespace App\Models;

use Spiderworks\MiniWeb\Models\BaseModel;
use Spiderworks\MiniWeb\Traits\ValidationTrait;
use Spiderworks\MiniWeb\Models\MediaLibrary;
use App\Models\Listing;
use App\Models\Team;
use App\Models\Widget;

class FrontendPage extends BaseModel
{
	use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }
    
    public function __construct() {
        
        parent::__construct();
        $this->__validationConstruct();
    }
    
    protected $table = 'frontend_pages';

    protected $fillable = [
        'slug', 'name', 'media_id', 'browser_title', 'meta_description', 'meta_keywords', 'top_description', 'bottom_description', 'faq_id', 'extra_css', 'extra_js', 'status'
    ];

    protected $dates = ['created_at','updated_at'];

    protected function setRules() {

        $this->val_rules = array(
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
        );
    }

    public function featured_image()
    {
        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'media_id');
    }

    public function menu()
    {
        return $this->morphOne('Spiderworks\MiniWeb\Models\MenuItem', 'linkable');
    }

    public function get_image($img_id)
    {
        return MediaLibrary::find($img_id);
    }

    public function get_listing($listing_id)
    {
        return Listing::find($listing_id);
    }

    public function get_member($member_id)
    {
        return Team::find($member_id);
    }

    public function get_widget($widget_id)
    {
        return Widget::find($widget_id);
    }
    
}
