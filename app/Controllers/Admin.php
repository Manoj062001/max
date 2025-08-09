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
        $this->contactmodel = new ContactModel();
        $this->productmodel = new ProductModel();
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
                        'username' => $username,
                        'type' => 'administrator'
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
        }

        if ($this->request->is('post')) {
            $id = $this->request->getPost('itemid');
            $this->contactmodel->delete($id);
            log_message('info', 'Contact deleted - ' . $id);
            echo "<script>alert('Item Deleted'); window.location.href=window.location.href</script>";
        }

        $this->data['contacts'] = $this->contactmodel->orderBy('id', 'DESC')->findAll();

        echo view('admin/templates/header', $this->data);
        echo view('admin/contact', $this->data);
        echo view('admin/templates/footer', $this->data);
    }


    public function product()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('/admin');
        }

        if ($this->request->is('post')) {
            $id = $this->request->getPost('itemid');
            $this->productmodel->delete($id);
            log_message('info', 'Product deleted - ' . $id);
            echo "<script>alert('Product Deleted'); window.location.href=window.location.href</script>";
        }

        $this->data['products'] = $this->productmodel->orderBy('id', 'DESC')->findAll();

        echo view('admin/templates/header', $this->data);
        echo view('admin/product', $this->data);
        echo view('admin/templates/footer', $this->data);
    }
    

    public function addproduct()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('/admin');
        }

        helper(['form', 'url']);

        $types = $this->productmodel->select('type')->distinct()->orderBy('type', 'ASC')->findColumn('type');
        $this->data['types'] = array_values(array_filter($types ?? [], static function ($t) {
            return is_string($t) && trim($t) !== '';
        }));

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

                if (!empty($_FILES['image']['name'])) {
                    if ($image = $this->request->getFile('image')) {
                        if ($image->isValid()) {
                            if ($image->guessExtension() == 'png' || $image->guessExtension() == 'jpg' || $image->guessExtension() == 'jpeg' || $image->guessExtension() == 'webp') {
                                if ($image->getSizeByUnit('mb') <= 2) {
                                    $imageInfo = getimagesize($image->getTempName());
                                    if ($imageInfo && ($imageInfo[0] >= 300 && $imageInfo[1] >= 300)) {
                                        $imagename = $image->getRandomName();
                                        $uploadPath = ROOTPATH . 'public/assets/img/product/';
                                        if (!is_dir($uploadPath)) {
                                            mkdir($uploadPath, 0777, true);
                                        }
                                        $image->move($uploadPath, $imagename);
                                        $data['image'] = $imagename;

                                        $this->productmodel->insert($data);
                                        log_message('info', 'Product added - ' . $data['name']);
                                        echo "<script>alert('Product Added Successfully');</script>";
                                        $this->session->setFlashdata('formmessage', ['status' => 'success', 'colour' => 'success', 'message' => 'Product added successfully']);
                                    } else {
                                        $this->session->setFlashdata('formmessage', ['status' => 'error', 'colour' => 'danger', 'message' => 'Uploaded image should be at least 300px x 300px']);
                                        log_message('error', 'Uploaded image spec is ' . $imageInfo[0] . 'x' . $imageInfo[1]);
                                    }
                                } else {
                                    $this->session->setFlashdata('formmessage', ['status' => 'error', 'colour' => 'danger', 'message' => 'Uploaded image size is more than 2MB. Please choose a smaller size image']);
                                    log_message('error', 'Uploaded image size is ' . $image->getSizeByUnit('mb') . 'MB');
                                }
                            } else {
                                $this->session->setFlashdata('formmessage', ['status' => 'error', 'colour' => 'danger', 'message' => 'Uploaded image extension should be jpg/jpeg/png/webp']);
                                log_message('error', 'Uploaded image extension is ' . $image->guessExtension());
                            }
                        } else {
                            $this->session->setFlashdata('formmessage', ['status' => 'error', 'colour' => 'danger', 'message' => 'Uploaded image is not valid : ' . $image->getErrorString()]);
                            log_message('error', 'Uploaded image is not valid');
                        }
                    }
                } else {
                    $this->productmodel->insert($data);
                    log_message('info', 'Product added - ' . $data['name']);
                    echo "<script>alert('Product Added Successfully');</script>";
                    $this->session->setFlashdata('formmessage', ['status' => 'success', 'colour' => 'success', 'message' => 'Product added successfully']);
                }
                echo "<script>location.href='" . base_url() . "admin/addproduct'</script>";
            }
        }

        echo view('admin/templates/header', $this->data);
        echo view('admin/addproduct', $this->data);
        echo view('admin/templates/footer', $this->data);
    }
    
    
    public function editproduct($id)
    {
        if (!$this->session->get('user')) {
            return redirect()->to('/admin');
        }

        helper(['form', 'url']);

        $product = $this->productmodel->find($id);
        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Product not found');
        }

        $types = $this->productmodel->select('type')->distinct()->orderBy('type', 'ASC')->findColumn('type');
        $this->data['types'] = array_values(array_filter($types ?? [], static function ($t) {
            return is_string($t) && trim($t) !== '';
        }));

        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required|min_length[3]|max_length[255]',
                'slug' => 'required|min_length[3]|max_length[255]|is_unique[products.slug,id,{id}]',
                'type' => 'required|min_length[2]|max_length[255]',
                'price' => 'required|min_length[1]|max_length[50]',
                'description' => 'permit_empty|max_length[1000]',
                'ingredient' => 'permit_empty|max_length[500]'
            ];

            $rules['slug'] = str_replace('{id}', (string) $id, $rules['slug']);

            if (!$this->validate($rules)) {
                $this->data['validation'] = $this->validator->getErrors();
            } else {
                $update = [
                    'id' => $id,
                    'name' => $this->request->getPost('name'),
                    'slug' => $this->request->getPost('slug'),
                    'type' => $this->request->getPost('type'),
                    'price' => $this->request->getPost('price'),
                    'description' => $this->request->getPost('description'),
                    'ingredient' => $this->request->getPost('ingredient'),
                    'popular' => $this->request->getPost('popular') ? 1 : 0,
                    'new' => $this->request->getPost('new') ? 1 : 0
                ];

                if (!empty($_FILES['image']['name'])) {
                    if ($image = $this->request->getFile('image')) {
                        if ($image->isValid()) {
                            if ($image->guessExtension() == 'png' || $image->guessExtension() == 'jpg' || $image->guessExtension() == 'jpeg' || $image->guessExtension() == 'webp') {
                                if ($image->getSizeByUnit('mb') <= 2) {
                                    $imageInfo = getimagesize($image->getTempName());
                                    if ($imageInfo && ($imageInfo[0] >= 300 && $imageInfo[1] >= 300)) {
                                        $imagename = $image->getRandomName();
                                        $uploadPath = ROOTPATH . 'public/assets/img/product/';
                                        if (!is_dir($uploadPath)) {
                                            mkdir($uploadPath, 0777, true);
                                        }
                                        $image->move($uploadPath, $imagename);
                                        $update['image'] = $imagename;

                                        $this->productmodel->save($update);
                                        log_message('info', 'Product updated - ' . $update['name']);
                                        echo "<script>alert('Product Updated Successfully');</script>";
                                        $this->session->setFlashdata('formmessage', ['status' => 'success', 'colour' => 'success', 'message' => 'Product updated successfully']);
                                    } else {
                                        $this->session->setFlashdata('formmessage', ['status' => 'error', 'colour' => 'danger', 'message' => 'Uploaded image should be at least 300px x 300px']);
                                        log_message('error', 'Uploaded image spec is ' . $imageInfo[0] . 'x' . $imageInfo[1]);
                                    }
                                } else {
                                    $this->session->setFlashdata('formmessage', ['status' => 'error', 'colour' => 'danger', 'message' => 'Uploaded image size is more than 2MB. Please choose a smaller size image']);
                                    log_message('error', 'Uploaded image size is ' . $image->getSizeByUnit('mb') . 'MB');
                                }
                            } else {
                                $this->session->setFlashdata('formmessage', ['status' => 'error', 'colour' => 'danger', 'message' => 'Uploaded image extension should be jpg/jpeg/png/webp']);
                                log_message('error', 'Uploaded image extension is ' . $image->guessExtension());
                            }
                        } else {
                            $this->session->setFlashdata('formmessage', ['status' => 'error', 'colour' => 'danger', 'message' => 'Uploaded image is not valid : ' . $image->getErrorString()]);
                            log_message('error', 'Uploaded image is not valid');
                        }
                    }
                } else {
                    $this->productmodel->save($update);
                    log_message('info', 'Product updated - ' . $update['name']);
                    echo "<script>alert('Product Updated Successfully');</script>";
                    $this->session->setFlashdata('formmessage', ['status' => 'success', 'colour' => 'success', 'message' => 'Product updated successfully']);
                }
                echo "<script>location.href='" . base_url() . "admin/editproduct/$id'</script>";
            }
        }

        $this->data['product'] = $product;

        echo view('admin/templates/header', $this->data);
        echo view('admin/editproduct', $this->data);
        echo view('admin/templates/footer', $this->data);
    }

    public function logout()
    {
        $this->session->remove('user');
        return redirect()->to('admin');
    }
}
