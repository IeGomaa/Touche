<?php

namespace App\Http\Interfaces\Admin;

interface MealInterface
{
    public function index();
    public function create();
    public function store($request);
    public function delete($request);
    public function update($meal_id);
    public function edit($request);
}
