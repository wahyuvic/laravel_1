<div class="p2">
<div class="form-gorup">
    <label for="name">produk</label>
<input type="text" name="name" id="name" value="<?php echo e($data->name); ?>" class="form-control">
</div>
<div class="form-gorup">
<button class="btn btn-warning" onClick="update(<?php echo e($data->id); ?>)">update</button>
</div>

</div><?php /**PATH C:\xampp\htdocs\jamurjaya\resources\views/edit.blade.php ENDPATH**/ ?>