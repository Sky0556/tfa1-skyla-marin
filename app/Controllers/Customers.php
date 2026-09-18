<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Customers',
            'customers' => [
                [
                    'name'  => 'Summer Marin',
                    'email' => 'summer@example.com',
                    'phone' => '0912-345-6789'
                ],
                [
                    'name'  => 'Stanley Ramos',
                    'email' => 'stanley@example.com',
                    'phone' => '0914-164-5008'
                ],
                [
                    'name'  => 'Lucy Reese',
                    'email' => 'lucy@example.com',
                    'phone' => '0912-259-1037'
                ],
                [
                    'name'  => 'Willow Marie',
                    'email' => 'willow@example.com',
                    'phone' => '0923-749-0460'
                ],
                [
                    'name'  => 'Stacii Rat',
                    'email' => 'stacii@example.com',
                    'phone' => '0948-579-3347'
                ]
            ]
        ];

        return view('layouts/header', $data)
            . view('customers/index', $data)
            . view('layouts/footer');
    }
}