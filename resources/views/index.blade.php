@extends('layouts.sidebar')
@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto">
    <div>
        <h1 class="font-bold text-4xl pt-10">
            Newest items...
        </h1>

        <p class="font-thin text-l pt-2">
            Total of 4 articles...
        </p>
    </div>

    <div class="grid grid-cols-3 gap-4">
            @foreach($products as $product)
                <div class="shadow-lg bg-gray-200 radius">
                    <img src="{{ $product->image }}" alt="">
                    <div class="w-4/5 m-auto">

                    <h2 class="text-xl pt-4 pb-2 font-bold">
                        {{ $product->name }}
                    </h2>

                    <p class="text-sm text-gray-600 pb-4">
                        {{ $product->description }}
                    </p>
                <p class="bg-green-400 w-full rounded-xl text-white text-center py-2 hover:text-gray-200 hover:bg-green-500 transition-all">
                    <a href=""
                       class="btn btn-warning inline btn-block text-center"
                       role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon inline icon-tabler icon-tabler-shopping-cart-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="6" cy="19" r="2"></circle>
                            <circle cx="17" cy="19" r="2"></circle>
                            <path d="M17 17h-11v-14h-2"></path>
                            <path d="M6 5l6.005 .429m7.138 6.573l-.143 .998h-13"></path>
                            <path d="M15 6h6m-3 -3v6"></path>
                        </svg>Add to cart
                    </a>
                </p>
                    </div>
                </div>
            @endforeach
    </div>
</div>
@endsection