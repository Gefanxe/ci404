<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'mng_users';
    protected $primaryKey = 'id';

    protected $returnType = 'App\Entities\User';
    protected $useSoftDeletes = true;

    // 准許進事件的key(跟資料庫欄位無關)
    protected $allowedFields = ['account', 'password', 'name', 'email'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'name' => 'required|alpha_numeric_space|min_length[3]',
        'email' => 'required|valid_email|is_unique[mng_users.email]',
        'password' => 'required|min_length[8]',
        'pass_confirm' => 'required_with[password]|matches[password]'
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'Sorry. That email has already been taken. Please choose another.'
        ]
    ];
    protected $skipValidation = false;

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) return $data;

        $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);
        // unset($data['data']['password']);

        return $data;
    }

    protected $beforeInsert = ['hashPassword'];
}
