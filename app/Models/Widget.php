<?php

namespace App\Models;

use Spiderworks\MiniWeb\Models\BaseModel;
use Spiderworks\MiniWeb\Traits\ValidationTrait;
use Illuminate\Support\Str;
use Spiderworks\MiniWeb\Models\MediaLibrary;
use App\Models\Listing;

class Widget extends BaseModel
{
    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }
    
    public function __construct() {
        
        parent::__construct();
        $this->__validationConstruct();
    }

    protected $fillable = [
        'code','name','content'
    ];

    protected $dates = ['created_at','updated_at'];

    protected function setRules() {

        $this->val_rules = array(
            'content' => 'required',
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }

    public static function get_image($img_id)
    {
        return MediaLibrary::find($img_id);
    }

    public static function get_listing($listing_id)
    {
        return Listing::find($listing_id);
    }
   
}
