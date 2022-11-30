<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $adminInterface;
    public function __construct(AdminInterface $interface)
    {
        $this->adminInterface = $interface;
    }

    public function index()
    {
        return $this->adminInterface->index();
    }
}
