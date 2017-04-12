<?php $__env->startSection('working_area'); ?>
    <div class="col-lg-8 col-lg-offset-2">
        <div class="portlet">
            <div class="portlet-heading bg-primary">
                <h3 class="portlet-title">
                    <a href="/article/<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a>
                </h3>

                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="zmdi zmdi-refresh"></i></a>
                    <a data-toggle="collapse" data-parent="#accordion1" href="ui-cards.html#bg-primary1"><i class="zmdi zmdi-minus"></i></a>
                    <a href="ui-cards.html#" data-toggle="remove"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="bg-primary1" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class=""><?php echo e($article->created_at->diffForHumans()); ?> by user <?php echo e($article->id); ?></div>
                    <hr>
                    <?php echo e($article->body); ?>


                    <hr>
                    <p>Written by: <?php echo e($article->user->name); ?> <span class="text-right"><a href="">Comment</a></span></p>

                </div>

            </div>
        </div>
        <?php echo $__env->make('comments.frame', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>