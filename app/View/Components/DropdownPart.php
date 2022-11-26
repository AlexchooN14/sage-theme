<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class DropdownPart extends Component
{
    /**
     * The Fontawesome Icon Type.
     * @var string
     */
    public $link;

    /**
     * The Fontawesome Icon Classes.
     * @var string
     */
    public $text;

    /**
     * Create the component instance.
     *
     * @param  string  $link
     * @param  string  $text
     * @return void
     */
    public function __construct($link, $text)
    {
        $this->link = $link;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.dropdown-part');
    }
}
