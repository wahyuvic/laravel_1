@extends('layouts.app')
@section('content')
@if (Route::has('login'))
<p>    
@auth
</br>
<form method="POST" action="{{url('pegawai/'.$model->id)}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
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