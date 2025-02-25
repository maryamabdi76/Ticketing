<?php $__env->startSection('content'); ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">سالن ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item"><a href="/admin/salons">سالن ها</a></li>
              <li class="breadcrumb-item active">افزودن بخش</li>
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
                <div class="card-header"><?php echo e(__('افزودن بخش')); ?></div>
                    <p class="mt-3 text-center">قرار دادن "-" در میان اعداد در بخش "چیدمان صندلی ها" به معنی فضای خالی بین سری از صندلی هاست.</p>
                <div class="card-body">
                        <form method="POST" action="/storeSegment">
                            <?php echo csrf_field(); ?>
                            <input id="id" type="hidden" class="form-control " name="id" value="<?php echo e($salon_id); ?>" >
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-left"><?php echo e(__('نام')); ?></label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" autocomplete="name" autofocus>

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="row" class="col-md-4 col-form-label text-md-left"><?php echo e(__('تعداد ردیف')); ?></label>

                                <div class="col-md-6">
                                    <input id="row" type="text" class="form-control <?php $__errorArgs = ['row'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="row" required autocomplete="row" autofocus>

                                    <?php $__errorArgs = ['row'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="seat" class="col-md-4 col-form-label text-md-left"><?php echo e(__('چیدمان صندلی ها')); ?></label>

                                <div class="col-md-6">
                                    <input id="seat" type="text" class="form-control <?php $__errorArgs = ['seat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="seat" required autocomplete="seat" autofocus>

                                    <?php $__errorArgs = ['seat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="capicity" class="col-md-4 col-form-label text-md-left"><?php echo e(__('ظرفیت')); ?></label>

                                <div class="col-md-6">
                                    <input id="capicity" type="text" class="form-control <?php $__errorArgs = ['capicity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="capicity" required autocomplete="capicity" autofocus>

                                    <?php $__errorArgs = ['capicity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="orders" class="col-md-4 col-form-label text-md-left"><?php echo e(__('ترتیب')); ?></label>

                                <div class="col-md-6">
                                    <input id="orders" type="text" class="form-control <?php $__errorArgs = ['orders'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="orders" required autocomplete="orders" autofocus>

                                    <?php $__errorArgs = ['orders'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-left"><?php echo e(__('قیمت')); ?></label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" required autocomplete="price" autofocus>

                                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-primary w-100" id="show-seats">
                                        <?php echo e(__('پیش نمایش')); ?>

                                    </button>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <?php echo e(__('اضافه کردن')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    <h5 class="chidemantitle mt-5">چیدمان</h5>
                    <div class="seat-plan-section padding-bottom padding-top mt-5">
                        <div class="container">
                            <div class="screen-area">
                                <div class="screen-wrapper" id="seats-part">
                                    <ul class="seat-area mb-5imp" id="last-seats">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
        $(document).ready(function() {
            $('#show-seats').click(function() {
                $('#last-seats').hide();

                var alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"]
                var row = $('#row').val();
                var seat = $('#seat').val();
                var price = $('#price').val();
                var part = seat.split("-");
                var i = 0; var j = 0; var k = 0;
                var seats; var seat_number;
                var img = "<?php echo e(asset('images/movie/seat.png')); ?>" ;

                    seats+='<ul class="seat-area mb-5imp" id="last-seats">';
                    for(j=0;j<row;j++){
                        var n = 1;
                        seats+='<li class="seat-line"><span>'+alphabet[i]+'</span>';
                            $.each(part, function( index, value ) {
                                seats+='<ul class="seat--area"><li class="front-seat"><ul>';
                                    for(k=0;k<value;k++){
                                        seat_number=alphabet[i]+n;
                                        seats+='<li class="single-seat" id="'+seat_number+'" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: '+price+' تومان"><img src="'+img+'" alt="seat"><span class="sit-num">'+seat_number+'</span></li>';
                                        n++;
                                    }
                                seats+='</ul></li></ul>';
                            });
                        i++;
                        seats+='</li>';
                    }
                    seats+='</ul>';

                $('#seats-part').html(seats);
            });
        });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\My Projects\Ticketing\resources\views\admin\segments\add.blade.php ENDPATH**/ ?>