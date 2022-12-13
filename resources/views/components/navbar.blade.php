<section id="navbar" class="bg-white shadow-md fixed w-full">
    <div class="container flex justify-between items-center py-5">
        <div class="navbar-brand text-blue-400 flex justify-center items-center">
            <h1 class="text-2xl">Toko</h1>
        </div>
        <div class="navbar-list">
            <ul class="flex gap-5 text-blue-400">
                <li class="flex justify-center items-center"><a href="{{ route('homepage') }}">Home</a></li>
                @if(session()->has("logged"))
                <li class="flex justify-center items-center"><a href="{{ route('product.list') }}">Product</a></li>
                <li class="flex justify-center items-center"><a href="{{ route('blog.list') }}">Blog</a></li>
                @endif
                @if(session()->has("logged"))
                <li class="text-white bg-blue-400 px-3 py-1 rounded-lg"><a href="{{ route('logout') }}">Logout</a></li>
                @else
                <li class="text-white bg-blue-400 px-3 py-1 rounded-lg"><a href="{{ route('login') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</section>
