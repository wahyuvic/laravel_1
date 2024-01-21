@extends('layouts.app')
@section('content')
@if (Route::has('login'))
<p>    
@auth
</br>
<form method="POST" action="{{url('pegawai')}}" enctype="multipart/form-data">
    @csrf
    @include('pegawai._form')
</form>
@endif
@else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
@endsection