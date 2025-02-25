<?php $__env->startSection('content'); ?>

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">

 <div id="content">

  <div class="container-fluid">
    <div class="card cardbg o-hidden border-0 shadow-lg my-5">
        <div class="row">
                <section class="feature_product_area  new-product">
                        <div class="container mt-3">
                          <div class="row jccenter pr-2 pt-5 pb-3">
                              <?php if($count==0): ?>
                              <p class="font-weight-bolder fontsize30 text-center topright50 maxh500">یعنی به هیچی علاقه مند نیستی ؟! <i class="fas fa-dot-circle"></i> ⌢ <i class="fas fa-dot-circle"></i></p>
                              <?php endif; ?>
                              <?php if($count==1): ?>
                                    <?php $__currentLoopData = $favorites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($v->categories_id==1){$cat_name="movie";}
                                          if($v->categories_id==2){$cat_name="concert";}
                                          if($v->categories_id==3){$cat_name="theater";} ?>
                                    <div class="col-md-4 minwidth300 mb-20 box">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                            <a href="/<?php echo e($cat_name); ?>-details/<?php echo e($v->id); ?>">
                                                    <img height="350px" src="<?php echo e(asset('/').$v->Images()->get()->first()->path); ?>" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/<?php echo e($cat_name); ?>-details/<?php echo e($v->id); ?>"><?php echo e($v->name); ?></a>
                                                </h5>
                                            </div>
                                            <div class="ribbon ribbon-top-right zindex1 mglr9 mgtb15"><span class="shabnam">❤‿❤</span></div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <?php if($count > 1): ?>
                                    <?php $__currentLoopData = $favorites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($v->categories_id==1){$cat_name="movie";}
                                          if($v->categories_id==2){$cat_name="concert";}
                                          if($v->categories_id==3){$cat_name="theater";} ?>
                                    <div class="col-md-4 mb-20 box">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                            <a href="/<?php echo e($cat_name); ?>-details/<?php echo e($v->id); ?>">
                                                    <img height="350px" src="<?php echo e(asset('/').$v->Images()->get()->first()->path); ?>" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/<?php echo e($cat_name); ?>-details/<?php echo e($v->id); ?>"><?php echo e($v->name); ?></a>
                                                </h5>
                                            </div>
                                            <div class="ribbon ribbon-top-right zindex1 mglr9 mgtb15"><span class="shabnam">❤‿❤</span></div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                        </div>
                    </section>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.prolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\My Projects\Ticketing\resources\views\profile\favorites.blade.php ENDPATH**/ ?>