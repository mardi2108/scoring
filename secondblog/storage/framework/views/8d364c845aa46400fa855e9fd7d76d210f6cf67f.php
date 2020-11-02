

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo e(auth()->user()->name); ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <?php if(session('error')): ?>
                                
                <?php echo session('error'); ?>

            
        <?php endif; ?>
        <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stock</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>TIKET</strong>
                                    </td>
                                    <td>
                                        <strong><?php echo e(number_format('50000')); ?></strong>
                                    </td>
                                    <td><?php echo e(($tickets->stock)); ?></td>
                                    <td>
                                            <a href="ticket/<?php echo e($tickets->id); ?>" 
                                                class="btn btn-primary btn-sm">
                                                <i>Kirim</i>
                                            </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="float-right">

                    </div>
                
            </div>
        </div>
    </div>
</section>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          information
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\secondblog\resources\views/ticket/index.blade.php ENDPATH**/ ?>