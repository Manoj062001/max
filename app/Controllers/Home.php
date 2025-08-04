<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    private $data;
    private $productModel;

    public function __construct()
    {
        $this->data = [];
        $this->productModel = new ProductModel();
        
        $this->data['title'] = 'Maxvita Foods Pvt Ltd';
        $this->data['meta_description'] = '';
        $this->data['active'] = '';
    }

    public function index(): string
    {
        $this->data['title'] = 'Maxvita Foods Pvt Ltd';
        $this->data['meta_description'] = 'Maxvita Foods is one of the leading snacks foods manufacturing companies in South India.';
        
        // Fetch popular products
        $this->data['popular_products'] = $this->productModel->getPopularProducts();

        return view('main/layouts/header', $this->data)
            . view('main/index', $this->data)
            . view('main/layouts/footer', $this->data);
    }
    public function about(): string
    {
        $this->data['title'] = 'About Us - Maxvita Foods';
        $this->data['meta_description'] = 'Maxvita Foods is one of the leading snacks foods manufacturing companies in South India.';
        $this->data['active'] = 'about';

        return view('main/layouts/header', $this->data)
            . view('main/about-us', $this->data)
            . view('main/layouts/footer', $this->data);
    }
    public function contact(): string
    {
        $this->data['title'] = 'Contact Us - Maxvita Foods';
        $this->data['meta_description'] = 'Maxvita Foods is one of the leading snacks foods manufacturing companies in South India.';
        $this->data['active'] = 'contact-us';

        return view('main/layouts/header', $this->data)
            . view('main/contact-us', $this->data)
            . view('main/layouts/footer', $this->data);
    }
}