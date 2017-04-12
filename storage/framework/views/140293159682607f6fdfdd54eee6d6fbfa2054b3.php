<div class="portlet" >
    <div class="portlet-heading">
        <h2><?php echo e(count($comments)); ?> Comments on this article:</h2>
    </div>
    <div id="bg-primary1" class="panel-collapse collapse in">
        <div class="portlet-body comments">
            <?php echo $__env->make('comments.show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('comments.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
        </div>
    </div>

</div>