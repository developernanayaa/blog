<?php $__env->startSection('working_area'); ?>

    <div class="col-lg-6">
        <div class="card-box col-md-offset-3">
            <?php echo Form::open(['route'=>'article.store','class'=>'form form-horizontal']); ?>

            <div class="form-group <?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                <?php echo Form::label('title','Title',null,['class'=>'control-label']); ?>

                <?php echo Form::text('title',null,['class'=>'form-control' ]); ?>

                <?php if($errors->has('title')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                <?php endif; ?>
                </div>
            <div class="form-group <?php echo e($errors->has('description') ? ' has-error' : ''); ?>">

            <?php echo Form::label('desc','Description',null,['class'=>'control-label']); ?>

                <?php echo Form::text('description',null,['class'=>'form-control']); ?>

                <?php if($errors->has('description')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                <?php endif; ?>
                </div>
            <div class="form-group <?php echo e($errors->has('body') ? ' has-error' : ''); ?>">

            <?php echo Form::label('body','Body',null,['class'=>'control-label']); ?>

                <?php echo Form::textarea('body',null,['class'=>'form-control']); ?>

                <?php if($errors->has('body')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('body')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
                <?php echo Form::submit('Create Article',['class'=>'btn btn-primary btn-lg btn-block']); ?>



            <?php echo Form::close(); ?>


        </div>
    </div>



    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>