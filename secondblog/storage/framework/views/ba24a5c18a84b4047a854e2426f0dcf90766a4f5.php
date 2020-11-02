

<meta charset="utf-8" name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>

<?php $__env->startSection('content'); ?>

<div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Kirim Tiket</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="/tiket">Produk</a></li>
                            <li class="breadcrumb-item active">Kirim</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<!-- section -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>Tiket yang dimiliki <?php echo e(Auth::user()->name); ?> </h2>
                <form action="prosess" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <select type="text" class="form-control" name="user_id">
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option type="text" class="form-control" value="<?php echo e($row->id); ?>"><?php echo e($row->username); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="stock">Jumlah Tiket</label>
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="Jumlah">
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button id="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\secondblog\resources\views/tickets/edit.blade.php ENDPATH**/ ?>