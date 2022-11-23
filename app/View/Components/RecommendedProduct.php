<?php

namespace App\View\Components;
use Roots\Acorn\View\Component;

class RecommendedProduct extends Component
{
    /**
     * The recommended product URL.
     * @var string
     */
    public $permalink;

    /**
     * The recommended product image URL.
     * @var string
     */
    public $image_url;    

    /**
     * The recommended product title.
     * @var string
     */
    public $title;    

    /**
     * The recommended product title.
     * @var string
     */
    public $excerpt;

    /**
     * The recommended product price.
     * @var string
     */
    public $price;    

    /**
     * The recommended product in_stock quantity.
     * @var string
     */
    public $in_stock;

    private function getProductStockQuantity($product) {
       return (wc_get_product($product))->get_stock_quantity();
    }
    private function getProductExcerpt($product) {
        return get_post_field('post_excerpt', $product);
    }
    private function getProductPrice($product) {
        return (wc_get_product($product))->get_regular_price();
    }

    /**
     * Create the component instance.
     *
     * @param WP_Post $product
     * @return void
     */
    public function __construct($product)
    {   
        $this->permalink = get_the_permalink($product);
        $this->image_url = get_the_post_thumbnail_url($product);
        $this->title = get_the_title($product);
        $this->excerpt = $this->getProductExcerpt($product);
        $this->price = $this->getProductPrice($product);
        $this->in_stock = $this->getProductStockQuantity($product);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.recommended-product');
    }
}
