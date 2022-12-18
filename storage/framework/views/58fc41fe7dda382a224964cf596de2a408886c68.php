

<?php $__env->startSection('title', 'Show'); ?>

<?php $__env->startSection('menubar'); ?>
   <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
   詳細ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <?php if($items != null): ?>
       <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <table width="400px">
       <tr><th width="50px">id:</th>
       <td width="50px"><?php echo e($item->id); ?></td>
       <th width="50px">name:</th>
       <td><?php echo e($item->name); ?></td></tr>
       </table>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelapp\resources\views/hello/show.blade.php ENDPATH**/ ?>