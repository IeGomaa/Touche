<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserInterface;
use App\Http\Traits\ChefTrait;
use App\Http\Traits\MealTrait;
use App\Http\Traits\MenuTrait;
use App\Models\Chef;
use App\Models\ContactUs;
use App\Models\Meal;
use App\Models\Menu;

class EndUserRepository implements EndUserInterface
{
    private $chefModel;
    private $menuModel;
    private $mealModel;

    use ChefTrait, MenuTrait, MealTrait{
        MealTrait::uploadImage insteadof ChefTrait;
    }

    public function __construct(Chef $chef, Menu $menu, Meal $meal)
    {
        $this->chefModel = $chef;
        $this->menuModel = $menu;
        $this->mealModel = $meal;
    }

    public function index()
    {
        $chefs = $this->chefRecords();
        $menus = $this->menuRecords();
        $meals = $this->mealRecords();
        return view('EndUser.index',compact('chefs','menus','meals'));
    }

    public function gallery()
    {
        $meals = $this->mealRecords();
        return view('EndUser.gallery',compact('meals'));
    }

    public function menu()
    {
        $menus = $this->menuRecords();
        return view('EndUser.menu',compact('menus'));
    }

    public function chef()
    {
        $chefs = $this->chefRecords();
        return view('EndUser.chefs',compact('chefs'));
    }

    public function contact()
    {
        return view('EndUser.contact');
    }

    public function storeUserMessage($request)
    {
        ContactUs::create($request->validated());
        return redirect(route('endUser.index'));
    }
}
