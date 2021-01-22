<?php namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    protected $attributes = [
        'id' => null,
        'account' => null,
        'password' => null,
        'pass_confirm' => null,
        'password_hash' => null,
        'name' => null,
        'email' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null
    ];

    // public function setPassword(string $pass)
    // {
    //     $this->attributes['password_hash'] = password_hash($pass, PASSWORD_BCRYPT);

    //     return $this;
    // }
}
