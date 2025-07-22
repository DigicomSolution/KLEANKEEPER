<?php

namespace App\Http\Controllers;

use App\Key;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function slug($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }


    public  function setKey($key_code, $value, $type)
    {
        $key_code = $this->slug($key_code);

            $key = Key::where('code',$key_code)->first();
            if(!$key){
                $key = new Key();
            }
            $key->code = $key_code;
            $key->value = $value;

            if(strpos($key_code,'image-id') !== false){
                if(!empty($value)){
                    $key->media_id = $value;
                    $key->type = 'Image';
                }
            }else{
                $key->type = 'Text';
            }

            $key->save();


    }

}
