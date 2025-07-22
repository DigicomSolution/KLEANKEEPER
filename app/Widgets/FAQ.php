<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class FAQ extends AbstractWidget
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
        $name = $this->config['name'];

        $faq = \App\Models\Faq::where('name',$name)->first();

        return view('widgets.f_a_q', [
            'config' => $this->config,
            'faq' => $faq
        ]);
    }
}
