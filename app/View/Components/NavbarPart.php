<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class NavbarPart extends Component
{
    /**
     * The Fontawesome Icon Type.
     * @var string
     */
    public $iconType;

    /**
     * The Fontawesome Icon Classes.
     * @var string
     */
    public $iconClass;

    /**
     * The Navbar Part Link.
     * @var string
     */
    public $link;

    /**
     * The Navbar Part Link's text.
     * @var string
     */
    public $linkText;

    /**
     * The icon types.
     *
     * @var array
     */
    public $iconTypes = [
        'crown' => 'fa-solid fa-crown pr-1 text-crown-500',
        'flame' => 'fa-solid fa-fire-flame-curved pr-1 text-promo-500',
    ];

    /**
     * Create the component instance.
     *
     * @param  string  $iconType
     * @param  string  $link
     * @param  string  $linkText
     * @return void
     */
    public function __construct($link, $linkText, $iconType = null)
    {
        $this->iconType = $iconType;
        $this->iconClass = ($iconType) ? $this->iconTypes[$iconType] : null;
        $this->link = $link;
        $this->linkText = mb_strtoupper($linkText);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.navbar-part');
    }
}
