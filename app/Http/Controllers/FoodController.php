<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::paginate(10);
        return view('foods.index', [
            'foods' => $food
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foods.create', [
            'food' => new Food,
            'submit' => 'Create Food'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodRequest $request)
    {
        Food::create([
            'name' => $request->name,
            'picture_path' => $request->file('picture_path')->store('assets/food'),
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'price' => $request->price,
            'rate' => $request->rate,
            'types' => $request->types,
        ]);

        return redirect()->route('foods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('foods.edit', [
            'food' => $food,
            'submit' => 'Update'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoodRequest $request, Food $food)
    {
        if ($request->picture_path) {
            Storage::delete($food->picture_path);
            $picture_path = $request->file('picture_path')->store('assets/food');
        } else {
            $picture_path = $food->picture_path;
        }

        $food->update([
            'name' => $request->name,
            'picture_path' => $picture_path,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'price' => $request->price,
            'rate' => $request->rate,
            'types' => $request->types,
        ]);

        return redirect()->route('foods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();

        return redirect()->route('foods.index');
    }
}
