<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class PromoBanner extends Component
{
    /**
     * The Promo Banner text.
     * @var string
     */
    public $text;

    /**
     * The icon types.
     *
     * @var array
     */
    public $bannerTypes = [
        'package-price' => 'text-rose-500 border-rose-500',
        'black-friday' => 'text-gray-800 border-gray-800',
    ];

    public $bannerExtraClasses;

    /**
     * Create the component instance.
     *
     * @param  string  $iconType
     * @param  string  $link
     * @param  string  $linkText
     * @return void
     */
    public function __construct($text, $type = null)
    {
        $this->text = $text;
        $this->bannerExtraClasses = ($type) ? $this->bannerTypes[$type] : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.promo-banner');
    }
}
