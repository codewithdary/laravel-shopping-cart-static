@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto text-center">
    <div>
        <h1 class="font-bold text-5xl pt-20 pb-8">
            All Products
        </h1>

        <a href="/products" class="font-bold border-b-4 border-pink-200 pb-1">
            View All
        </a>
    </div>

    <div class="grid grid-cols-3 gap-2 pt-20">
            @foreach($products as $product)
                <div class="radius rounded-3xl w-4/5 text-center mx-auto transition transition-all hover:bg-gray-200">
                    <a href="/shop/{{ $product->id }}">
                        <img src="{{ $product->image }}" alt="" class="rounded-3xl shadow-xl">

                        <h2 class="font-bold text-l pt-4 pb-2">
                            {{ $product->name }}
                        </h2>

                        <p class="text-sm p">
                            $ {{ $product->price }}
                        </p>
                    </a>
                </div>
            @endforeach
    </div>
</div>
@endsection