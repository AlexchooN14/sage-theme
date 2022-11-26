<?php

namespace App\View\Composers;

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
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
    public function getLogoUrl() {
        return wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' ); 
    }
}
