<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $data;

    public function __construct()
    {
        $this->data = [];
        
        $this->data['title'] = 'Maxvita Foods Pvt Ltd';
        $this->data['meta_description'] = '';
        $this->data['active'] = '';
    }

    public function index(): string
    {
        $this->data['title'] = 'Maxvita Foods Pvt Ltd';
        $this->data['meta_description'] = 'Maxvita Foods is one of the leading snacks foods manufacturing companies in South India.';

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

    public function terms(): string
    {
        $this->data['title'] = 'Terms and Conditions - Maxvita Foods';
        $this->data['meta_description'] = 'Maxvita Foods is one of the leading snacks foods manufacturing companies in South India.';
        $this->data['active'] = 'terms-and-conditions';

        return view('main/layouts/header', $this->data)
            . view('main/terms-and-conditions', $this->data)
            . view('main/layouts/footer', $this->data);
    }
}