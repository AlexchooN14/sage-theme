<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Blogpost extends Component
{
    /**
     * The Blogpost Image URL.
     * @var string
     */
    public $imageUrl;    

    /**
     * The Blogpost Category.
     * @var string
     */
    public $category;    

    /**
     * The Blogpost Date of Posting.
     * @var string
     */
    public $dateOfPosting;    

    /**
     * The Blogpost Title.
     * @var string
     */
    public $title;

    /**
     * The Blogpost link to Page.
     * @var string
     */
    public $link;

    /**
     * Create the component instance.
     *
     * @param  string  $iconType
     * @param  string  $link
     * @param  string  $linkText
     * @return void
     */
    public function __construct($instance)
    {   
        $this->imageUrl = get_the_post_thumbnail_url($instance);
        $this->category = mb_strtoupper(get_the_terms($instance, 'category')[0]->name);
        $this->dateOfPosting = get_the_date('j/m/Y', $instance);
        $this->title = esc_html(get_the_title($instance));
        $this->link = get_post_permalink($instance);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.blogpost');
    }
}
