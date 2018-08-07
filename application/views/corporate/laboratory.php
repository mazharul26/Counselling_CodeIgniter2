<br/><br/><br/><br/>
<div class="container">
    <div class="row">

        <div class="col-sm-9">
            <br/><br/>
            <h2 style="text-align: center">Our Laboratory Test Service</h2>
            <br/><br/>
            <table id="myTable" class="table table-bordered" bodder="2" style="text-align: left;">
                <tr >  
                    <th width="50%" style="text-align: left;"><h2>Name </h2></th>
                <th width="50%" style="text-align: center;" ><h2>Price</h2></th>
                <th width="50%" style="text-align: left;"><h2>Select </h2></th>
                </tr>
                <?php
                foreach ($alltest as $value) {
                    $name = $value->amount;
                    echo"<tr id='pricelist'>";
                    echo"<td><h2>{$value->test_name}</h2></td>";
                    echo"<td class='txtCalll' style='text-align: center;' id='$value->amount' ><h2>{$value->amount}</h2></td>";
                    echo"<td style='text-align: center;' ><input type='checkbox' class='txtCal' name='$value->amount' value='$value->amount' id='$value->id' /></td>";
                    echo"</tr>";
                }
                ?>


                <tr>
                    <td><h3><b>TOTAL  :</b></h3></td>
                    <?php
                    echo"<td style='text-align: center;'><b><h2><span id='total_sum_value'></span></h2></b></td>";
                    ?>

                </tr>
            </table>
            <button class="btn btn-info" type="button" style="text-align: right" >Print</button>
        </div>

        <div class="col-sm-3 welcome-left-grids">
            <div class="welcome-img">
                <img src="<?php echo base_url() ?>images/g1.jpg" class="img-responsive zoom-img" alt=""/>
                <img src="<?php echo base_url() ?>images/g2.jpg" class="img-responsive zoom-img" alt=""/>
                <img src="<?php echo base_url() ?>images/g3.jpg" class="img-responsive zoom-img" alt=""/>
                <img src="<?php echo base_url() ?>images/g4.jpg" class="img-responsive zoom-img" alt=""/>
                <img src="<?php echo base_url() ?>images/g5.jpg" class="img-responsive zoom-img" alt=""/>
            </div>
        </div>
    </div>
</div>
<br/><br/><br/><br/>

<script>
    $(document).ready(function() {

        var calculated_total_sum = 0;
        $("#myTable").on('input', '.txtCal', function() {
            var get_textbox_value = $(this).val();
            if ($('.txtCal').is(':checked') && $.isNumeric(get_textbox_value)) {
//                alert('cheked');
                calculated_total_sum += parseFloat(get_textbox_value);
//                alert(calculated_total_sum);
            } else {
//                alert('unchecked');
                calculated_total_sum -= parseFloat(get_textbox_value);
//                alert(calculated_total_sum);
            }
            $("#total_sum_value").html(calculated_total_sum);
        });

    });
</script>

<script>
//$(document).ready(function(){
//
//	 var calculated_total_sum = 0;
//$("#myTable").on('input', '.txtCal', function () {
//   
//      var get_textbox_value = $(this).val();
//      
//      if ($.isNumeric(get_textbox_value)) {
//              calculated_total_sum += parseFloat(get_textbox_value);
//              alert(calculated_total_sum);
//              }
//              $("#total_sum_value").html(calculated_total_sum);
//       });
//
//  });
//
//</script>