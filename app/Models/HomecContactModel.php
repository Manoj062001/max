<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeContactModel extends Model
{
    protected $table = 'home_contact';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $allowedFields = ['name', 'e-mail', 'address', 'message', 'status'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
