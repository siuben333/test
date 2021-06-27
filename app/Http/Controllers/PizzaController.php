<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;

class PizzaController extends Controller
{

  // public function __construct(){
  //   $this->middleware('auth');
  // }
public function index(){
  $food = food::latest()->get();
  return view('food.index',['food' => $food]);
}

public function save() {
  $food = new food();
  $food->name = request('name');
  $food->food = request('food');
  $food->restaurant = request('restaurant');
  $food->toppings = request('toppings');

  $food->save();
  return redirect('/')->with('msg', 'Thanks for your order!');
}

public function create() {
  return view('food.create');
}

public function show($id) {
  $food=food::findorFail($id);
  return view('food.show', ['food' => $food,]);
}

public function destroy($id) {
  $food=food::findorFail($id);
  $food->delete();
  return redirect('/food');
}

}