
<?php $__env->startSection('content'); ?>
<?php if(Route::has('login')): ?>
<p>    
<?php if(auth()->guard()->check()): ?>
    <?php if(Session::has('success')): ?>
    <p class="alert alert-success"><?php echo e(Session::get('success')); ?></p>
    <?php endif; ?>
    <a class="btn btn-info" href="<?php echo e(url('pegawai/create')); ?>">tambah</a>    

<form method="GET" action="<?php echo e(url('pegawai')); ?>">
<input type="text" name="keyword" value="<?php echo e($keyword); ?>"/>
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
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td>
        <?php if(strlen($value->foto_profile)>0): ?>
        <img src="<?php echo e(asset('foto/'.$value->foto_profile)); ?>" width="100">
        <?php endif; ?>
    </td>
        <td><?php echo e($value->nama); ?></td>
        <td><?php echo e($value->tanggal_lahir); ?></td>
        <td><?php echo e($value->gelar); ?></td>
        <td><?php echo e($value->nip); ?></td>
        <td><a class="btn btn-info" href="<?php echo e(url('pegawai/'.$value->id.'/edit')); ?>">update</a></td>
        <td>
            <form action="<?php echo e(url('pegawai/'.$value->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit">DELETE </button>
            </form>
        </td>
            
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</p>
<?php echo e($datas->links()); ?>

<?php endif; ?>
<?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jamurjaya\resources\views/pegawai/index.blade.php ENDPATH**/ ?>