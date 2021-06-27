@extends('layouts.app')

@section('content')

<div class="pizza">
<h1 class="pizza">food order</h1>
@foreach ($food as $food)
<a href="{{ route('food.show', $food->id) }}">
{{$food->name}}</a>
</h4>
</div>
@endforeach

@endsection