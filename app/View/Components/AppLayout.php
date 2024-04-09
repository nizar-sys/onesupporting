<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public $scripts;
    public $js_vendor;
    public $css_vendor;
    public $title;
    public $header;
    public $breadcrumb;
    public function __construct($title = null, $header = null, $breadcrumb = null, $scripts = null, $js_vendor = null, $css_vendor = null)
    {
        $this->title = $title ? $title . ' | ' . config('app.name') : config('app.name');
        $this->header = $header;
        $this->breadcrumb = $breadcrumb;
        $this->scripts = $scripts;
        $this->css_vendor = $css_vendor;
        $this->js_vendor = $js_vendor;
    }

    public function render()
    {
        return view('layouts.app');
    }
}
