<html>
    <head>
    <title>blade</title>
    </head>
    
    <body>belajar balde
        <p>
            halo <?php echo e($nama); ?>

        </p>
        <p>
            contoh foreach
            <ul>
             <?php $__currentLoopData = $daftar_hewan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li><?php echo e($key+1); ?>.<?php echo e($value); ?></li>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </ul>

            contoh for
            <ul>
             <?php for($i=0;$i<3;$i++): ?>
             <li><?php echo e($i+1); ?>.<?php echo e($daftar_hewan[$i]); ?></li>
             <?php endfor; ?>  
            </ul>

            contoh if
            <ul>
             <?php for($i=0;$i<3;$i++): ?>
             <?php if(($i+1)%2==1): ?>
             <li><?php echo e($i+1); ?>.<?php echo e($daftar_hewan[$i]); ?></li>
             <?php endif; ?>
             <?php endfor; ?>  
            </ul>
        </p>
    </body>
    </html><?php /**PATH C:\xampp\htdocs\jamurjaya\resources\views/home/belajar_blade.blade.php ENDPATH**/ ?>