<form action="/article/<?php echo e($article->id); ?>/comment" METHOD="POST">
    <?php echo e(csrf_field()); ?>

    <hr>
    <h3>Leave a reply</h3>
    <div class="form-group">
        <label for="body">Comment</label>
        <?php if($errors->has('body')): ?>
            <span class="help-block text-center">
                        <strong class="text-danger"><?php echo e($errors->first('body')); ?>Error test</strong>
                    </span>
        <?php endif; ?>
        <input type="text" class="form-control" name="body" id="body">
        <input type="hidden" name="article_id" id="article_id" value="<?php echo e($article->id); ?>">
    </div>
    <div class="form-group">
        <button class="btn btn-primary text-center" type="submit">Submit</button>
    </div>
</form>