<div class="row clearfix">
<div class="col-md-6">    
Nama Lengkap</div><div class="col-md-6"><input  class="form-control" type="text" name="nama" value="<?php echo e($model->nama); ?>"></br>
<?php $__currentLoopData = $errors->get('nama'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p class="text-danger"><?php echo e($msg); ?></p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<div class="row clearfix">
<div class="col-md-6">    
    Tanggal lahir : </div><div class="col-md-6">
        
    <input class="form-control" type="text" name="tanggal_lahir" value="<?php echo e($model->tanggal_lahir); ?>"></br>
    <?php $__currentLoopData = $errors->get('tanggal_lahir'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p class="text-danger"><?php echo e($msg); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div>
</div>
<div class="row clearfix">
<div class="col-md-6">    
        Gelar : </div><div class="col-md-6">
            <input class="form-control" type="text" name="gelar" value="<?php echo e($model->gelar); ?>"></br>
            <?php $__currentLoopData = $errors->get('gelar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p class="text-danger"><?php echo e($msg); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        </div>
</div>
<div class="row clearfix">
<div class="col-md-6">    
            Nip : </div><div class="col-md-6"> <input class="form-control" type="text" name="nip" value="<?php echo e($model->nip); ?>"></br>
            <?php $__currentLoopData = $errors->get('nip'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="text-danger"><?php echo e($msg); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </div>
</div>
<div class="row clearfix">
<div class="col-md-6">    
            foto </div><div class="col-md-6"> <input class="form-control" type="file" name="foto_profile" value="<?php echo e($model->nip); ?>"></br>
            <?php $__currentLoopData = $errors->get('foto_profile'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="text-danger"><?php echo e($msg); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(strlen($model->foto_profile)>0): ?>
            <img src="<?php echo e(asset('foto/'.$model->foto_profile)); ?>" width="100">
            <?php endif; ?>
        
        </div>
</div>
            <button type="submit" class="btn btn-info">Simpan</button><?php /**PATH C:\xampp\htdocs\jamurjaya\resources\views/pegawai/_form.blade.php ENDPATH**/ ?>