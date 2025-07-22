<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use MenuHelper;
use App\Models\Widget;
use App\Models\Client;
use App\Models\Testimonials;
use App\Models\CaseStudy;

class Section extends AbstractWidget
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
        $clients = null;
        $testimonials = null;
        $case_study = null;
        $widget_code = $this->config['code'];
        $widget = Widget::where('code', $widget_code)->first();
        $widget_view = str_replace('-', '_', $widget->code);
        $content = json_decode($widget->content);

        if($widget_code == 'brands')
        {
            $clients = Client::whereHas('logo1')->where('status', 1)->take(16)->get();
        }
        if($widget_code == 'testimonials')
        {
            $testimonials = Testimonials::where('status', 1)->take(10)->get();
        }
        if($widget_code == 'case-studies')
        {
            $case_study = CaseStudy::where('status', 1)->take(3)->get();
        }
        return view('web.widgets.'.$widget_view, [
            'config' => $this->config,
            'content' => $content,
            'clients' => $clients,
            'testimonials' => $testimonials,
            'case_study' => $case_study
        ]);
    }
}
