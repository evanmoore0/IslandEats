@extends('layouts.mainlayout')
@section('main')

<div class=" flex justify-end">
<a href="/login" class=" px-5 py-2 bg-yellow-200 hover:bg-yellow-300">Login</a>
<a href="/register" class=" px-5 py-2 bg-yellow-200 hover:bg-yellow-300">Register</a>
</div>

<div class="flex h-screen">
  <div class="m-auto">
  <img class=" py-5 h-52 w-auto" src="{{asset('imgs/main.png')}}"><img>
  <center>
    <p class=" pb-10">Contactless Delivery to your Martha's Vineyard doorstep.</p>
    <a href="/ourstory"class=" shadow-lg rounded-3xl bg-yellow-200 hover:bg-yellow-300 inline-flex w-auto h-10 p-2">Our story</a>
    <a href="/ordernow" class=" shadow-lg rounded-3xl bg-yellow-200 hover:bg-yellow-300 inline-flex w-auto h-10 p-2">Order now</a>
    <a href="/paynow"class=" shadow-lg rounded-3xl bg-yellow-200 hover:bg-yellow-300 inline-flex w-auto h-10 p-2">Pay now</a>
  </center>
    
  </div>
</div>
