<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container h-100" style="text-align:center"> <h1>Create</h1></div>
    <div>
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($errors); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </div>
    <form method="post" action="<?php echo e(route('products.update',['product'=>$product])); ?>">
    <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
    <section class="vh-100" style="background-color: #eee;">
        
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius:25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Product Registration</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Name</label>  
                    <input type="text" id="form3Example1c" class="form-control" name="name" value="<?php echo e($product->name); ?>"/>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Quantity</label>
                      <input type="text" id="form3Example3c" class="form-control" name="qty" value="<?php echo e($product->qty); ?>"/>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Price</label>
                        <input type="text" id="form3Example4c" class="form-control" name="price" value="<?php echo e($product->price); ?>"/>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Description</label>  
                    <input type="text" id="form3Example4cd" class="form-control" name="desc" value="<?php echo e($product->desc); ?>"/>
                      
                    </div>
                  </div>

                  <input type="submit" value="clickme"/>    

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <!--<button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Submit</button>-->
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
</form>
</body>
</html>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello create</h1>    
    <div>
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($errors); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </div>

    <form method="post" action="<?php echo e(route('products.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>

        <input type="text" placeholder="name" name="name"/>
        <input type="text" placeholder="qty" name="qty"/>
        <input type="text" placeholder="price" name="price"/>
        <input type="text" placeholder="desc" name="desc"/>
        <input type="submit" value="clickme"/>
    </form>

</body>
</html> --><?php /**PATH C:\xampp\htdocs\app-crud\resources\views/products/edit.blade.php ENDPATH**/ ?>