<a  data-toggle="modal" data-target="#exampleModal<?php echo e($model->id); ?>"  title="Edit <?php echo e($model->category_name); ?>" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
<br>
<a style="margin-top: 10px" href="<?php echo e($url_destroy); ?>" data-toggle="tooltip" title="Delete <?php echo e($model->category_name); ?>" class="btn btn-sm btn-white text-danger mr-2 btn-delete" rel="<?php echo e($model->id); ?>" rel1="delete-category"><i class="far fa-trash-alt mr-1"></i>Delete</a>


<?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/category/_actions.blade.php ENDPATH**/ ?>