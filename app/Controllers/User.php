<?php

namespace App\Controllers;

// use App\Models\UserModel;

class User extends BaseController
{

    // protected $UserModel;
    // public function __construct()
    // {
    //     $this->UserModel = new UserModel();
    // }
    public function index()
    {
        $data['title'] = 'user list';

        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        // mengambil data di database dan melakukan join
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        // $model = new UserModel;
        // $query = $model->index();
        $data['users'] = $query->getResult();

        return view('user/index', $data);
    }

    public function profile()
    {
        $data['title'] = 'User Profile';
        return view('user/profile', $data);
    }
}
