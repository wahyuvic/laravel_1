

<?php $__env->startSection('content'); ?>
<p> klik tomboh dibawah ini</p>
<form method="POST" action="<?php echo e(url('home/contoh')); ?>">
<?php echo csrf_field(); ?>    
<input type="text" name="nama">
<button type="submit">submit</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jamurjaya\resources\views/home/contoh.blade.php ENDPATH**/ ?>