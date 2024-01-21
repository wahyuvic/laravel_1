<table class="table">
<tr>
    <th>id</th>
    <th>nama</th>
    <th>aksi</th>
</tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($item->id); ?></td>
    <td><?php echo e($item->name); ?></td>
    <td>
    <button class="btn btn-warning" onClick="show(<?php echo e($item->id); ?>)">edit</button>
    <button class="btn btn-danger" onClick="destroy(<?php echo e($item->id); ?>)">delete</button>
        
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\student\resources\views/read.blade.php ENDPATH**/ ?>