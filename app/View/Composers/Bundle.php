<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Bundle extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-bundle',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'gallery' => $this->getGallery(),
            'is_package_price' => $this->isPackagePrice(),
            'bundle_price' => $this->getPrice(),
            'bundle_suitable_for_description' => $this->getSuitableForDescription(),
            'related_products' => $this->getRelatedProducts(),
            'related_products_count' => count($this->getRelatedProducts()),
            'helps_for_list' => $this->getHelpsFor(),
            'how_to_use_description' => $this->getHowToUseDescription(),
            'ul_pink_classes' => 'ml-4 pink-bullets mb-8',
            'li_pink_classes' => 'text-[12px] tracking-wider',
            'additional_description' => $this->getAdditionalDescription(),
            'tutorial_id' => $this->getVideoId(),
            'bad_ingredients' => $this->getBadIngredients(),            
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function getGallery() {
        return get_field('bundle_gallery');
    }
    public function isPackagePrice() {
        return get_field('bundle_is_package_price');
    }
    public function getPrice() {
        return get_field('bundle_price');
    }
    public function getSuitableForDescription() {
        return get_field('bundle_suitable_for_description');
    }
    public function getRelatedProducts() {
        return array_reverse(get_field('bundle_related_products'));
    }
    public function getHelpsFor() {
        return get_field('bundle_helps_for');
    }
    public function getHowToUseDescription() {
        return get_field('bundle_how_to_description');
    }
    public function getAdditionalDescription() {
        return strip_tags(get_field('additional_description'));
    }
    public function getVideoId() {
        preg_match('/([a-zA-Z]+(\\d[a-zA-Z]+)+)/i', get_field('tutorial_link'), $matches);
        return $matches[0];
    }
    public function getBadIngredients() {
        return get_field('bad_ingredents');
    }
}
