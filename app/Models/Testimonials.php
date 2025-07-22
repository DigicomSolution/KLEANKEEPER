<?php 
namespace App\Models;
use Spiderworks\MiniWeb\Models\BaseModel;
use Spiderworks\MiniWeb\Traits\ValidationTrait;
use DB;

class Testimonials extends BaseModel
{

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }
    
    public function __construct() {
        
        parent::__construct();
        $this->__validationConstruct();
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'testimonials';


    protected $fillable = array('name','description','type','media_id', 'youtube_link', 'designation', 'video_id', 'client_id', 'is_featured');

    


    protected function setRules() {

        $this->val_rules = array(
            'name' => 'required|max:250',
            
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
            
            
        );
    }

    public function media()
    {
        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'media_id');
    }

    public function video()
    {
        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'video_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'client_id');
    }

    public function services()
    {
        return $this->belongsToMany('App\Models\Service', 'testimonial_services')->withPivot('priority')->orderBy('testimonial_services.priority');
    }
}
