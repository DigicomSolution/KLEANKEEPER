<?php



namespace App\Models;



use Spiderworks\MiniWeb\Models\BaseModel;

use Spiderworks\MiniWeb\Traits\ValidationTrait;



class Service extends BaseModel

{

	use ValidationTrait {

        ValidationTrait::validate as private parent_validate;

    }

    

    public function __construct() {

        

        parent::__construct();

        $this->__validationConstruct();

    }



    protected $table = 'services';





    protected $fillable = array('slug', 'name', 'app_service_id','title1', 'title2', 'short_description', 'content', 'featured_image_id', 'banner_image_id', 'browser_title', 'meta_description', 'meta_keywords', 'top_description', 'bottom_description', 'footer_content', 'extra_js', 'status', 'is_featured', 'process_behind_heading', 'process_behind_description', 'commitment_heading1', 'commitment_heading2', 'commitment_media', 'commitment_description','image_right_id','image_left_id','icon_alt_image_id','icon_image_id','is_show_home','is_show_detail','is_show_in_main_service');



    protected $dates = ['created_at','updated_at'];



    protected function setRules() {



        $this->val_rules = array(

            'name' => 'required|max:250',
            //'app_service_id' => 'required|max:250',

            'slug' => 'required|alpha_dash|unique:services,slug,ignoreId',

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



    public function image_left()

    {

        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'image_left_id');

    }



    public function image_right()

    {

        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'image_right_id');

    }



    public function icon()

    {

        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'icon_image_id');

    }



    public function icon_alt()

    {

        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'icon_alt_image_id');

    }



    public function banner_image()

    {

        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'banner_image_id');

    }



    public function commitment_image()

    {

        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'commitment_media');

    }



    public function related_services()

    {

        return $this->hasMany('App\Models\RelatedServices', 'service_id');

    }







}

