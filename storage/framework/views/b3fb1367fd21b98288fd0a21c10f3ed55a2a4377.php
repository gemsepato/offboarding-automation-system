<?php $__env->startSection('content'); ?>

<div class="col-xl-12">
    <div class="row">
        <div class="col-xl-10 mx-auto mt-5">
          <div class="card card-signup d-block mx-auto" >
            <div class="card-grey py-4">
              <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="card-header text-center px-3 px-md-4 py-0">
                
                  <img  src="/assets/images/logo.png" alt="logo" width="80" height="70" class="z-depth-2">
                  <p style="font-weight: 700; line-height: 1; font-size: 14px;"><b>MEMBER LOGIN</b></p>
                  <hr>
                </div>
          
                <div class="card-body  px-4 px-md-5">
                  
                  <div class="form-group pt-2">
                    <label class="control-label text-uppercase h6" >Email :</label>
                    <input type="email" id="email" name="email" class="classic-input form-control font-weight-bold <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>" autofocus >
                    <?php if($errors->has('email')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('email')); ?>

                    </div>
                    <?php endif; ?>
                  </div>
                  <div class="form-group pt-1">
                    <label class="control-label text-uppercase h6" >Password :</label> 
                    <input type="password" id="password" name="password" class="classic-input form-control font-weight-bold <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Password">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password" style="float: right; margin-right: 10px; margin-top: -25px; position: relative; z-index: 2;"></span>
                    <?php if($errors->has('password')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('password')); ?>

                        </div>
                    <?php endif; ?>
                  </div>
                  
                  <input type="submit" name="login" id="login" class="btn btn-main" value="Login" />

                  
                </div>
                <p class="text-center mt-3 color-black" style="font-size: 15px; font-weight: 500;">Do not have an account yet? <a href="/register"><b class="color-black" style="font-weight: 700">Register here</b></a></p>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>  


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>

$("body").on('click', '.toggle-password', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#password");
    if (input.attr("type") === "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
    }
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\offboarding-updated\resources\views/auth/login.blade.php ENDPATH**/ ?>