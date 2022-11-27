<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }

    public function create(UsersDataTable $dataTable)
    {
        return $dataTable->render('welcome');
    }
}