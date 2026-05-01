<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MenuController extends BaseController
{
    public function index()
    {
        return view('v_menu');
    }
}
