<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class BadIngredient extends Component
{
    /**
     * The Bad Ingredient Thubnail URL.
     * @var string
     */
    public $thumbnailUrl;

    /**
     * The Bad Ingredient Title.
     * @var string
     */
    public $title;

    /**
     * Create the component instance.
     *
     * @param  string  $iconType
     * @param  string  $link
     * @param  string  $linkText
     * @return void
     */
    public function __construct($ingredientId)
    {
        $this->thumbnailUrl = get_the_post_thumbnail_url($ingredientId);
        $this->title = get_the_title($ingredientId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.bad-ingredient');
    }
}
