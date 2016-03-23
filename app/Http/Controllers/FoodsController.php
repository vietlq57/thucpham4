<?php

namespace App\Http\Controllers;

use App\Food;
use App\Group;
use App\Nutrient;
use Illuminate\Http\Request;

use App\Http\Requests;

class FoodsController extends Controller
{
        public function index(){
            $groups = Group::all();
            return view('foods.index', compact('groups'));
        }

        public function show($id){
            $group = Group::find($id);
            $foods = $group->foods;
            return view('foods.show', compact('foods', 'group'));
        }

        public function showNutrient($id){
            $food = Food::find($id);
            $nutrients = $food->nutrients;
            return view('foods.shownutrient', compact('food', 'nutrients'));
        }

        public function create(){
            $groups = Group::all();
            $nutrients = Nutrient::all();
            return view('foods.create', compact('groups', 'nutrients'));
        }

        public function store(Request $request){
            $nutrients = Nutrient::all();

            $group = group::find($request->input('groups'));
            $food = new Food();
            $food->vi_name = $request->input('vi_name');
            $food->en_name = $request->input('en_name');

            $group->foods()->save($food);

            foreach($nutrients as $nutrient){

                if($request->input($nutrient->id) != ''){
                    $food->nutrients()->attach($nutrient, ['value' => $request->input($nutrient->id)]);
                }
            }
            return redirect('/thucpham/' . $group->id . '/show');
        }

        public function edit($id){
            $food = Food::findOrFail($id);
            $groups = Group::all();
            $nutrients = Nutrient::all();



            foreach($food->nutrients as $nutrient){
                $arr[$nutrient->pivot->nutrient_id] = $nutrient->pivot->value;
            }

            $arr = $food->nutrients;

            return view('foods.edit', compact('food', 'groups', 'nutrients', 'arr'));


        }

    public function update($id, Request $request){
        $food = Food::findOrFail($id);

        $nutrients = Nutrient::all();

        $group = group::find($request->input('groups'));

        $food->vi_name = $request->input('vi_name');
        $food->en_name = $request->input('en_name');

        $group->foods()->save($food);
        $sync_data = [];
        foreach($nutrients as $nutrient){

            if($request->input($nutrient->id) != ''){
                $sync_data[$nutrient->id] = ['value' => $request->input($nutrient->id)];

            }
        }
        $food->nutrients()->sync($sync_data);

        return redirect('/thucpham/shownutrient/' . $food->id);
    }

    public function destroy($id){
        $food = Food::findOrFail($id);
        $food->nutrients()->detach();
        $food->delete();
        return redirect('/thucpham/'. $food->group->id . '/show');
    }

    public function search($search){
        $foods = Food::where('vi_name', 'LIKE', '%'.$search.'%')->get();

        return view('foods.search', compact('foods'));
    }

}
