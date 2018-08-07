<div class="container-fluid">
    <div class="app-w3">
        <h4>Emergency Your Appointment Here</h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="app-sub-w3">
                    <form action="<?php echo base_url() ?>" method="post">


                        <input type="text" name="patient_name" placeholder="Patient Name" />
                       <?php  if( form_error('patient_name')){
                           echo"<script> alert('Please apointment first | Some data is missing') </script>";
                       } ?>

                      

                        <div class="ag-w3">

                            <select name="department" >
                                <option value="0">Choice Department</option>

                                <?php
                      $temp = set_value("department");

                                foreach ($alldepartment as $department) {
                                    if($temp== $department->id){
                                    echo"<option value='{$department->id}' selected >{$department->name}</option>";
                                    
                                    }
                                    else{
                                            echo"<option value='{$department->id}'>{$department->name}</option>";
                                    }
                                }
                                ?>

                            </select>


                        </div>
                        <div class="ag-w3">

                            <select name="consultent" >
                                <option value="0">Choice Doctor</option>

                                <?php
                                
                                
                                   if (isset($_POST['consultent']) && $_POST['department'] > 0) {

                                 $allconsultents = $this->am->view("*", "consultent", array("departmentid" => $department->id), array("name", "asc"));

                                 foreach ($allconsultents as $consultent){

                                        if ($consultent->departmentid == $_POST['consultent']) {
                                            echo "<option selected value='{$consultent->id}'>{$consultent->name}</option>";
                                        } else {

                                            echo "<option value='{$consultent->id}'>{$consultent->name}</option>";
                                        }
                                    }
                                }
                                ?>

                            </select>


                        </div>


                        <input  id="datepicker" name="date" type="text" value="yyyy-mm-dd" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'yyyy-mm-dd';
                                }" required>




                        <input type="text" id="timepicker" name="Time" class="timepicker" value="Hrs:Min">

                        <br/>
                   <br/>
                        <input type="submit" name="submit_appoinment" value="Make A Appointment">
                        <!--<button type="button"  name="submit_appoinment" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Make A Appointment</button>-->
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <?php
//                                        foreach ($allappointment as $appointment) {
//                                          echo"<li>{$appointment->patient_name}</li>";  
//                                        }
                                        ?>

                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Confirm</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>	

</div> 

<script>

    $(document).ready(function () {
        $("select[name='consultent']").prop('disabled', true);
        $("select[name=department]").change(function () {
            department = $(this).val();
            if (department == 0) {
                $("select[name=consultent]").prop('disabled', true);
                $("select[name=consultent]").children().remove();
                $("select[name=department] .select[name=consultent]").addClass('error');
                $("select[name=consultent]").append("<option value='0' selected>Select a department First</option>");
<?php
// department connect

// department loop

foreach  ($alldepartment as $row ) {
// emni remove and chose add korar code

    echo " } else if (department == {$row->id}) { \n ";
    echo "$(\"select[name=consultent]\").children().remove(); \n";
    echo "$(\"select[name=consultent]\").prop('disabled', false); \n";
    echo "$(\"select[name=consultent]\").append(\"<option value='0'>Select Doctor</option>\") \n";

// consultent connect
  
// consultent loop
 $allconsultents = $this->am->view("*", "consultent", array("departmentid" => $department->id), array("name", "asc"));
   foreach  ($allconsultents as $row ) {
        echo "$(\"select[name=consultent]\").append(\"<option value='{$row->id}'>{$row->name}</option>\"); \n";
    }

// consultent option code gula loop theke department id onujai anbo
// consultent loop end
}// department loop end
?>
            }

        });
    });
</script>


<script>

   $(function() {
            var date = new Date();
            date.setDate(date.getDate() - 1);
            $("#datepicker").datepicker({
                dateFormat: "yy-mm-dd",
                defaultDate: date,
                onSelect: function () {
                    selectedDate = $.datepicker.formatDate("yy-mm-dd", $(this).datepicker('getDate'));
                    selDate = selectedDate;
                    console.log(selectedDate);
                }
            });
        });
</script>
