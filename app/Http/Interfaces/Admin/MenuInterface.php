<?php

namespace App\Http\Interfaces\Admin;

interface MenuInterface
{
    public function index();
    public function create();
    public function store($request);
    public function delete($request);
    public function update($request);
    public function edit($request);
}
