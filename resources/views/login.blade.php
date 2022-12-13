@extends("templates.template")

@section('content')
<section>
    <a href="{{ route('homepage') }}" class="w-[40px] h-[40px] shadow-xl bg-slate-300 rounded-full flex justify-center items-center mt-10 ml-10">
        <i class="fa-solid fa-arrow-left text-xl"></i>
    </a>
    <div class="container flex justify-center items-center min-h-[100vh] -mt-20">
        <div class="w-[50%] rounded-xl py-7 px-7 card-login">
            <h1 class="text-3xl uppercase text-center">Login</h1>
            @if($errors->any())
            <div class="msg-parent flex justify-between items-center bg-red-400 py-3 px-4 mt-5 rounded-lg ">
                <h1 class="text-white">
                    {{ $errors->first() }}
                </h1>
                <i class="msg-error cursor-pointer text-white fa-solid fa-xmark"></i>
            </div>
            @endif
            <form method="post" class="mt-9 flex flex-col gap-4">
                @csrf
                <div class="flex gap-4">
                    <label for="email" class="text-2xl w-[20%]">Email</label>
                    <input type="email" name="email" placeholder="Email" id="email" class="border border-slate-300 w-[80%] focus:outline-none py-2 px-3 rounded-lg focus:border-blue-400 focus:scale-110 transition">
                </div>
                <div class="flex gap-4">
                    <label for="password" class="text-2xl w-[20%]">Password</label>
                    <input type="password" placeholder="password" id="password" name="password" class="border border-slate-300 w-[80%] focus:outline-none py-2 px-3 rounded-lg focus:border-blue-400 focus:scale-110 transition">
                </div>
                <button type="submit" class="bg-blue-400 text-white w-[100px] h-[40px] flex justify-center items-center rounded-lg mx-auto mt-7">Login</button>
            </form> 
        </div>
    </div>
</section>
@endsection