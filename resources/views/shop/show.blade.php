@extends('layouts.app')

@section('content')

    <x-breadcrumb :product="$product"/>

    <div class="grid grid-cols-2 gap-2 pt-20 mx-auto w-4/5">
        <div class="w-4/5 mx-auto">
            <img src="{{ $product->image }}" alt="" class="mask mask-parallelogram-2">
        </div>
        <div>
            <h1 class="text-5xl text-gray-600 font-bold pb-5">
                {{ $product->name }}
            </h1>

            <p class="font-bold text-l text-black pb-8">
               $ {{ $product->price }}
            </p>

            <p class="text-gray-800 text-thin text-l w-4/5 leading-8 pb-8">
                {{ $product->description }}
            </p>

            <button class="btn btn-primary btn-active mb-10 w-full" role="button" aria-pressed="true">Add To Cart</button>

            <div class="alert">
                <div class="flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#2196f3" class="w-6 h-6 mx-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <label class="pt-1">Want to save up to 20%? <a href="/login" class="border-b-2 border-dotted pb-1 text-pink-200 border-pink-200">login</a> and get your discount now!</label>
                </div>
            </div>
        </div>
@endsection