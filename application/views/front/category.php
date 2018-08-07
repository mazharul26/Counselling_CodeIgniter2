
<script>
    $(document).ready(function () {
        $("body").on("click", ".appointment", function () {

            $.ajax({
                type: "POST",
                data: {
                    "id": $(this).attr("id")
                },
                url: "<?php echo base_url() ?>apply-doctor",
                success: function (result) {
                    alert(result);
                    $(".appointment").text("withdrow");
                    $(".appointment").addClass("withdrow-doctor");
                    $(".appointment").remove("apply-doctor");
                }
            });
//            alert($(this).attr("id"));

            return false;
        });
  $("body").on("click", ".withdrow-doctor", function () {
            $.ajax({
                type: "POST",
                data: {
                    "id": $(this).attr("id")
                },
                url: "<?php echo base_url() ?>withdrow-doctor",
                success: function (result) {
                    alert(result);
                    $(".withdrow-doctor").text("apply-doctor");                   
                    $(".withdrow-doctor").addClass("apply-doctor");
                     $(".withdrow-doctor").removeClass("withdrow-doctor");
                }
            });
            return false;
        });
    });


</script>



<div class="tips w3agile">
    <div class="container">
        <?php
        foreach ($allCategory as $value) {

            $id = $value->id;
            ?>
            <h3 class="tittle-one">Here Our Doctor  <span></span></h3>
            <div class="tip-grids">
                <div class="col-sm-6 tip-grid">
                    <figure class="effect-julia">
                        <img src="<?php echo base_url() . "images/doctor/doctor-{$value->id}.{$value->picture}" ?>" class="img-responsive zoom-img" width="100%" height="70"/>
                        <figcaption>
                            <h4><?php echo $value->sname ?></h4>
                            <p><?php echo $value->name ?></p>
                            <p><?php echo $value->dname ?></p>
                            <p><?php echo $value->mname ?></p>
                            <p>Fee :<?php echo $value->fees ?></p>
                            <p> Mobile No :<?php echo $value->contact ?></p>
                            <p><?php echo $value->email ?></p>

                        </figcaption>

                    </figure>
                    <?php
                    $type = $this->session->userdata("type");
                    if ($type == 'p') {
                        if (isset($value)) {
                           echo "<a href='#' id='{$id}' class='btn btn-success appointment'>This doctor appointment</a>";
                        } else {
                            
                             echo "<a href='#' id='{$id}' class='btn btn-success withdrow-doctor'>Withdrow</a>";
                        }
                    } else {
                        echo "<a href='" . base_url() . "corporate/login" . "' class='btn btn-success'>Apply</a>";
                    }
                    ?>
                    <br/> <br/>
                    <p style="word-wrap: normal"> Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                    <br/> <br/> 
                    <div>
                        <input type="submit" class="btn btn-success" value="Online-Doctor-Appointment" id="myBtn">
                        <p>These doctor provide service only online</p>
                    </div>

                    <p style="word-wrap: normal"> Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div>
                <div class="col-md-6 tip-grid">
                    <figure class="effect-julia">
                        <img src="<?php echo base_url() ?>images/w2.jpg" alt="">
                        <figcaption>
                            <h4>Heart Specialist</h4>
                            <p>We Provide the Best Medical Services.</p>
                            <p>Medical Services that you can Trust.</p>
                            <p>We Care About Your Health.</p>
                        </figcaption>			
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php
        }
        ?>
    </div>
</div>






<div class="container">

    <!-- Trigger the modal with a button -->


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Doctors Appoinment</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Patient Name</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter Patient Name">
                        </div>
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Patient-Mail</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter patient email">
                        </div>
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-phone"></span> Contact</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter Contact">
                        </div>
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-piggy-bank"></span> Department</label>

                            <select name="department" >
                                <option value="0">Choice Department</option>

                                <?php
//                        $temp = set_value("department");

                                foreach ($alldepartment as $department) {

                                    echo"<option value='{$department->id}'>{$department->name}</option>";
                                }
                                ?>

                            </select>

                        </div>
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-modal-window"></span> Doctor</label>
                            <select name="consultent" >
                                <option value="0">Choice Doctor</option>

                                <?php
                                if (isset($_POST['consultent']) && $_POST['department'] > "") {
                                    $allconsultents = $this->am->view("*", "consultent", array("departmentid" => $department->id), array("name", "asc"));

                                    foreach ($allconsultents as $consultent) {
                                        if ($consultent->id == $_POST['consultent']) {
                                            echo "<option selected value='$consultent->id'>$consultent->name</option>";
                                        } else {
                                            echo "<option value='$consultent->id'>$consultent->name</option>";
                                        }
                                    }
                                } else {
                                    echo "<option value=''>Choose consultent First</option>";
                                }
                                ?>

                            </select>


                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-calendar"></span> Date</label>
                            <input type="text" class="form-control" id="psw" placeholder="Enter Date">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                        </div>
                        <button type="submit" name="appoint_sub" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Confirm Appointment</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <!--          <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>-->
                </div>
            </div>

        </div>
    </div> 
</div>

<script>
    $(document).ready(function () {
        $("#myBtn").click(function () {
            $("#myModal").modal();
        });
    });
</script>

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

foreach ($alldepartment as $row) {
// emni remove and chose add korar code

    echo " } else if (department == {$row->id}) { \n ";
    echo "$(\"select[name=consultent]\").children().remove(); \n";
    echo "$(\"select[name=consultent]\").prop('disabled', false); \n";
    echo "$(\"select[name=consultent]\").append(\"<option value='0'>Select Doctor</option>\") \n";

// consultent connect
// consultent loop
    $allconsultents = $this->am->view("*", "consultent", array("departmentid" => $department->id), array("name", "asc"));
    foreach ($allconsultents as $row) {
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




