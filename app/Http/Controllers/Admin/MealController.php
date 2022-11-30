<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\MealInterface;
use App\Http\Requests\Admin\Meal\CreateMealRequest;
use App\Http\Requests\Admin\Meal\DeleteMealRequest;
use App\Http\Requests\Admin\Meal\EditMealRequest;
use App\Http\Requests\Admin\Meal\UpdateMealRequest;
use Illuminate\Http\Request;

class MealController extends Controller
{
    private $mealInterface;

    public function __construct(MealInterface $interface)
    {
        $this->mealInterface = $interface;
    }

    public function index()
    {
        return $this->mealInterface->index();
    }

    public function create()
    {
        return $this->mealInterface->create();
    }

    public function store(CreateMealRequest $request)
    {
        return $this->mealInterface->store($request);
    }

    public function delete(DeleteMealRequest $request)
    {
        return $this->mealInterface->delete($request);
    }

    public function update(UpdateMealRequest $request)
    {
        return $this->mealInterface->update($request);
    }

    public function edit(EditMealRequest $request)
    {
        return $this->mealInterface->edit($request);
    }
}
