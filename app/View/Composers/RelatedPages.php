<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class RelatedPages extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.related-pages',
    ];

    /**
     * List of Arguments for WP_Query.
     *
     * @var array
     */
    protected $bloposts_args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'tax_query' => array(
            '0' => array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => array('акне'),
                'operator' => 'IN',
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
            'blogposts' => $this->getBlogposts(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function getBlogposts() {
        return array_reverse((new WP_Query($this->bloposts_args))->posts);
    }
}
