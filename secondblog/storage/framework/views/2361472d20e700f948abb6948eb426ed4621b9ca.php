
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

<script type="text/javascript">

function sum() {
      var txtFirstNumberValue = document.getElementById('num1').value;
      var txtSecondNumberValue = document.getElementById('num2').value;
      var txtThirthNumberValue = document.getElementById('num3').value;
      var txtFourthNumberValue = document.getElementById('num4').value;
      var txtFivethNumberValue = document.getElementById('num5').value;
      var txtSixthNumberValue = document.getElementById('num6').value;
      var txtSeventhNumberValue = document.getElementById('num7').value;
      var txtEighthNumberValue = document.getElementById('num8').value;
      var txtNinethNumberValue = document.getElementById('num9').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) 
                  + parseInt(txtThirthNumberValue) + parseInt(txtFourthNumberValue)
                  + parseInt(txtFivethNumberValue) + parseInt(txtSixthNumberValue)
                  + parseInt(txtSeventhNumberValue) + parseInt(txtEighthNumberValue)
                  + parseInt(txtNinethNumberValue);
      if (!isNaN(result)) {
         document.getElementById('num10').value = result;
       }

      var txtSeblsNumberValue = document.getElementById('num11').value;
      var txtDuablsNumberValue = document.getElementById('num12').value;
      var txtTigablsNumberValue = document.getElementById('num13').value;
      var txtEmpatblsNumberValue = document.getElementById('num14').value;
      var txtLimablsNumberValue = document.getElementById('num15').value;
      var txtEnamblsNumberValue = document.getElementById('num16').value;
      var txtTujuhblsNumberValue = document.getElementById('num17').value;
      var txtDelapanblsNumberValue = document.getElementById('num18').value;
      var txtSembilanblsNumberValue = document.getElementById('num19').value;
      var result = parseInt(txtSeblsNumberValue) + parseInt(txtDuablsNumberValue) 
                  + parseInt(txtTigablsNumberValue) + parseInt(txtEmpatblsNumberValue)
                  + parseInt(txtLimablsNumberValue) + parseInt(txtEnamblsNumberValue)
                  + parseInt(txtTujuhblsNumberValue) + parseInt(txtDelapanblsNumberValue)
                  + parseInt(txtSembilanblsNumberValue);
      if (!isNaN(result)) {
         document.getElementById('num20').value = result;
       }
    }

</script>
<style>

#players th {
  background-color: #4CAF50;
  color: white;
  text-align: center;
}
</style>

