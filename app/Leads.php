<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spiderworks\MiniWeb\Traits\ValidationTrait;

class Leads extends Model
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
    protected $table = 'leads';


    protected $fillable = array('name','notes','phone','country','email','message','location','company','ip','type','country_code');


    protected function setRules()
    {
        $this->val_rules = array(
            'name' => 'required|max:250',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'type' => 'required',
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }

}
