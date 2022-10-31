

<?php $__env->startSection('title'); ?> create <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <form method="POST" action="<?php echo e(route('posts.store')); ?>">
          <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post Creator</label>
                <select class="form-control">
                    <option>Ahmed</option>
                </select>
              </div>
         
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/posts/create.blade.php ENDPATH**/ ?>