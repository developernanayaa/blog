<?php if(!empty($article)): ?>
    <ol>
        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <article id="div-comment-302" class="comment-body card-box">
                <footer class="comment-meta">
                    <div class="comment-author">
                        <img src="" alt="">
                        <b><?php echo e($comment->user); ?></b> says:

                        <div class="comment-metadata">
                            <a href="">
                                <time datetime="<?php echo e($comment->created_at); ?>">
                                    <?php echo e($comment->created_at->diffForHumans()); ?>

                                </time>
                            </a>
                            <span class="edit-link">
                                    <a class="comment-edit-link" href="">Edit</a>
                                </span>
                        </div><!-- .comment-metadata -->
                    </div>

                </footer><!-- .comment-meta -->

                <div class="comment-body">
                    <p><?php echo e($comment->body); ?></p>
                </div><!-- .comment-content -->

                <div class="reply">
                    <a rel="nofollow" class="comment-reply-link" href="" aria-label="Reply to <?php echo e($comment->user); ?>">Reply</a>
                </div>
            </article>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </ol>
<?php endif; ?>

<?php if(1==0): ?>
<div class="comments">
    <div>
        <p>
            <span class="comment-user"><?php echo e($comment->user); ?></span>
            <?php echo e($comment->created_at->diffForHumans()); ?>

        </p>
    </div>

    <div class="comment-list">
        <li><?php echo e($comment->body); ?></li>
    </div>
</div>
    <?php endif; ?>
