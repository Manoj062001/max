<?php

namespace App\Controllers;

use App\Models\ProductModel;
use Exception;

class Admin extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        try {
            $data = [
                'title' => 'Admin Dashboard - Maxvita Foods',
                'products' => $this->productModel->findAll(),
                'categories' => $this->productModel->getCategories()
            ];

            return view('admin/dashboard', $data);
        } catch (Exception $e) {
            // Log the error and show a user-friendly message
            log_message('error', 'Admin dashboard error: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setBody('Database connection error. Please check your configuration.');
        }
    }

    public function products()
    {
        $data = [
            'title' => 'Manage Products - Maxvita Foods',
            'products' => $this->productModel->findAll(),
            'categories' => $this->productModel->getCategories()
        ];

        return view('admin/products', $data);
    }

    public function addProduct()
    {
        if ($this->request->getMethod() === 'post') {
            $productData = [
                'name' => $this->request->getPost('name'),
                'image' => $this->request->getPost('image'),
                'type' => $this->request->getPost('type'),
                'description' => $this->request->getPost('description'),
                'ingredient' => $this->request->getPost('ingredient'),
                'popular' => $this->request->getPost('popular') ? 1 : 0,
                'price' => $this->request->getPost('price'),
                'new' => $this->request->getPost('new') ? 1 : 0
            ];

            $this->productModel->insert($productData);
            return redirect()->to('/admin/products')->with('message', 'Product added successfully!');
        }

        $data = [
            'title' => 'Add Product - Maxvita Foods',
            'categories' => $this->productModel->getCategories()
        ];

        return view('admin/add_product', $data);
    }

    public function editProduct($id = null)
    {
        if ($id === null) {
            return redirect()->to('/admin/products');
        }

        if ($this->request->getMethod() === 'post') {
            $productData = [
                'name' => $this->request->getPost('name'),
                'image' => $this->request->getPost('image'),
                'type' => $this->request->getPost('type'),
                'description' => $this->request->getPost('description'),
                'ingredient' => $this->request->getPost('ingredient'),
                'popular' => $this->request->getPost('popular') ? 1 : 0,
                'price' => $this->request->getPost('price'),
                'new' => $this->request->getPost('new') ? 1 : 0
            ];

            // Handle file upload
            $imageFile = $this->request->getFile('image_file');
            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                // Generate unique filename
                $newName = $imageFile->getRandomName();
                
                // Move file to products directory
                $uploadPath = FCPATH . 'public/assets/images/products/';
                $imageFile->move($uploadPath, $newName);
                
                // Update the image filename in database
                $productData['image'] = $newName;
                
                // Log the upload
                log_message('info', 'Product image uploaded: ' . $newName . ' for product ID: ' . $id);
            }

            $this->productModel->update($id, $productData);
            return redirect()->to('/admin/products')->with('message', 'Product updated successfully!');
        }

        $data = [
            'title' => 'Edit Product - Maxvita Foods',
            'product' => $this->productModel->find($id),
            'categories' => $this->productModel->getCategories()
        ];

        return view('admin/edit_product', $data);
    }

    public function deleteProduct($id = null)
    {
        if ($id !== null) {
            $this->productModel->delete($id);
            return redirect()->to('/admin/products')->with('message', 'Product deleted successfully!');
        }

        return redirect()->to('/admin/products');
    }

    public function categories()
    {
        $data = [
            'title' => 'Manage Categories - Maxvita Foods',
            'categories' => $this->productModel->getCategories(),
            'products_by_category' => []
        ];

        // Get products for each category
        foreach ($data['categories'] as $category) {
            $data['products_by_category'][$category['type']] = $this->productModel->getProductsByCategory($category['type']);
        }

        return view('admin/categories', $data);
    }

    public function manageBadge()
    {
        if ($this->request->getMethod() === 'post') {
            // Handle new badge image upload
            $badgeFile = $this->request->getFile('badge_image');
            if ($badgeFile && $badgeFile->isValid() && !$badgeFile->hasMoved()) {
                // Create icons directory if it doesn't exist
                $iconsDir = FCPATH . 'public/assets/images/icons/';
                if (!is_dir($iconsDir)) {
                    mkdir($iconsDir, 0755, true);
                }
                
                // Move file to icons directory
                $badgeFile->move($iconsDir, 'new.png');
                
                // Log the upload
                log_message('info', 'New badge image uploaded: new.png');
                
                return redirect()->to('/admin/manage-badge')->with('message', 'New badge image updated successfully!');
            } else {
                return redirect()->to('/admin/manage-badge')->with('error', 'Please select a valid image file.');
            }
        }

        $data = [
            'title' => 'Manage New Badge - Maxvita Foods',
            'current_badge_exists' => file_exists(FCPATH . 'public/assets/images/icons/new.png')
        ];

        return view('admin/manage_badge', $data);
    }
} 