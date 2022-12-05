<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\EndUserAuthInterface;
use App\Http\Requests\EndUser\LoginClientRequest;
use App\Http\Requests\EndUser\RegisterClientRequest;

class EndUserAuthController extends Controller
{

    private $authInterface;
    public function __construct(EndUserAuthInterface $interface)
    {
        $this->authInterface = $interface;
    }

    public function login_page()
    {
        return $this->authInterface->login_page();
    }

    public function register_page()
    {
        return $this->authInterface->register_page();
    }

    public function registerData(RegisterClientRequest $request)
    {
        return $this->authInterface->registerData($request);
    }

    public function loginData(LoginClientRequest $request)
    {
        return $this->authInterface->loginData($request);
    }

}
