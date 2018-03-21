<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">

    <section class="text-center">
        <div class="page-header">
        <h2 class="text-center">{{$fruit->fruit_name}} Details!</h2>
        </div>
<br>
        <label>Fruit Name: {{$fruit->fruit_name}}</label><br>
        <label>Quantity: {{$fruit->quantity}}</label><br>
        <label>Price: {{$fruit->price}}</label><br>
        <label>Discount: {{$fruit->discount}}</label>


    </section>
</div>