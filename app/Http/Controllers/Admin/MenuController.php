<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\MenuInterface;
use App\Http\Requests\Admin\Menu\CreateMenuRequest;
use App\Http\Requests\Admin\Menu\DeleteMenuRequest;
use App\Http\Requests\Admin\Menu\EditMenuRequest;

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

    public function update($menu_id)
    {
        return $this->menuInterface->update($menu_id);
    }

    public function edit(EditMenuRequest $request)
    {
        return $this->menuInterface->edit($request);
    }
}
