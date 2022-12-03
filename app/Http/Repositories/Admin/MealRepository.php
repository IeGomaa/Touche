<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\MealInterface;
use App\Http\Traits\MealTrait;
use App\Models\Meal;

class MealRepository implements MealInterface
{
    private $mealModel;
    use MealTrait;

    public function __construct(Meal $meal)
    {
        $this->mealModel = $meal;
    }

    public function index()
    {
        $meals = $this->mealRecords();
        return view('Admin.meal.index', compact('meals'));
    }

    public function create()
    {
        return view('Admin.meal.create');
    }

    public function store($request)
    {
        $imageName = $this->uploadImage($request->image, 'meal');

        $this->mealModel::create([
            'image' => $imageName,
            'name' => $request->name,
            'type' => $request->type
        ]);

        toast('Meal Was Created !','success');
        return redirect(route('admin.meal.index'));
    }

    public function delete($request)
    {
        $meal = $this->mealRecord($request->id);
        unlink(public_path($meal->image));

        $meal->delete();
        toast('Meal Was Deleted !','success');
        return back();
    }

    public function update($meal_id)
    {
        $meal = $this->mealRecord($meal_id);
        return view('Admin.meal.edit', compact('meal'));
    }

    public function edit($request)
    {
        $meal = $this->mealRecord($request->id);
        $file = $request->image;

        if (!is_null($request->image)) {
            $imageName = $this->uploadImage($file, 'meal', $meal->image);
        }

        $meal->update([
            'name' => $request->name,
            'type' => $request->type,
            'image' => (isset($imageName)) ? $imageName : $meal->getRawOriginal('image')
        ]);

        toast('Meal Was Updated !','success');
        return redirect(route('admin.meal.index'));
    }
}
