<?php

namespace App\Http\Controllers\Api\EndUser;

use App\Http\Interfaces\Api\EndUser\ApiEndUserAuthInterface;
use Illuminate\Http\Request;

class ApiEndUserAuthController
{
    private $authInterface;

    public function __construct(ApiEndUserAuthInterface $interface) {
        $this->middleware('auth:client_api', ['except' => ['login', 'register']]);
        $this->authInterface = $interface;
    }

    public function login(Request $request)
    {
        dd('asd');
        return $this->authInterface->login($request);
    }

    public function register(Request $request)
    {
        return $this->authInterface->register($request);
    }

    public function logout()
    {
        return $this->authInterface->logout();
    }

    public function refresh()
    {
        return $this->authInterface->refresh();
    }

    public function userProfile()
    {
        return $this->authInterface->userProfile();
    }
}
