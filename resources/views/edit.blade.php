<div class="p2">
<div class="form-gorup">
    <label for="name">produk</label>
<input type="text" name="name" id="name" value="{{$data->name}}" class="form-control">
</div>
<div class="form-gorup">
<button class="btn btn-warning" onClick="update({{$data->id}})">update</button>
</div>

</div>