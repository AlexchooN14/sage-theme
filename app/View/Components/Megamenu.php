<?php

namespace App\View\Components;

use InvalidArgumentException;
use Roots\Acorn\View\Component;

class Megamenu extends Component
{
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
     * @param  string  $megamenuType
     * @param  array  $megamenuTypes
     * @param  array  $megamenuAttributes
     * @return void
     */
    public function __construct($megamenuType, $megamenuTypes, $megamenuAttributes) {
        
        if (in_array($megamenuType, $megamenuTypes)) {
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
