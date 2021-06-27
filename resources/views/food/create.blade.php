<!doctype html>
<h1>Create Food Order</h1>
<form action="{{ route('food.save') }}" method="POST">
@csrf
<label for="name">Name</label>
<input type="name" id="name" name="name">
<label for="food">Food</label>
<select name="food" id="food">
<option value="apple">apple</option>
<option value="pizza">pizza</option>
<option value="fish">fish</option></select>
<label for="restaurant">restaurant</label>
<select name="restaurant" id="restaurant">
<option value="china bar">china bar</option>
<option value="happy">happy</option>
<option value="amber">amber</option></select>
<fieldset>
<label for="toppings">toppings</label>
<input type="checkbox" name="toppings[]" value="aaa">aaa
<br>
<input type="checkbox" name="toppings[]" value="bbb">bbb
<br>
<input type="checkbox" name="toppings[]" value="ccc">ccc
<br>
</fieldset>
<input type="submit" value="order">
</form>
</html>