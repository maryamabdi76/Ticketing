<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-block text-center">
    <span><button type="button" class="close" data-dismiss="alert">×</button></span>
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($message = Session::get('warning')): ?>
<div class="alert alert-warning alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($message = Session::get('info')): ?>
<div class="alert alert-info alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Please check the form below for errors
</div>
<?php endif; ?>
<?php /**PATH C:\My Projects\Ticketing\resources\views\flash-message.blade.php ENDPATH**/ ?>