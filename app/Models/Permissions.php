<?php namespace App\Models;

use Spiderworks\MiniWeb\Models\BaseModel;
use Spiderworks\MiniWeb\Traits\ValidationTrait;
use DB;

class Permissions extends BaseModel
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
    protected $table = 'permissions';


    protected $fillable = array('name');

    protected $dates = ['created_at','updated_at'];


    protected function setRules() {

        $this->val_rules = array(
           
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
        );
    }

}
