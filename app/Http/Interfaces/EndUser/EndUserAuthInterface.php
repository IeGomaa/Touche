<?php

namespace App\Http\Interfaces\EndUser;

interface EndUserAuthInterface
{
    public function login_page();
    public function register_page();
    public function registerData($request);
    public function loginData($request);
}
