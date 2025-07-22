<?php 
namespace App\Models;
use Spiderworks\MiniWeb\Models\BaseModel;
use Spiderworks\MiniWeb\Traits\ValidationTrait;
use DB;

class Faq extends BaseModel
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
    protected $table = 'faq';


    protected $fillable = array('name', 'status');

    


    protected function setRules() {

        $this->val_rules = array(
            
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
            
            
        );
    }
    public function question_answers()
    {
        return $this->hasMany('App\Models\FaqQuestionAnswers', 'faq_id');
    }
    
    public static function listForSelectFaq($default = '--- Select an Faq ---') {
        $list[''] = $default;
        foreach (static::orderBy('name', 'ASC')->get() as $faq) {
            $list[$faq->id] = $faq->name;
        }
        return $list;
    }
    
    
}