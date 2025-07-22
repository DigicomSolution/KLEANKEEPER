<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spiderworks\MiniWeb\Traits\ValidationTrait;

class Key extends Model
{

    protected $table = 'settings';

    protected $fillable = ['code','value','type','page', 'media_id'];

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }


    public function __construct() {

        parent::__construct();
        $this->__validationConstruct();
    }

    public $uploadPath = array(
        'settings' => 'uploads/settings/',
    );

    protected function setRules() {
        $this->val_rules = [
            'code' => 'required|alpha_dash|unique:settings,code,ignoreId',
            'value' => 'required',
            'type' => 'max:10',
            'page' => 'max:250',
        ];
    }

    protected function setAttributes() {
        $this->val_attributes = [
            'code' => 'key name',
            'value' => 'key value',
        ];
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        if( isset($this->val_rules['code']) )
        {
            $this->val_rules['code'] = str_replace('ignoreId', $ignoreId, $this->val_rules['code']);
        }
        return $this->parent_validate($data);
    }
    public function media()
    {
        return $this->belongsTo('Spiderworks\MiniWeb\Models\MediaLibrary', 'media_id');
    }

    public static function get($key){
        $value = Key::where('code',$key)->first();
        if(!$value){return $key;}else{
            if($value->type == 'Image'){
                if($value->media){
                    return asset($value->media->file_path);
                }
            }else{
                return $value->value;
            }
        }return $key;
    }
}
