@extends('layouts.guest')

@section('content')
    <form action="/register" method="POST" class="mt-8 space-y-6">
        @csrf

        @if ($errors->any())
            <div class="text-red-600 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label class="block text-sm font-medium">Nama</label>
            <input type="text" name="name" required class="mt-2 w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" required class="mt-2 w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Password</label>
            <input type="password" name="password" required class="mt-2 w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required class="mt-2 w-full border rounded px-3 py-2">
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded">
            Register
        </button>
    </form>

@endsection
