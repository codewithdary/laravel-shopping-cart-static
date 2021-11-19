@extends('layouts.app')

@section('content')

    <x-breadcrumb :product="$product"/>

    <div class="grid sm:grid-cols-2 gap-2 pt-12 sm:pt-20 mx-auto w-4/5">
        <div class="mx-auto">
            <img 
                src="https://static.iphoned.nl/orca/products/9011/apple-macbook-pro-2021.png" 
                alt="Apple MacBook Pro 2021">
        </div>

        <div>
            <h1 class="text-4xl text-gray-600 font-bold pb-8">
                Apple MacBook Pro 2021
            </h1>

            <p class="font-bold text-l text-black pb-8">
               Price: <span class="text-red-500">$ 1993</span>
            </p>
            
            <p class="font-bold text-l text-black pb-8">
                Shipping: <span class="text-red-500">$ 25</span>
            </p>

            <p class="text-gray-800 text-thin text-l leading-6 pb-8">
                Apple MacBook Pro is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. The Apple MacBook Pro packs 512GB of SSD storage. Connectivity options include Wi-Fi 802.11 ac, Bluetooth and it comes with 2 USB ports (2 x USB 3.0), Mic In ports.
            </p>

            <a 
                class="btn btn-primary btn-active mb-10 w-full" 
                role="button" 
                aria-pressed="true">
                Add To Cart
            </a>
        </div>
@endsection
