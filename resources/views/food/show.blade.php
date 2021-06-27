<!doctype html>
<h4>{{$food->name}}</h4>
<h4>{{$food->restaurant}}</h4>
<h4>{{$food->food}}</h4>
@foreach($food->toppings as $topping)
<h5>{{$topping}}</h5>
@endforeach

<form action="{{route('food.destroy', $food->id)}}" method="POST">
@csrf
@method('DELETE')
<BUTTON>Delete</BUTTON>
</form>
</html>