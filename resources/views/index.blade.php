<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produk Buah</title>
        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        </head>
    <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        @endif
                    @endif
                </div>
            @endif


    <div class="container mt-5">
    <div class="row">
    <h1>
        Produk Buah
    </h1>
    <div class="col-lg-8">
    <button class="btn btn-primary" onClick="create()">+tambah produk</button>
    <div id="read" class="mt-3">

    </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Buah</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="page" class="p-2">
      </div>  
      </div>
      
    </div>
  </div>
</div>
</div>      
</div>
    </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js">
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
     </script>   
     <script>
$(document).ready(function() {
    read();
});
function read(){
  //modal cretae
    $.get("{{url('read')}}",{},function(data, status){
        $("#read").html(data);
       
    });
    
}


function create(){
  //modal cretae
    $.get("{{url('create')}}",{},function(data, status){
        $("exampleModalLabel").html('create produk');
        $("#page").html(data);
        $("#exampleModal").modal('show');
        
    });
    
}
function store(){
  //modal tambah
  var name=$("#name").val();
    $.ajax({
        type: "get",
        url: "{{url('store')}}",
        data: "name=" + name,
        success:function(data){
            $(".btn-close").click();
            read();
        }
    });
    
}

function show(id){
  //modal edit
    $.get("{{url('show')}}/" + id,{},function(data, status){
        $("exampleModalLabel").html('edit produk');
        $("#page").html(data);
        $("#exampleModal").modal('show');
        
    });
    
}

function update(id){
  //update
  var name=$("#name").val();
    $.ajax({
        type: "get",
        url: "{{url('update')}}/" + id,
        data: "name=" + name,
        success:function(data){
            $(".btn-close").click();
            read();
        }
    });
    
}

function destroy(id){
  //delete
    $.ajax({
        type: "get",
        url: "{{url('destroy')}}/" + id,
        data: "name=" + name,
        success:function(data){
            $(".btn-close").click();
            read();
        }
    });
    
}

</script>   


</body>
</html>
