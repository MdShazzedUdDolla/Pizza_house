@extends('layouts.app')

@section('content')
    <div class= "wrapper create-pizza">

        <h1>Create a New Pizza</h1>

        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your Name: </label>
            <input type="text" id="name" name="name">

            <label for="type">Choose pizza type:</label>
            <select name="type" id="type">
                <option value="volcano">Volcano</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veggie">Veggie</option>
            </select>

            <label for="base">Choose pizza base:</label>
            <select name="base" id="base">
                <option value="thin crust">Thin Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="cheesy crust">Cheesy Crust</option>
            </select>
            <fieldset>
                <label>Toppings</label>
                <input type="checkbox" name ="toppings[]" value="Mushrooms">Mushrooms<br />
                <input type="checkbox" name ="toppings[]" value="Peppers">Peppers<br />
                <input type="checkbox" name ="toppings[]" value="Olives">Olives<br />
                <input type="checkbox" name ="toppings[]" value="Onions">Onions<br />
            </fieldset>
            <input type="submit" value="Order Pizza">
        </form>

    </div>
@endsection
