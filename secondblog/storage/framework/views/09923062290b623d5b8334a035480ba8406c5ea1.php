


<style type="text/css">

  input[type="text"]:disable {
    .table-primary: disabled;
  } 

</style>

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Score Card</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Score</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="card-body" style="overflow-x:auto;">
          <div class="row">
<?php $__currentLoopData = $scores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $players => $scores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <table>
          <th>Player Name</th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
          <th>6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
          <th>OUT</th>
          <th>Gross</th>
          <th>Nett</th>
            <tr>
              <td><input class="table-primary" type='text' name='name' value="<?php echo e($scores->player()->first()->name); ?>" readonly="" /></td>
              <td><input class="table-primary" type='text' id="num1" onKeyup="sum();" name='h_one' value="<?php echo e($scores->h_one); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num2" onKeyup="sum();" name='h_two' value="<?php echo e($scores->h_two); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num3" onKeyup="sum();" name='h_three' value="<?php echo e($scores->h_three); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num4" onKeyup="sum();" name='h_four' value="<?php echo e($scores->h_four); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num5" onKeyup="sum();" name='h_five' value="<?php echo e($scores->h_five); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num6" onKeyup="sum();" name='h_six' value="<?php echo e($scores->h_six); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num7" onKeyup="sum();" name='h_seven' value="<?php echo e($scores->h_seven); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num8" onKeyup="sum();" name='h_eight' value="<?php echo e($scores->h_eight); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num9" onKeyup="sum();" name='h_nine' value="<?php echo e($scores->h_nine); ?>"readonly  style="width: 4em"/></td>
              <td><input class="table-primary" type='text' id="num10" name='h_out' value="<?php echo e($scores->h_out); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-danger" type='text' name='gross' value="<?php echo e($scores->gross); ?>" readonly style="width: 4em"/></td>
              <td><input class="table-warning" type='text' name='nett' value="<?php echo e($scores->nett); ?>" readonly style="width: 4em"/></td>
            </tr>
          <th>Handicap</th>
          <th>10</th>
          <th>11</th>
          <th>12</th>
          <th>13</th>
          <th>14</th>
          <th>15</th>
          <th>16</th>
          <th>17</th>
          <th>18</th>
          <th>IN</th>
          <th></th>
        <tr>
          <td><input class="table-primary" type='text' name='hcap' value="<?php echo e($scores->player()->first()->hcap); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num10" onKeyup="sum();" name='h_ten' value="<?php echo e($scores->h_ten); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num11" onKeyup="sum();" name='h_elev' value="<?php echo e($scores->h_elev); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num12" onKeyup="sum();" name='h_twelv' value="<?php echo e($scores->h_twelv); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num13" onKeyup="sum();" name='h_thrth' value="<?php echo e($scores->h_thrth); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num14" onKeyup="sum();" name='h_fourth' value="<?php echo e($scores->h_fourth); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num15" onKeyup="sum();" name='h_fivth' value="<?php echo e($scores->h_fivth); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num16" onKeyup="sum();" name='h_sixth' value="<?php echo e($scores->h_sixth); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num17" onKeyup="sum();" name='h_sevth' value="<?php echo e($scores->h_sevth); ?>" readonly style="width: 4em"/></td>
          <td><input type='text' id="num18" onKeyup="sum();" name='h_eigth' value="<?php echo e($scores->h_eigth); ?>" readonly style="width: 4em"/></td>
          <td><input class="table-info" type='text' id="num20" name='h_in' value="<?php echo e($scores->h_in); ?>" readonly style="width: 4em"/></td>
          <td></td>
          <td><a href='dashboard/<?php echo e($scores->player()->first()->id); ?>/edit' class="btn btn-sm btn-primary">Edit</a></td>
        <tr>
        </table>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\secondblog\resources\views/history/index.blade.php ENDPATH**/ ?>