<?php $__env->startSection('content'); ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">نظرات رویداد ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item active">نظرات رویداد ها</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12">
                <div class="card text-right">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="d-table table text-center table-bordred table-striped">
                                    <thead>
                                        <th>آیدی</th>
                                        <th>کاربر</th>
                                        <th>امتیاز</th>
                                        <th>نظر</th>
                                        <th>رویداد</th>
                                        <th>نام رویداد</th>
                                        <th>status</th>
                                        <th>عملیات</th>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <td><?php echo e($v->id); ?></td>
                                        <td><?php echo e($v->user->name); ?></td>
                                        <td><?php echo e($v->rating); ?></td>
                                        <td><?php echo e($v->comment); ?></td>
                                        <td><?php echo e($v->events->categories->name); ?></td>
                                        <td><?php echo e($v->events->name); ?></td>
                                        <td>
                                            <?php if($v->status==0): ?>
                                            <i class="fa fa-minus"><i class="d-none">0</i></i>
                                            <?php else: ?> <i class="fa fa-check"><i class="d-none">1</i></i>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="/updateEventStatus/<?php echo e($v["id"]); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" title="تایید">
                                                <span class="fa fa-check"></span>
                                            </a>
                                            <a href="/deleteEventCm/<?php echo e($v["id"]); ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                                <span class="fa fa-times"></span>
                                            </a>
                                        </td>
                                      </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            <div class="clearfix"></div>
                        </div>
                    </div>
	            </div>
            </div>
    </div>
</div>

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\My Projects\Ticketing\resources\views\admin\reviews\index.blade.php ENDPATH**/ ?>