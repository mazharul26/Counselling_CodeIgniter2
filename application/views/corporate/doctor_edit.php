
<div class="container-fluid" style="background-color: #999999" >
    <div class="row" >
        <div class="col-sm-3" width="100"></div>
        <div class="col-sm-6" style="background-color: #EEE">
            <br/><br/>
            <h2 style="text-align: center">Consultent Update Registration Form</h2>
            <br/><br/>
            <?php foreach ($alldoctor as $doctor) { ?>


                <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>doctor_management/update">
                    <input type="hidden" name="id" value="<?php echo $doctor->id ?>" />
                    <label>Name</label>
                    <input type="text" name="name1" class="form-control" value="<?php echo $doctor->name ?>" /><br/>
                    <label>E-mail</label>
                    <input type="text" name="email1" class="form-control" value="<?php echo $doctor->email ?>" /><br/>
                    <label>Password</label>
                    <input type="text" name="password1" class="form-control" value="<?php echo $doctor->password ?>" /><br/>
                    <label>Gender</label>
                    <input type="radio" name="gender1" class="" value="1" />Male
                    <input type="radio" name="gender1" class="" value="2" />Female
                    <input type="radio" name="gender1" class="" value="3" />Other<br/>
                    <label>Fee</label>
                    <input type="text" name="fees1" class="form-control" value="<?php echo $doctor->fees ?>" /><br/>
                    <label>Contact</label>
                    <input type="text" name="contact1" class="form-control" value="<?php echo $doctor->contact ?>" /><br/> 

                    <label>Picture</label>
                    <input type="file" name="picture" class="form-control" value="" /><br/> 


                    <label>Degree</label>
                    <select name="degreesid">
                        <option value="0">Choice Degree</option>
                        <?php
                        foreach ($alldegrees as $degree) {
                            if ($doctor->degreesid == $degree->id) {
                                echo"<option value='{$degree->id}' selected>{$degree->name}</option>";
                            } else {
                                echo"<option value='{$degree->id}'>{$degree->name}</option>";
                            }
                        }
                        ?>
                    </select>
                    <br/><br/>
                    <label>Designetion</label>
                    <select name="designetionid">
                        <option value="0">Choice Designetion</option>
                        <?php
                        foreach ($alldesignation as $designation) {
                            if ($doctor->designetionid == $designation->id) {
                                echo"<option value='{$designation->id}'selected>{$designation->name}</option>";
                            } else {
                                echo"<option value='{$designation->id}'>{$designation->name}</option>";
                            }
                        }
                        ?>

                    </select>
                    <br/><br/>

                    <label>Specialist</label>
                    <select name="specialistid">
                        <option value="0">Choice Specialist</option>
    <?php
    foreach ($allspecialist as $specialist) {
        if ($doctor->specialistid == $specialist->id) {
            echo"<option value='{$specialist->id}' selected>{$specialist->name}</option>";
        } else {
            echo"<option value='{$specialist->id}'>{$specialist->name}</option>";
        }
    }
    ?>

                    </select>
                    <br/><br/>
                    <input type="submit" name="edit_sub" class="btn btn-success" value="update"/>


                </form>
    <?php
}
?>
<br/><br/><br/><br/>
        </div>
    </div>
</div>
