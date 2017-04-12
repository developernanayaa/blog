<?php if(Session::has('success')): ?>
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Great!</strong> <?php echo e(Session::get('success')); ?>

</div>
    <?php endif; ?>

<?php if(Session::has('error')): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Great!</strong> <?php echo e(Session::get('error')); ?>

    </div>
<?php endif; ?>