<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Roots\Acorn\View\Component;

class ProductMegamenu extends Component
{

    /**
     * Create the component instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.product-megamenu');
    }
}
