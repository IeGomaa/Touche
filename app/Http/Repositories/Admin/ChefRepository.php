<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\ChefInterface;
use App\Http\Traits\ChefTrait;
use App\Models\Chef;

class ChefRepository implements ChefInterface
{
    private $chefModel;
    use ChefTrait;

    public function __construct(Chef $chef)
    {
        $this->chefModel = $chef;
    }

    public function index()
    {
        $chefs = $this->chefRecords();
        return view('Admin.chef.index', compact('chefs'));
    }

    public function create()
    {
        return view('Admin.chef.create');
    }

    public function store($request)
    {
        $imageName = $this->uploadImage($request->image, 'chef');
        $this->chefModel::create([
            'image' => $imageName,
            'name' => $request->name,
            'description' => $request->description
        ]);

        toast('chef Was Created !','success');
        return redirect(route('admin.chef.index'));
    }

    public function delete($request)
    {
        $chef = $this->chefRecord($request->id);
        unlink(public_path($chef->image));

        $chef->delete();
        toast('chef Was Deleted !','success');
        return back();
    }

    public function update($request)
    {
        $chef = $this->chefRecord($request->id);
        return view('Admin.chef.edit', compact('chef'));
    }

    public function edit($request)
    {
        $chef = $this->chefRecord($request->id);
        $file = $request->image;

        if (!is_null($request->image)) {
            $imageName = $this->uploadImage($file, 'chef', $chef->image);
        }

        $chef->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => (isset($imageName)) ? $imageName : $chef->getRawOriginal('image')
        ]);

        toast('chef Was Updated !','success');
        return redirect(route('admin.chef.index'));
    }
}
