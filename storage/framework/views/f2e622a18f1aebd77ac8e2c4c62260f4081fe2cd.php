

<?php $__env->startSection('title'); ?> Lawyer Management - <?php echo e(config('app.name', 'Laravel')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Lawyer Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('adminDashboard')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">View All Lawyers</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="<?php echo e(route('lawyer.add')); ?>" class="btn btn-primary add-button" style="color: white"><i class="feather-plus"></i> </a>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('admin.includes._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped" id="type-datatable">
                                    <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('#type-datatable').DataTable({
            processing: true,
            serverSide: true,
            sorting: true,
            searchable: true,
            responsive: true,
            ajax: "<?php echo e(route('table.lawyer')); ?>",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'image', name: 'image',
                    render: function (data, type, full, meta){
                        if(data){
                            return "<img src=<?php echo e(URL::to('/')); ?>/public/uploads/admin/" + data + " width='80' >";
                        }
                        return "<img src=<?php echo e(URL::to('/')); ?>/public/default/noimage.jpg" + " width='80' >";
                    }
                },
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false},
            ]
        });
    </script>

    <script>
        $('body').on('click', '.btn-delete', function (event) {
            event.preventDefault();

            var SITEURL = '<?php echo e(URL::to('')); ?>';

            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                    title: "Are You Sure? ",
                    text: "You will not be able to recover this record again",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, Delete it!"
                },
                function () {
                    window.location.href =  SITEURL + "/admin/" + deleteFunction + "/" + id;
                });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.includes.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lawproject\resources\views/admin/lawyer/index.blade.php ENDPATH**/ ?>