<?php $__env->startSection('content'); ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">نمایش ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item"><a href="/admin/shows">نمایش ها</a></li>
              <li class="breadcrumb-item active">سالن نمایش</li>
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
                <div class="card-header"><?php echo e(__('نمایش سالن و رزرو')); ?></div>

                <div class="card-body">
                    <div class="seat-plan-section padding-bottom padding-top">
                        <div class="container">
                            <ul class="seinfoli">
                                <li class="tifanyc">وضعیت صندلی ها:</li>
                                <li class="single-seat">
                                    <img src="<?php echo e(asset('images/movie/seat01.png')); ?>" alt="seat">
                                    <span>قابل خرید</span>
                                </li>
                                <li class="single-seat">
                                    <img src="<?php echo e(asset('images/movie/seat01-chosen.png')); ?>" alt="seat">
                                    <span>رزرو شده برای شما</span>
                                </li>
                                <li class="single-seat">
                                    <img src="<?php echo e(asset('images/movie/seat01-taken.png')); ?>" alt="seat">
                                    <span>فروخته شده</span>
                                </li>
                            </ul>
                            <div class="screen-area">
                                <h4 class="screen">پرده نمایش</h4>
                                <div class="screen-thumb">
                                    <img src="<?php echo e(asset('images/movie/screen-thumb.png')); ?>" alt="movie">
                                </div>
                                <input type="hidden" name="shows_id" id="shows_id" value="<?php echo e($shows_id); ?>">
                                <?php $i=0; ?>
                                <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $part = explode('-' ,$seg->seat);
                                $row=$seg->row;
                                ?>
                                <?php if(!empty($seg->name)): ?>
                                <h5 class="subtitle mt-5"><?php echo e($seg->name); ?></h5>
                                <?php endif; ?>
                                <div class="screen-wrapper">
                                    <ul class="seat-area mb-5imp">
                                        <?php for($j=0;$j<$row;$j++): ?>
                                        <?php $n=1; ?>
                                        <li class="seat-line">
                                            <span><?php echo e($alphabet[$i]); ?></span>
                                            <?php $__currentLoopData = $part; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <ul class="seat--area">
                                                <li class="front-seat">
                                                    <ul>
                                                        <?php for($k=0;$k<$p;$k++): ?>
                                                        <?php
                                                        $seat_number=$alphabet[$i].$n;
                                                        $flag=$mine=0;
                                                        if(in_array($seat_number, $taken_seats)){$flag=1;}
                                                        if(!empty($myseats)){
                                                            if(in_array($seat_number, $myseats)){$mine=1;}
                                                        }
                                                        ?>
                                                            <?php if($flag==0): ?>
                                                                <?php if($mine==0): ?>
                                                                    <?php if($price==0): ?>
                                                                        <li class="single-seat seat-free" id="<?php echo e($seat_number); ?>" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: <?php echo e($seg->price); ?> تومان">
                                                                            <input type="checkbox" name="seat[]" value="<?php echo e($seg->price); ?>" id="<?php echo e($seat_number); ?>" class="input_seat_checkbox reserve-seat">
                                                                            <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                                            <?php $n++; ?>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                    <?php if($price > 0): ?>
                                                                        <li class="single-seat seat-free" id="<?php echo e($seat_number); ?>" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: <?php echo e($price); ?> تومان">
                                                                            <input type="checkbox" name="seat[]" value="<?php echo e($price); ?>" id="<?php echo e($seat_number); ?>" class="input_seat_checkbox reserve-seat">
                                                                            <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                                            <?php $n++; ?>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                                <?php if($mine==1): ?>
                                                                    <?php if($price==0): ?>
                                                                        <li class="single-seat seat-free" id="<?php echo e($seat_number); ?>" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: <?php echo e($seg->price); ?> تومان">
                                                                            <input type="checkbox" name="seat[]" value="<?php echo e($seg->price); ?>" id="<?php echo e($seat_number); ?>" class="input_seat_checkbox_reverse reserve-seat" checked>
                                                                            <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                                            <?php $n++; ?>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                    <?php if($price > 0): ?>
                                                                        <li class="single-seat seat-free" id="<?php echo e($seat_number); ?>" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: <?php echo e($price); ?> تومان">
                                                                        <input type="checkbox" name="seat[]" value="<?php echo e($price); ?>" id="<?php echo e($seat_number); ?>" class="input_seat_checkbox_reverse reserve-seat" checked>
                                                                            <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                                            <?php $n++; ?>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php if($flag==1): ?>
                                                            <li class="single-seat">
                                                                <img src="<?php echo e(asset('images/movie/seat01-taken.png')); ?>" alt="seat">
                                                                <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                                <?php $n++; ?>
                                                            </li>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php $i++; ?>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="book-item text-right mt-5">
                                <span>شما صندلی های زیر را انتخاب کردید:</span>
                                <h3 class="title" id="chosenseats">
                                    <?php if($myseats!==null): ?>
                                    <?php $__currentLoopData = $myseats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        ,<?php echo e($ms); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </h3>
                            </div>
                            <div>
                                <a href="/admin/shows" class="btn btn-primary " >
                                    <span class="fa fa-check"></span> رزرو
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
        $('.seat-free').click(function() {
            var x = jQuery(this).find('.seat_checkbox');
            x.toggleClass('checked').prev().prop('checked',$('.seat_checkbox').is('.checked'));

            var id = $(this).attr('id');
            var shows_id = $('#shows_id').val();

            $.ajax({
                type: 'POST',
                url: "/adminChosenSeat",
                dataType: 'json',
                data: { "_token": "<?php echo e(csrf_token()); ?>",
                        "id" : id,
                        "shows_id" : shows_id
                },

                success:function(response , status){
                    $("#chosenseats").text(response.seats);
                },error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('AJAX error:', textStatus)
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\My Projects\Ticketing\resources\views\admin\shows\show.blade.php ENDPATH**/ ?>