<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <h2>Hello Index</h2>   
    <div>
        <?php if(session()->has('sucess')): ?>
            <div>
                    <?php echo e(session('sucess')); ?>

            </div>
        <?php endif; ?>

    </div>
    <div>
        <a href="<?php echo e(route('products.create')); ?>">Create Product</a>
        </div>
    <div>
            <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->id); ?></td>
                            <td><?php echo e($product->name); ?></td>
                            <td><?php echo e($product->qty); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->desc); ?></td>
                            <td>
                                    <a href="<?php echo e(route('products.edit',['product'=>$product])); ?>">Edit</a>
                            </td> 
                            <td>
                                    <form method="post" action="<?php echo e(route('products.destroy',['product'=>$product])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <input type="submit" value="Delete"/>    
                                </form>
                            </td>        
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                 
            </table>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\app-crud\resources\views/products/index.blade.php ENDPATH**/ ?>