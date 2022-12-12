<?php

namespace App\Http\Interfaces\Api\EndUser;

interface ApiEndUserAuthInterface
{
    public function login($request);
    public function register($request);
    public function logout();
    public function refresh();
    public function userProfile();
}
