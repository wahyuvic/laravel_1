@extends('layouts.index')

@section('content')
<p> klik tomboh dibawah ini</p>
<form method="POST" action="{{url('home/contoh')}}">
@csrf    
<input type="text" name="nama">
<button type="submit">submit</button>
</form>
@endsection
