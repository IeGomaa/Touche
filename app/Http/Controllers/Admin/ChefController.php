<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\ChefInterface;
use App\Http\Requests\Admin\Category\EditCategoryRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;
use App\Http\Requests\Admin\Chef\CreateChefRequest;
use App\Http\Requests\Admin\Chef\DeleteChefRequest;

class ChefController extends Controller
{
    private $chefInterface;

    public function __construct(ChefInterface $interface)
    {
        $this->chefInterface = $interface;
    }

    public function index()
    {
        return $this->chefInterface->index();
    }

    public function create()
    {
        return $this->chefInterface->create();
    }

    public function store(CreateChefRequest $request)
    {
        return $this->chefInterface->store($request);
    }

    public function delete(DeleteChefRequest $request)
    {
        return $this->chefInterface->delete($request);
    }

    public function update(UpdateCategoryRequest $request)
    {
        return $this->chefInterface->update($request);
    }

    public function edit(EditCategoryRequest $request)
    {
        return $this->chefInterface->edit($request);
    }
}