<div class="d-inline justify-content-center card-body p-2" style="overflow-x:auto; width: 65%">
    <form action = "prosess" method = "post">
        <?php echo csrf_field(); ?>
        <table id="players" class="justify-content-center table-bordered">
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
          <th>6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
          <th>Out</th>
          <th>Gross</th>
          <th>Hcap</th>
          <th>Nett</th>
            <tr>
              <td><input id="num1" onKeyup="sum();" type='number' name='h_one' value="<?php echo e($score->h_one); ?>" style="width: 3em"/></td>
              <td><input id="num2" onKeyup="sum();" type='number' name='h_two' value="<?php echo e($score->h_two); ?>" style="width: 3em"/></td>
              <td><input id="num3" onKeyup="sum();" type='number' name='h_three' value="<?php echo e($score->h_three); ?>" style="width: 3em"/></td>
              <td><input id="num4" onKeyup="sum();" type='number' name='h_four' value="<?php echo e($score->h_four); ?>" style="width: 3em"/></td>
              <td><input id="num5" onKeyup="sum();" type='number' name='h_five' value="<?php echo e($score->h_five); ?>" style="width: 3em"/></td>
              <td><input id="num6" onKeyup="sum();" type='number' name='h_six' value="<?php echo e($score->h_six); ?>" style="width: 3em"/></td>
              <td><input id="num7" onKeyup="sum();" type='number' name='h_seven' value="<?php echo e($score->h_seven); ?>" style="width: 3em"/></td>
              <td><input id="num8" onKeyup="sum();" type='number' name='h_eight' value="<?php echo e($score->h_eight); ?>" style="width: 3em"/></td>
              <td><input id="num9" onKeyup="sum();" type='number' name='h_nine' value="<?php echo e($score->h_nine); ?>" style="width: 3em"/></td>
              <td><input id="num10" type='number' name='h_out' readonly="" value="<?php echo e($score->h_out); ?>" onKeyup="math();" style="width: 3em"/></td>
              <td><input id="num40" type='number' name='gross' readonly="" value="<?php echo e($score->gross); ?>" onKeyup="math();" style="width: 3em"/></td>
              <td><input id="num60" type='number' name='hcap' readonly="" value="<?php echo e($score->player()->first()->hcap); ?>" onKeyup="math();" style="width: 3em"/></td>
              <td><input id="num50" type='number' name='nett' readonly="" value="<?php echo e($score->nett); ?>" style="width: 3em"/></td>
            </tr>
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
          <th>Total</th>
        <tr>
          <td><input id="num11" onKeyup="sum();" type='number' name='h_ten' value="<?php echo e($score->h_ten); ?>" style="width: 3em"/></td>
              <td><input id="num12" onKeyup="sum();" type='number' name='h_elev' value="<?php echo e($score->h_elev); ?>" style="width: 3em"/></td>
              <td><input id="num13" onKeyup="sum();" type='number' name='h_twelv' value="<?php echo e($score->h_twelv); ?>" style="width: 3em"/></td>
              <td><input id="num14" onKeyup="sum();" type='number' name='h_thrth' value="<?php echo e($score->h_thrth); ?>" style="width: 3em"/></td>
              <td><input id="num15" onKeyup="sum();" type='number' name='h_fourth' value="<?php echo e($score->h_fourth); ?>" style="width: 3em"/></td>
              <td><input id="num16" onKeyup="sum();" type='number' name='h_fivth' value="<?php echo e($score->h_fivth); ?>" style="width: 3em"/></td>
              <td><input id="num17" onKeyup="sum();" type='number' name='h_sixth' value="<?php echo e($score->h_sixth); ?>" style="width: 3em"/></td>
              <td><input id="num18" onKeyup="sum();" type='number' name='h_sevth' value="<?php echo e($score->h_sevth); ?>" style="width: 3em"/></td>
              <td><input id="num19" onKeyup="sum();" type='number' name='h_eigth' value="<?php echo e($score->h_eigth); ?>" style="width: 3em"/></td>
              <td><input id="num20" type='number' name='h_in' value="<?php echo e($score->h_in); ?>" onKeyup="math();" style="width: 3em"/></td>
              <td><input id="num30" type='number' name='total' value="<?php echo e($score->total); ?>" readonly style="width: 3em"/></td>
        <td><button type='submit' class="btn btn-sm btn-primary">save</button></td>
        <tr>
        </table>
    </form>
</div>

<script language="javascript" type="text/javascript">

function math() {
  var txtTenNumberValue = document.getElementById("num10").value;
  var txtTwenteNumberValue = document.getElementById("num20").value;
  var result = parseInt(txtTenNumberValue) + parseInt(txtTwenteNumberValue);
  if (!isNaN(result)) {
         document.getElementById('num30').value = result;
}
  var txtTenNumberValue = document.getElementById("num10").value;
  var txtTwenteNumberValue = document.getElementById("num20").value;
  var result = parseInt(txtTenNumberValue) + parseInt(txtTwenteNumberValue);
  if (!isNaN(result)) {
         document.getElementById('num40').value = result;
       }

  var txtSixtyNumberValue = document.getElementById("num60").value;
  var txtFourtyNumberValue = document.getElementById("num40").value;
  var result = parseInt(txtFourtyNumberValue) - parseInt(txtSixtyNumberValue);
  if (!isNaN(result)) {
         document.getElementById('num50').value = result;
       }

}


</script><?php /**PATH C:\xampp\htdocs\secondblog\resources\views/dashboard/score.blade.php ENDPATH**/ ?>