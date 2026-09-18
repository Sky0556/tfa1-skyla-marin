<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Users',
            'users' => [
                [
                    'username' => 'admin01',
                    'name'     => 'Winston Reed',
                    'role'     => 'Administrator'
                ],
                [
                    'username' => 'cashier09',
                    'name'     => 'Sandee Ramos',
                    'role'     => 'Cashier'
                ],
                [
                    'username' => 'manager01',
                    'name'     => 'Skyla Reese',
                    'role'     => 'Manager'
                ],
                [
                    'username' => 'staff05',
                    'name'     => 'Razelyn Breeze',
                    'role'     => 'Staff'
                ],
                [
                    'username' => 'inventory02',
                    'name'     => 'Myrna Mariano',
                    'role'     => 'Inventory Clerk'
                ]
            ]
        ];

        return view('layouts/header', $data)
            . view('users/index', $data)
            . view('layouts/footer');
    }
}