@extends('layout.auth')

@section('body')
    <form action="{{ route('authenticate') }}" method="POST">
        @csrf
        <div>
            <label for="email" class="text-slate-600">Email</label>
            <input type="text" name="email" id="email" class="w-full mt-1 bg-white border border-slate-300 py-2 px-4 text-sm rounded focus:outline focus:outline-slate-500">
        </div>
        <div class="mt-5">
            <label for="password" class="text-slate-600">Password</label>
            <input type="password" name="password" id="password" class="w-full mt-1 bg-white border border-slate-300 py-2 px-4 text-sm rounded focus:outline focus:outline-slate-500">
        </div>

        <div class="flex items-center mt-5">
            <input id="remember" name="remember" type="checkbox" value="1" class="w-4 h-4 accent-slate-500 bg-gray-100 border-gray-300 rounded focus:ring-slate-500 focus:ring-2">
            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember Me</label>
        </div>

        <div class="mt-5">
            <button type="submit" class="w-full bg-slate-950 text-slate-50 py-2 rounded hover:bg-slate-800 focus:ring focus:ring-slate-500 focus:ring-offset-2">Sign In</button>
        </div>
    </form>
@endsection
