<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Administrator',
                'role' => 'System Administrator'
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'John Lim',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Sarah Tan',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'full_name' => 'Michael Cruz',
                'role' => 'Store Manager'
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Emily Reyes',
                'role' => 'Sales Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}