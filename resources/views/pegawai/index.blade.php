@extends('layouts.app')
@section('content')
@if (Route::has('login'))
<p>    
@auth
    @if(Session::has('success'))
    <p class="alert alert-success">{{Session::get('success')}}</p>
    @endif
    <a class="btn btn-info" href="{{url('pegawai/create')}}">tambah</a>    

<form method="GET" action="{{url('pegawai')}}">
<input type="text" name="keyword" value="{{$keyword}}"/>
<button type="submit">search</button>
<br>
</form>
    <table class="table-bordered table">
    <tr>
    <td>Foto</td>    
    <td>nama</td>
        <td>tanggal lahir</td>
        <td>gelar</td>
        <td>nip</td>
        <td colspan="2">aksi</td>
    </tr>
    @foreach($datas as $key=>$value)
    <tr>
    <td>
        @if(strlen($value->foto_profile)>0)
        <img src="{{asset('foto/'.$value->foto_profile)}}" width="100">
        @endif
    </td>
        <td>{{$value->nama}}</td>
        <td>{{$value->tanggal_lahir}}</td>
        <td>{{$value->gelar}}</td>
        <td>{{$value->nip}}</td>
        <td><a class="btn btn-info" href="{{url('pegawai/'.$value->id.'/edit')}}">update</a></td>
        <td>
            <form action="{{url('pegawai/'.$value->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit">DELETE </button>
            </form>
        </td>
            
    </tr>
    @endforeach
</table>
</p>
{{$datas->links()}}
@endif
@else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
@endsection