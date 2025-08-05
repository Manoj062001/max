<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    private $data;
    private $productmodel;

    public function __construct()
    {
        $this->data = [];
        $this->productmodel = new ProductModel();

        $this->data['title'] = 'Products - Maxvita Foods Pvt Ltd';
        $this->data['meta_description'] = '';
        $this->data['active'] = '';
    }

    public function potatoChips(): string
    {
        $this->data['products'] = $this->productmodel->select('name, slug, image, new, price')->where('type', 'Potato Chips')->orderBy('id', 'ASC')->findAll();

        $this->data['title'] = 'Potato Chips - Maxvita Foods';
        $this->data['meta_description'] = 'Discover premium quality potato chips from Maxvita Foods. Made with care in Karnataka, India.';
        $this->data['active'] = 'product';
        $this->data['category'] = 'Potato Chips';

        return view('main/layouts/header', $this->data)
            . view('main/products/category', $this->data)
            . view('main/layouts/footer', $this->data);
    }

    public function cornSnacks(): string
    {
        $this->data['products'] = $this->productmodel->select('name, slug, image, new, price')->where('type', 'Corn Snacks')->orderBy('id', 'ASC')->findAll();
       
        $this->data['title'] = 'Baked Corn Snacks - Maxvita Foods';
        $this->data['meta_description'] = 'Explore our delicious baked corn snacks from Maxvita Foods. Healthy and tasty snacks for everyone.';
        $this->data['active'] = 'product';
        $this->data['category'] = 'Baked Corn Snacks';

        return view('main/layouts/header', $this->data)
            . view('main/products/category', $this->data)
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

    public function productDetails($slug): string
    {
        $this->data['product'] = $this->productmodel->where('slug', $slug)->first();

        if ($this->data['product']) {
            $this->data['title'] = $this->data['product']['name'] . ' - Maxvita Foods';
            $this->data['meta_description'] = '';
            $this->data['active'] = 'product';

            return view('main/layouts/header', $this->data)
                . view('main/products/details', $this->data)
                . view('main/layouts/footer', $this->data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
