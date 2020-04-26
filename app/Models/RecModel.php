<?php

namespace App\Models;
use \Config\Services as srv;

use CodeIgniter\Model;

class RecModel extends Model {
    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['users_id','recname','estimated','estimated_type','preparation'];
    protected $createdField = 'creation';
    protected $updatedField = '';
    protected $useTimestamps = true;
    protected $dataFormat = "date";
    protected $beforeInsert = ['AddUser'];
    protected function AddUser(array $data){
        $session = srv::session();
        $data['data']['users_id'] = $session->identity;
        return $data;
    }
}
