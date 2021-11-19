@extends('layouts.app')

@section('content')

<div class="mx-auto w-4/5">
    <h1 class="text-5xl text-gray-800 font-bold pt-12 mb-8">
        Shop
    </h1>

    <hr class="border-1 border-gray-300">
</div>

<div class="grid sm:grid-cols-4 gap-8 pt-20 mx-auto w-4/5">
    <div class="mx-auto">
        <img 
            src="https://static.iphoned.nl/orca/products/9011/apple-macbook-pro-2021.png" 
            alt="Apple MacBook Pro 2021" 
            class="mask mask-parallelogram-2">

        <h2 class="text-xl text-gray-600 font-bold pb-8">
            Apple MacBook Pro 2021
        </h2>

        <p class="font-bold text-l text-black pb-8">
           Price: <span class="text-red-500">$ 1993</span>
        </p>

        <a  href="/shop/1"
            class="btn btn-primary btn-active mb-10 w-full">
            Read more...
        </a>
    </div>
@endsection