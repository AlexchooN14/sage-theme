<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class RecommendedProducts extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.recommended-products',
    ];

    /**
     * List of arguments for WP_Query recommended products.
     * There should be more complex recommendation algorythm !!
     * @var array
     */
    protected $recommended_products_args = array(
        'post_type' => 'product',
        'posts_per_page' => 3,
        'date_query' => array(
            '0' => array(
                'year'  => 2022,
                'month' => 11,
                'day'   => 23,
            ),
        ),
    );

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'recommended_products' => $this->getRecommendedProducts(),            
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function getRecommendedProducts() {
        return array_reverse((new WP_Query($this->recommended_products_args))->posts);
    }  
}
