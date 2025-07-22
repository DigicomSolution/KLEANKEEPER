<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\DB;

class Testimonials extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        $is_home = $this->config['is_home'];

        if($is_home == 0){
            $testimonials = DB::table('testimonials as t')
                ->leftjoin('testimonial_services as ts','testimonials_id','=','t.id')
                ->leftjoin('services as s','s.id','=','ts.service_id')
                ->leftjoin('media_library as m','m.id','=','t.media_id')
                ->where('t.is_featured',1)
                ->select('t.id','t.name as name','designation','t.description','m.file_path')
                ->groupby('t.id')
                ->get();
        }else{
            $testimonials = DB::table('testimonials as t')
                ->leftjoin('testimonial_services as ts','testimonials_id','=','t.id')
                ->leftjoin('media_library as m','m.id','=','t.media_id')
                ->leftjoin('services as s','s.id','=','ts.service_id')
                ->select('t.id','t.name as name','designation','t.description','m.file_path')
                ->where('ts.service_id',$is_home)
                ->groupby('t.id')
                ->get();
        }

        if(empty($testimonials) || count($testimonials) == 0){
             $testimonials = DB::table('testimonials as t')
                ->leftjoin('testimonial_services as ts','testimonials_id','=','t.id')
                ->leftjoin('media_library as m','m.id','=','t.media_id')
                ->leftjoin('services as s','s.id','=','ts.service_id')
                ->select('t.id','t.name as name','designation','t.description','m.file_path')
                ->groupby('t.id')
                ->get();
        }

        return view('widgets.testimonials', [
            'testimonals' => $testimonials,
        ]);
    }
}
