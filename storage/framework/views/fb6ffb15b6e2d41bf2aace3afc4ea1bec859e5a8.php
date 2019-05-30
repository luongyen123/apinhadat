<?php $__env->startSection('title'); ?>
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="section">
    <h1 class="section-header">
        <div><?php echo e($title); ?>

           
        </div>
    </h1>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
            <div class="card-header">
                <h4>Danh sách bài viết</h4>
            </div>
            <div class="card-body">
            <label>Tin mua bán nhà đất</label>
                <table class="table table-striped" id="">
                    <thead>
                        <tr>
                            <th>Tiêu đề</th>
                            <th>Giá</th>
                            <th>Diện tích</th>
                            <th>Vị trí</th>
                            <th>Người đăng</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $tinmuaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tinban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                     
                        <tr>
                            <td>
                                <?php echo e($tinban->tieude); ?>

                            </td>
                            <td>
                                <?php echo e($tinban->gia); ?> <?php echo e($tinban->tiente); ?>

                            </td>
                            <td>
                                <?php echo e($tinban->dientich); ?> <?php echo e($tinban->dvdt); ?>

                            </td>
                            <td> <?php echo e($tinban->vitri); ?></td>
                            <td><?php echo e($tinban->user->name); ?></td>
                            <td>
                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit" href="/admin/editTinmua/<?php echo e($tinban->id); ?>"><i class="ion ion-edit"></i></a>
                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                 <?php echo e($tinmuaban->links()); ?>

                
            </div>
            </div>
        </div>
    </div>
 </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src = "<?php echo e(asset('../dist/js/backend/cookie.min.js')); ?>"></script>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apinhadat\resources\views/contents/tinmuaban.blade.php ENDPATH**/ ?>