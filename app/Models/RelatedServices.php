<?php 
namespace App\Models;
use Spiderworks\MiniWeb\Models\BaseModel;
use Spiderworks\MiniWeb\Traits\ValidationTrait;
use DB;

class RelatedServices extends BaseModel
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
    protected $table = 'services_related';


    protected $fillable = array('service_id', 'related_service_id');

    


    protected function setRules() {

        $this->val_rules = array(
            
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
            
            
        );
    }

    public function service()
    {
         return $this->belongsTo('App\Models\Service', 'related_service_id');
    }

    public function parent_service()
    {
         return $this->belongsTo('App\Models\Service', 'service_id');
    }

    
}
