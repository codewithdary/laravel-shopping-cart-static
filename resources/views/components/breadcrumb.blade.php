<div class="text-sm pt-8 breadcrumbs text-black mx-auto w-4/5 italic border-b border-gray-200">
    <ul>
        <li class="border-2 px-2 py-2 transition hover:shadow hover:border-green-200 hover:text-gray-600">
            &#x2190; <a href="{{ URL::Previous() }}" class="pl-4">Previous Page</a>
        </li>

        <li>
            <a href="/">Home</a>
        </li>

        <li>
            <a href="/shop">Shop</a>
        </li>
        
        <li> {{ $product->name }}</li>
    </ul>
</div>