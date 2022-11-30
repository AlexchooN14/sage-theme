<?php

namespace App\View\Composers;

use Illuminate\Support\Arr;
use Roots\Acorn\View\Composer;
use WP_Query;
class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Every megamenu type for the theme
     * @var array
     */
    protected $megamenuTypes = array(
        'products', 'solutions', 'blog'
    );

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'logo' => $this->getLogoUrl(),
            'navbar_recommended_products' => $this->getRecommendedProducts(),
            'megamenuAttributes' => $this->getMegamenuAttributes(),
            'megamenuTypes' => $this->megamenuTypes,
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
        ];
    }

    /**
     * List of arguments for WP_Query recommended products.
     * There should be more complex recommendation algorythm !!
     * @var array
     */
    protected $recommended_products_args = array(
        'post_type' => 'product',
        'posts_per_page' => 2,
        'date_query' => array(
            '0' => array(
                'year'  => 2022,
                'month' => 11,
                'day'   => 23,
            ),
        ),
        'tax_query' => array( array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => array('outofstock'),
            'operator' => 'NOT IN'
        ) ),
    );

    public function getRecommendedProducts() {
        return array_reverse((new WP_Query($this->recommended_products_args))->posts);
    }
    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName() {
        return get_bloginfo('name', 'display');
    }
    public function getLogoUrl() {
        return wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' ); 
    }
    public function getMegamenuAttributes() {
        $megamenuAttributes = [];
        foreach ($this->megamenuTypes as $megamenuType) {
            $megamenuDropdownParts = array();
            $megamenuTypePartsText = $this->getMegamenuTypePartsText();

            foreach ($megamenuTypePartsText[$megamenuType] as $text) {
                $megamenuDropdownPart = array(
                    'link' => '#', // should be get with function when database
                    'text' => $text,
                    'textSize' => ($megamenuType != 'blog') ? "text-megamenu-bigger" : "text-megamenu-smaller",
                );
                array_push($megamenuDropdownParts, $megamenuDropdownPart);
            }
            $megamenuArr = array(
                'id' => $megamenuType,
                'dropdown_parts' => $megamenuDropdownParts,
            );
            $megamenuAttributes[$megamenuType] = $megamenuArr;
        }

        return $megamenuAttributes;
    }
    public function getMegamenuTypePartsText() {
        $megamenuTypePartsText = [];
        foreach ($this->megamenuTypes as $megamenuType) {
            $megamenuTypePartsText[$megamenuType] = $this->getDropdownTexts($megamenuType);
        }
        return $megamenuTypePartsText;  // 'products' => '....', 'solutions' => '....', ...
    }
    private function getDropdownTexts($megamenuType) {  // This is an implementation only because there is no databse
        switch ($megamenuType) {
            case 'products':
                return ['Acne Out', 'Pure Skin', 'Atopity', 'Melabel', 'Sebomax', 'Odorex', 'Keratolin Body',
                        'Keratolin Foot', 'Keratolin Hands & Maxi', 'Scarex', 'Calmax & Repelex', 'Мини продукти'];
                        // should be get from database in the future
            case 'solutions':
                return ['Акне', 'Мазна кожа', 'Черни точки и разширени пори', 'Неравномерен тен', 'Пигментни петна',
                        'Хидратация', 'Суха и атопична кожа', 'Пърхот и косопад', 'Изпотяване', 'Белези',
                        'Чупливи нокти', 'Груба кожа и мазоли', 'Ухапвания от насекоми'];
                        // should be get from database in the future
            case 'blog':
                return [];  // TODO !!! Add blog texts
                        // should be get from database in the future
        }
    }  
}
