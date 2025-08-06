<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\ProductModel;

class Admin extends BaseController
{
    private $data;
    private $session;
    private $contactmodel;
    private $productmodel;


    public function __construct()
    {
        helper(['text']);
        $this->data = [];
        $this->contactmodel =  new ContactModel();
        $this->productmodel =  new ProductModel();

        $this->session = session();
    }

    public function index()
    {
        helper(['form', 'url']);
        if ($this->request->is('post')) {

            $post = $this->request->getPost(['username', 'password']);

            $username = $post['username'];
            $password = $post['password'];
            if ($username == 'admin') {
                // max@ipopi2025
                if (password_verify($password, '$2a$12$HyyiQgVCbLsVdZwEUr2lNuUkAxvRxdd7ygfTklTtGoSH.pUkXH.T.')) {
                    $userdata = [
                        'username'  => $username,
                        'type'     => 'administrator'
                    ];
                    log_message('info', 'Admin is logged in');
                    $this->session->set('user', $userdata);
                    return redirect()->to('/admin/product');
                } else {
                    log_message('error', 'Username or Password invalid');
                    $this->data['loginvalidation'] = 'Username or Password invalid';
                }
            } else {
                log_message('error', 'Username or Password invalid');
                $this->data['loginvalidation'] = 'Username or Password invalid';
            }
        }
        echo view('admin/index', $this->data);
    }

    public function contact()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('/admin');
            die();
        }

        if ($this->request->is('post')) {
            $id = $this->request->getPost('itemid');
            $this->contactmodel->delete($id);
            log_message('info', 'Contact deleted - ' . $id);
            echo "<script>alert('Item Deleted'); window.location.href=window.location.href</script>";
        }

        $this->data['contacts']  = $this->contactmodel->orderBy('id', 'DESC')->findAll();

        echo view('admin/templates/header', $this->data);
        echo view('admin/contact', $this->data);
        echo view('admin/templates/footer', $this->data);
    }

    public function product()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('/admin');
            die();
        }

        if ($this->request->is('post')) {
            $id = $this->request->getPost('itemid');
            $this->productmodel->delete($id);
            log_message('info', 'Product deleted - ' . $id);
            echo "<script>alert('Product Deleted'); window.location.href=window.location.href</script>";
        }

        $this->data['products']  = $this->productmodel->orderBy('id', 'DESC')->findAll();

        echo view('admin/templates/header', $this->data);
        echo view('admin/product', $this->data);
        echo view('admin/templates/footer', $this->data);
    }

    public function addproduct()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('/admin');
            die();
        }

        helper(['form', 'url']);

        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required|min_length[3]|max_length[255]',
                'slug' => 'required|min_length[3]|max_length[255]|is_unique[products.slug]',
                'type' => 'required|min_length[2]|max_length[255]',
                'price' => 'required|min_length[1]|max_length[50]',
                'description' => 'permit_empty|max_length[1000]',
                'ingredient' => 'permit_empty|max_length[500]'
            ];

            if (!$this->validate($rules)) {
                $this->data['validation'] = $this->validator->getErrors();
            } else {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'slug' => $this->request->getPost('slug'),
                    'type' => $this->request->getPost('type'),
                    'price' => $this->request->getPost('price'),
                    'description' => $this->request->getPost('description'),
                    'ingredient' => $this->request->getPost('ingredient'),
                    'popular' => $this->request->getPost('popular') ? 1 : 0,
                    'new' => $this->request->getPost('new') ? 1 : 0
                ];

                // Handle image upload
                $image = $this->request->getFile('image');
                if ($image && $image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move(ROOTPATH . 'public/uploads/products/', $newName);
                    $data['image'] = $newName;
                }

                try {
                    $this->productmodel->insert($data);
                    log_message('info', 'Product added - ' . $data['name']);
                    $this->data['success'] = 'Product added successfully!';
                    
                    // Clear form data after successful submission
                    $this->data['old'] = [];
                } catch (\Exception $e) {
                    log_message('error', 'Failed to add product: ' . $e->getMessage());
                    $this->data['validation'] = 'Failed to add product. Please try again.';
                }
            }
        }

        echo view('admin/templates/header', $this->data);
        echo view('admin/addproduct', $this->data);
        echo view('admin/templates/footer', $this->data);
    }
    

    public function logout()
    {
        $this->session->remove('user');
        return redirect()->to('admin');
    }
}
