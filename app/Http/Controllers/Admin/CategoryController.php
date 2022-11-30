<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\CategoryInterface;
use App\Http\Requests\Admin\Category\CreateCategoryRequest;
use App\Http\Requests\Admin\Category\DeleteCategoryRequest;
use App\Http\Requests\Admin\Category\EditCategoryRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    private $categoryInterface;

    public function __construct(CategoryInterface $interface)
    {
        $this->categoryInterface = $interface;
    }

    public function index()
    {
        return $this->categoryInterface->index();
    }

    public function create()
    {
        return $this->categoryInterface->create();
    }

    public function store(CreateCategoryRequest $request)
    {
        return $this->categoryInterface->store($request);
    }

    public function delete(DeleteCategoryRequest $request)
    {
        return $this->categoryInterface->delete($request);
    }

    public function update(UpdateCategoryRequest $request)
    {
        return $this->categoryInterface->update($request);
    }

    public function edit(EditCategoryRequest $request)
    {
        return $this->categoryInterface->edit($request);
    }
}
