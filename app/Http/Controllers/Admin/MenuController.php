<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\MenuInterface;
use App\Http\Requests\Admin\Menu\CreateMenuRequest;
use App\Http\Requests\Admin\Menu\DeleteMenuRequest;
use App\Http\Requests\Admin\Menu\EditMenuRequest;
use App\Http\Requests\Admin\Menu\UpdateMenuRequest;

class MenuController extends Controller
{
    private $menuInterface;
    public function __construct(MenuInterface $interface)
    {
        $this->menuInterface = $interface;
    }

    public function index()
    {
        return $this->menuInterface->index();
    }

    public function create()
    {
        return $this->menuInterface->create();
    }

    public function store(CreateMenuRequest $request)
    {
        return $this->menuInterface->store($request);
    }

    public function delete(DeleteMenuRequest $request)
    {
        return $this->menuInterface->delete($request);
    }

    public function update(UpdateMenuRequest $request)
    {
        return $this->menuInterface->update($request);
    }

    public function edit(EditMenuRequest $request)
    {
        return $this->menuInterface->edit($request);
    }
}
