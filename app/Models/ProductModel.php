<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 
        'description', 
        'type', 
        'price', 
        'image', 
        'ingredient',
        'popular',
        'new'
    ];

    protected $useTimestamps = false;

    /**
     * Get products by category
     * 
     * @param string $category
     * @return array
     */
    public function getProductsByCategory(string $category): array
    {
        try {
            return $this->where('type', $category)
                       ->findAll();
        } catch (\Exception $e) {
            log_message('error', 'Error fetching products by category: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Get all products
     * 
     * @return array
     */
    public function getAllProducts(): array
    {
        try {
            return $this->findAll();
        } catch (\Exception $e) {
            log_message('error', 'Error fetching all products: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Get product by ID
     * 
     * @param int $id
     * @return array|null
     */
    public function getProductById(int $id): ?array
    {
        try {
            return $this->find($id);
        } catch (\Exception $e) {
            log_message('error', 'Error fetching product by ID: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get products by multiple categories
     * 
     * @param array $categories
     * @return array
     */
    public function getProductsByCategories(array $categories): array
    {
        try {
            return $this->whereIn('type', $categories)
                       ->findAll();
        } catch (\Exception $e) {
            log_message('error', 'Error fetching products by categories: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Get popular products
     * 
     * @return array
     */
    public function getPopularProducts(): array
    {
        try {
            return $this->where('popular', 1)
                       ->findAll();
        } catch (\Exception $e) {
            log_message('error', 'Error fetching popular products: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Get new products
     * 
     * @return array
     */
    public function getNewProducts(): array
    {
        try {
            return $this->where('new', 1)
                       ->findAll();
        } catch (\Exception $e) {
            log_message('error', 'Error fetching new products: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Get all unique categories
     * 
     * @return array
     */
    public function getCategories(): array
    {
        try {
            return $this->select('type')
                       ->distinct()
                       ->findAll();
        } catch (\Exception $e) {
            log_message('error', 'Error fetching categories: ' . $e->getMessage());
            return [];
        }
    }
} 