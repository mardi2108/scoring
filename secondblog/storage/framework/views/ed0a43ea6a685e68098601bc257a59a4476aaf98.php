

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>

    <div class="card-body row">
        <div class="card card-success login-box">
            <?php if(session('error')): ?>
            <?php echo session('error'); ?>

            <?php endif; ?>
              <div class="card-header">
                <h3 class="card-title">EDIT PLAYER</h3>
              </div>

                    <?php $__env->slot('title'); ?>
                    
                    <?php $__env->endSlot(); ?>
                    
                    <?php if(session('error')): ?>
                        @alert(['type' => 'danger'])
                            <?php echo session('error'); ?>

                        @endalert
                    <?php endif; ?>
                    <form action="update" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Player</label>
                            <input type="text" name="name" 
                                value="<?php echo e($player->name); ?>"
                                class="form-control <?php echo e($errors->has('name') ? 'is-invalid':''); ?>">
                            <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                        </div>
                        <div class="form-group">
                            <label for="">Handicap</label>
                            <input type="text" name="hcap" required 
                                value="<?php echo e($player->hcap); ?>"
                                class="form-control <?php echo e($errors->has('hcap') ? 'is-invalid':''); ?>">
                            <p class="text-danger"><?php echo e($errors->first('hcap')); ?></p>
                        </div>
                        <div class="form-group">
                            <label for="">Flight</label>
                            <select type="text" name="flight" required 
                                value="<?php echo e($player->flight); ?>"
                                class="form-control <?php echo e($errors->has('flight') ? 'is-invalid':''); ?>">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                            <p class="text-danger"><?php echo e($errors->first('flight')); ?></p>
                        </div>
                        <div class="form-group">
                            <label for="">Bag Tag</label>
                            <input type="number" name="bagtag" required 
                                value="<?php echo e($player->bagtag); ?>"
                                class="form-control form-control-sm <?php echo e($errors->has('bagtag') ? 'is-invalid':''); ?>">
                            <p class="text-danger"><?php echo e($errors->first('bagtag')); ?></p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-sm">
                                <i class="fa fa-refresh"></i> Update
                            </button>
                        </div>
                    </form>
                  </div>
                  </div>
                  <?php echo $__env->make('dashboard.score', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php $__env->slot('footer'); ?>
                    <?php $__env->endSlot(); ?>

            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\secondblog\resources\views/dashboard/edit.blade.php ENDPATH**/ ?>