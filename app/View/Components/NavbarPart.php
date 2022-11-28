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
     * The Navbar Part is there dropdown.
     * and what type is it
     * @var string
     */
    public $dropdownAttributes;

    /**
     * The icon types.
     *
     * @var array
     */
    public $iconTypes = [
        'crown' => 'fa-solid fa-crown pr-1 text-crown-500 text-megamenu-small',
        'flame' => 'fa-solid fa-fire-flame-curved pr-1 text-promo-500 text-megamenu-small',
    ];

    public $dropdownTypes = [
        'products' => array(
            'id' => 'products-dropdown-button',
            'data-collapse-toggle' => 'products-dropdown',
            'data-dropdown-placement' => 'bottom',
            'component' => 'product-megamenu'            
        ),
        'solutions' => array(
            'id' => 'solutions-dropdown-button',
            'data-collapse-toggle' => 'solutions-dropdown',
            'data-dropdown-placement' => 'bottom',
            'component' => 'solution-megamenu'            
        ),
        'blog' => array(
            'id' => 'blog-dropdown-button',
            'data-collapse-toggle' => 'blog-dropdown',
            'data-dropdown-placement' => 'bottom',
            'component' => 'blog-megamenu'            
        ),
    ];

    /**
     * Create the component instance.
     *
     * @param  string  $link
     * @param  string  $linkText
     * @param  string  $iconType
     * @param  string  $dropdown
     * @return void
     */
    public function __construct($link, $linkText, $iconType = null, $dropdownType = null)
    {
        $this->iconType = $iconType;
        $this->iconClass = ($iconType) ? $this->iconTypes[$iconType] : null;
        $this->link = $link;
        $this->linkText = mb_strtoupper($linkText);        
        if ($dropdownType && array_key_exists($dropdownType, $this->dropdownTypes)) {
            $this->dropdownAttributes = $this->dropdownTypes[$dropdownType];            
        }        
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
