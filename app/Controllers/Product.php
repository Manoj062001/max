<?php

namespace App\Controllers;

class Product extends BaseController
{
    private $data;

    public function __construct()
    {
        $this->data = [];
        
        $this->data['title'] = 'Products - Maxvita Foods Pvt Ltd';
        $this->data['meta_description'] = '';
        $this->data['active'] = '';
    }

    public function potatoChips(): string
    {
        $this->data['title'] = 'Potato Chips - Maxvita Foods';
        $this->data['meta_description'] = 'Discover premium quality potato chips from Maxvita Foods. Made with care in Karnataka, India.';
        $this->data['active'] = 'potato-chips';
        $this->data['category'] = 'Potato Chips';
        $this->data['category_slug'] = 'potato-chips';

        return view('main/layouts/header', $this->data)
            . view('main/products/potato-chips', $this->data)
            . view('main/layouts/footer', $this->data);
    }

    public function cornSnacks(): string
    {
        $this->data['title'] = 'Baked Corn Snacks - Maxvita Foods';
        $this->data['meta_description'] = 'Explore our delicious baked corn snacks from Maxvita Foods. Healthy and tasty snacks for everyone.';
        $this->data['active'] = 'corn-snacks';
        $this->data['category'] = 'Baked Corn Snacks';
        $this->data['category_slug'] = 'corn-snacks';

        return view('main/layouts/header', $this->data)
            . view('main/products/corn-snacks', $this->data)
            . view('main/layouts/footer', $this->data);
    }

    public function rusksCookies(): string
    {
        $this->data['title'] = 'Rusks and Cookies - Maxvita Foods';
        $this->data['meta_description'] = 'Discover our premium range of rusks and cookies including Choco Cookies, Butter Cookies, Fruit Rusk, Premium Milk Rusk, and Premium Crunchy Rusk. Available in various pack sizes.';
        $this->data['active'] = 'rusks-and-cookies';
        $this->data['category'] = 'Rusks and Cookies';
        $this->data['category_slug'] = 'rusks-and-cookies';

        return view('main/layouts/header', $this->data)
            . view('main/products/rusks-cookies', $this->data)
            . view('main/layouts/footer', $this->data);
    }

    public function namkeenSnacks(): string
    {
        $this->data['title'] = 'Namkeen Snacks - Maxvita Foods';
        $this->data['meta_description'] = 'Traditional namkeen snacks from Maxvita Foods. Authentic taste and quality ingredients.';
        $this->data['active'] = 'namkeen-snacks';
        $this->data['category'] = 'Namkeen Snacks';
        $this->data['category_slug'] = 'namkeen-snacks';

        return view('main/layouts/header', $this->data)
            . view('main/products/namkeen-snacks', $this->data)
            . view('main/layouts/footer', $this->data);
    }

    public function fryumsSnacks(): string
    {
        $this->data['title'] = 'Fryums Snacks - Maxvita Foods';
        $this->data['meta_description'] = 'Crunchy fryums snacks from Maxvita Foods. Perfect crispy snacks for all occasions.';
        $this->data['active'] = 'fryums-snacks';
        $this->data['category'] = 'Fryums Snacks';
        $this->data['category_slug'] = 'fryums-snacks';

        return view('main/layouts/header', $this->data)
            . view('main/products/fryums-snacks', $this->data)
            . view('main/layouts/footer', $this->data);
    }
} 