<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A4</title>
  <link rel="stylesheet" media="screen" href="<?php echo e(asset('css/print.css')); ?>">
  <link rel="stylesheet" media="print" type="text/css" href="<?php echo e(asset('css/print.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>@page  { size: A4 }</style>
</head>
<body class="A4">
    <?php $__currentLoopData = $seats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="sheet padding-10mm">
            <div class="d-flex-col">
                <div class="d-flex1">
                    <div class="pl-2"><img src="<?php echo e(asset('/').$event[0]->Images()->get()->first()->path); ?>" alt=""></div>
                    <div class="jccenter evdiv pr-2">
                        <p class="evdivp1"><?php echo e($eventcat); ?></p>
                        <p class="evdivp2"><?php echo e($eventname); ?></p>
                        <?php if(!empty($act)): ?><p class="evdivp3"><?php echo e($act); ?></p><?php endif; ?>
                        <br><hr><br>
                        <p class="evdivp4 text-center">بلیت به شرح:</p>
                    </div>
                </div>
                <p class="bord"></p>
                <div class="d-flex text-right mt--3 boxbord">
                    <div class="d-flex text-right bord">
                        <div class="title">
                            <b><i class="fa fa-calendar pl-1"></i> به نام:</b>
                        </div>
                        <div class="note">
                            <p><?php echo e($gender); ?>&nbsp;<?php echo e($name); ?></p>
                        </div>
                    </div>
                    <div class="d-flex text-right bord">
                        <div class="title">
                            <b><i class="fa fa-calendar pl-1"></i> زمان برگزاری:</b>
                        </div>
                        <div class="note">
                            <p>تاریخ: <?php echo e($date); ?>&nbsp;&nbsp;ساعت: <?php echo e($begin); ?> الی <?php echo e($end); ?></p>
                        </div>
                    </div>
                    <div class="d-flex text-right bord ml-2 mr-2">
                        <div class="title">
                            <b><i class="fa fa-map-o pl-1"></i> مکان برگزاری:</b>
                        </div>
                        <div class="note">
                            <p><b><?php echo e($location); ?>&nbsp;-&nbsp;<?php echo e($salon); ?></b><br><?php echo e($address); ?></p>
                        </div>
                    </div>
                    <div class="d-flex text-right bord">
                        <div class="title">
                            <b>جایگاه:</b>
                        </div>
                        <div class="note">
                            <p><?php echo e($segment); ?></p>
                        </div>
                    </div>
                    <div class="d-flex text-center bord">
                        <div>
                            <b class="title">شماره صندلی:</b>
                        </div>
                        <div>
                            <p class="note"><?php echo e($seat); ?></p>
                        </div>
                    </div>
                    <div class="d-flex text-center bord">
                        <div>
                            <p class="title">شماره فاکتور</p>
                        </div>
                        <div>
                            <p class="note"><?php echo e($factor_id); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>
<?php /**PATH C:\My Projects\Ticketing\resources\views\printTicket.blade.php ENDPATH**/ ?>