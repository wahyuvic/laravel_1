<table class="table">
<tr>
    <th>id</th>
    <th>nama</th>
    <th>aksi</th>
</tr>
@foreach($data as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>
    <button class="btn btn-warning" onClick="show({{$item->id}})">edit</button>
    <button class="btn btn-danger" onClick="destroy({{$item->id}})">delete</button>
        
</td>
</tr>
@endforeach
</table>