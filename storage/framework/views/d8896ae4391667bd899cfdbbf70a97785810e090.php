
<?php $__env->startSection('content'); ?>
<?php if(Route::has('login')): ?>
<p>    
<?php if(auth()->guard()->check()): ?>
</br>
<form method="POST" action="<?php echo e(url('pegawai/'.$model->id)); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="PATCH">
<?php echo $__env->make('pegawai._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<?php endif; ?>
<?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jamurjaya\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>