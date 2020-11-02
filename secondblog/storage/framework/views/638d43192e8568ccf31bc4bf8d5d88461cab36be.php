

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
<div style="overflow-x:auto;">
      <!-- Default box -->
      <form action = "create" method = "post">
        <?php echo csrf_field(); ?>
        <table>
          <th>Name</th>
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
          <th>Total</th>
            <tr>
              <td><input type='text' name='name' /></td>
              <td><input type='text' name='p_one' style="width: 3em"/></td>
              <td><input type='text' name='p_two' style="width: 3em"/></td>
              <td><input type='text' name='p_three' style="width: 3em"/></td>
              <td><input type='text' name='p_four' style="width: 3em"/></td>
              <td><input type='text' name='p_five' style="width: 3em"/></td>
              <td><input type='text' name='p_six' style="width: 3em"/></td>
              <td><input type='text' name='p_seven' style="width: 3em"/></td>
              <td><input type='text' name='p_eight' style="width: 3em"/></td>
              <td><input type='text' name='p_nine' style="width: 3em"/></td>
              <td><input type='text' name='p_out' style="width: 3em"/></td>
              <td><input type='text' name='p_tot' style="width: 3em"/></td>
            </tr>
          <th></th>
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
        <tr>
        <td><input type='hidden'/></td>
        <td><input type='text' name='p_ten' style="width: 3em"/></td>
        <td><input type='text' name='p_elv' style="width: 3em"/></td>
        <td><input type='text' name='p_twl' style="width: 3em"/></td>
        <td><input type='text' name='p_thrth' style="width: 3em"/></td>
        <td><input type='text' name='p_fourth' style="width: 3em"/></td>
        <td><input type='text' name='p_fivth' style="width: 3em"/></td>
        <td><input type='text' name='p_sixth' style="width: 3em"/></td>
        <td><input type='text' name='p_sevth' style="width: 3em"/></td>
        <td><input type='text' name='p_eigth' style="width: 3em"/></td>
        <td><input type='text' name='p_in' style="width: 3em"/></td>
        <td><button type='submit' class="btn btn-sm btn-primary">save</button></td>
        <tr>
        </table>
      </form>
    <br>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <table>
        <th>Name</th>
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
        <th>Total</th>
          <tr>
            <td><input type='text' value='<?php echo e($row->name); ?>' readonly /></td>
            <td><input type='number' value='<?php echo e($row->p_one); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_two); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_three); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_four); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_five); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_six); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_seven); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_eight); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_nine); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_out); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_tot); ?>' style="width: 4em" readonly/></td>
          </tr>
        <th></th>
        <th>10</th>
        <th>11</th>
        <th>12</th>
        <th>13</th>
        <th>14</th>
        <th>15</th>
        <th>16</th>
        <th>17</th>
        <th>18</th>
          <tr>
            <td><input type='hidden'/></td>
            <td><input type='number' value='<?php echo e($row->p_ten); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_elv); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_twl); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_thrth); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_fourth); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_fivth); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_sixth); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_sevth); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_eigth); ?>' style="width: 4em" readonly/></td>
            <td><input type='number' value='<?php echo e($row->p_in); ?>' style="width: 4em" readonly/></td>
          <tr>
        </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\secondblog\resources\views/course/index.blade.php ENDPATH**/ ?>