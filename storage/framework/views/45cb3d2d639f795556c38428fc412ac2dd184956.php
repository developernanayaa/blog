<?php $__env->startSection('working_area'); ?>
    <?php if(!empty($user_articles)): ?>

        <?php $__currentLoopData = $user_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="col-lg-4">
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
                            <?php echo e($article->description); ?>


                            <p>Written by: <?php echo e($article->user->name); ?></p>

                            <hr>
                            <p>
                                <span class="pull-right">
                                    <a href="" >Comment</a>
                                    <form action="/article/<?php echo e($article->id); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('DELETE')); ?>

                                        <button class="btn btn-sm btn-warning" type="submit">Delete</button>
                                    </form>


                                </span>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    <?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>