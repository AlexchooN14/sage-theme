<?php

namespace App\View\Components;

use InvalidArgumentException;
use Roots\Acorn\View\Component;

class Megamenu extends Component
{
    /**
     * The Megamenu Attributes
     * @var array
     */
    public $megamenuAttributes;

    /**
     * The Megamenu Id
     * @var string
     */
    public $id;

    /**
     * The Megamenu Dropdown Parts List
     * @var array
     */
    public $dropdownParts;
    
    /**
     * Create the component instance.
     *
     * @return void
     */
    public function __construct($megamenuType, $megamenuTypes /* Подаваме типовете менюта от App composer-a */, $megamenuAttributes /* Подаваме атрибутите от App composer-a */) {
        if (in_array($megamenuType, $megamenuTypes)) {
            $this->megamenuAttributes = $megamenuAttributes[$megamenuType];
            
            $this->id = $megamenuAttributes[$megamenuType]['id'];
            $this->dropdownParts = $megamenuAttributes[$megamenuType]['dropdown_parts'];
            // array(
            //     'products' => array(
            //         'id' => 'products',
            //         'dropdown_parts' => array(
            //             array('link' => "#", 'text' => "Acne Out", 'textSize' => "text-megamenu-bigger"), 
            //             ...
            //             ...
            //         ),
            //     ),
            // );
        } else {
            throw new InvalidArgumentException($megamenuType." is not a valid Megamenu Type");
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.megamenu');
    }
}
