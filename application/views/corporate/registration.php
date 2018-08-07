
<div class="container-fluid"  style="background-color: #999999">
    <div class="row">
        <div class="col-sm-3" width="100"></div>
        <div class="col-sm-6" width="" style="background-color: #eee">
            <br/><br/><br/><br/>

            <h1 style="align-content:center">Registration Here</h1> <br/><br/>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">Patients</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Consultent</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Employee</button>
            </div>

            <!-- Patient form -->
            <div id="London" class="tabcontent">
                <br/><br/>   
                <h2 style="text-align: center">Patient Registration Form</h2>
                <br/><br/>
                <form method="post" enctype="multipart/form-data">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo set_value("name") ?>" />
                    <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                    <br/><br/>


                    <label>E-Mail</label>
                    <input type="text" name="email" class="form-control" value="<?php echo set_value("email") ?>" />
                    <?php echo form_error('email', '<div class="error">', '</div>'); ?>

                    <br/><br/>
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="" />
                    <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                    <br/><br/>

                    <label>Retype-Password</label>
                    <input type="text" name="passconf" class="form-control" value="" />
                    <?php echo form_error('passconf', '<div class="error">', '</div>'); ?>
                    <br/><br/>


                    <label>Gender</label>
                    <input type="radio" name="gender" class="" value="1" />Male
                    <input type="radio" name="gender" class="" value="2" />Female
                    <?php echo form_error('gender', '<div class="error">', '</div>'); ?>
                    <br/><br/>

                    <label>Date of birth</label>

                    <input type="date" name="date" class="form-control" value="<?php echo set_value("date") ?>" />
                    <?php echo form_error('date', '<div class="error">', '</div>'); ?>
                    <br/><br/>

                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" value="<?php echo set_value("contact") ?>" />
                    <?php echo form_error('contact', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>Country Name</label>
                    <select name="cnt" >
                        <option value="0">Choice Country</option>

                        <?php
                        $temp = set_value("cnt");
                        foreach ($allcountry as $country) {
                            if ($temp == $country->id) {
                                echo"<option value='{$country->id}' selected>{$country->name}</option>";
                            } else {
                                echo"<option value='{$country->id}'>{$country->name}</option>";
                            }
                        }
                        ?>

                    </select>
                    <?php echo form_error('cnt', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>City Name</label>
                    <select name="ct" >
                        <option value="0">Choice City</option>
                        <?php echo form_error('cnt', '<div class="error">', '</div>'); ?>
                        <?php
                        foreach ($allcity as $city) {

                            echo"<option value='{$city->id}'>{$city->name}</option>";
                        }
                        ?>


                    </select>
                    <?php echo form_error('ct', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <input type="submit" name="submit-patient" class="btn btn-success" value="Save" /><br/><br/>
                    <p>Already have a account,Please click here</p>
                    <a href="<?php base_url() ?>login"><button type="button" class="btn btn-primary">Log-In</button></a>
                    <br/><br/>
                </form>
            </div>



            <!-- Consultent form -->

            <div id="Paris" class="tabcontent">
                <br/><br/>   
                <h2 style="text-align: center">Consultent Registration Form</h2>
                <br/><br/>

                <form method="post" enctype="multipart/form-data">

                    <label>Name</label>
                    <input type="text" name="name1" class="form-control" value="<?php echo set_value("name1") ?>" />
                    <?php echo form_error('name1', '<div class="error">', '</div>'); ?>
                    <br/><br/>


                    <label>E-Mail</label>
                    <input type="text" name="email1" class="form-control" value="<?php echo set_value("email1") ?>" />
                    <?php echo form_error('email1', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>Password</label>
                    <input type="password" name="password1" class="form-control" value="<?php echo set_value("password1") ?>" />
                    <?php echo form_error('password1', '<div class="error">', '</div>'); ?>
                    <br/><br/>

                    <label>Retype-Password</label>
                    <input type="password" name="passconf1" class="form-control" value="" />
                    <?php echo form_error('passconf1', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>Gender</label>
                    <input type="radio" name="gender1" class="" value="1" />Male
                    <input type="radio" name="gender1" class="" value="2" />Female
                    <?php echo form_error('gender1', '<div class="error">', '</div>'); ?>
                    <br/><br/>

                    <label>Fee</label>

                    <input type="text" name="fee1" class="form-control" value="<?php echo set_value("fee1") ?>" />
                    <?php echo form_error('fee1', '<div class="error">', '</div>'); ?>
                    <br/><br/>

                    <label>Contact</label>
                    <input type="text" name="contact1" class="form-control" value="<?php echo set_value("contact1") ?>" /> 
                    <?php echo form_error('contact1', '<div class="error">', '</div>'); ?><br/><br/>
                    <label>Picture</label>
                    <input type="file" name="conpic" class="form-control" value="" />
                    <?php echo form_error('conpic', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>Educational Qualification</label>
                    <select name="degreesid1" >
                        <option value="0">Choice Degree</option>

                        <?php
                        $temp = set_value("degreesid1");
                        foreach ($alldegrees as $degree) {
                            if ($temp == $degree->id) {
                                echo"<option value='{$degree->id}' selected>{$degree->name}</option>";
                            } else {
                                echo"<option value='{$degree->id}'>{$degree->name}</option>";
                            }
                        }
                        ?>

                    </select>
                    <?php echo form_error('degreesid1', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>Professional Designation</label>
                    <select name="designationid1" >
                        <option value="0">Choice designation</option>

                        <?php
                        $temps = set_value("designationid1");
                        foreach ($alldesignation as $designation) {
                            if ($temps == $degree->id) {
                                echo"<option value='{$designation->id}' selected>{$designation->name}</option>";
                            } else {
                                echo"<option value='{$designation->id}'>{$designation->name}</option>";
                            }
                        }
                        ?>


                    </select>

                    <?php echo form_error('designationid1', '<div class="error">', '</div>'); ?>

                    <br/><br/>
                    <label> Specialistid</label>
                    <select  name="specialistid1"  >
                        <option value="0">Choice specialist</option>
                        <?php echo form_error('specialistid1', '<div class="error">', '</div>'); ?>
                        <?php
                        $tempss = set_value("specialistid1");
                        foreach ($allspecialist as $specialist) {
                            if ($tempss == $degree->id) {
                                echo"<option value='{$specialist->id}' selected>{$specialist->name}</option>";
                            } else {
                                echo"<option value='{$specialist->id}'>{$specialist->name}</option>";
                            }
                        }
                        ?>


                    </select>


                    <br/><br/>
                    <input type="submit" name="submit-consultant" class="btn btn-success" value="Registration" /><br/><br/>
                    <p>Already have a account,Please click here</p>
                    <a href="<?php base_url() ?>login"><button type="button" class="btn btn-primary">Log-In</button></a>
                    <br/><br/>
                </form>

            </div>
            <!-- Employee Registration Form -->
            <div id="Tokyo" class="tabcontent">
                <br/><br/>   
                <h2 style="text-align: center">Employee Registration Form</h2>
                <br/><br/>
                <form method="post" enctype="multipart/form-data">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="" /><br/><br/>


                    <label>E-Mail</label>
                    <input type="text" name="email" class="form-control" value="" /><br/><br/>
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="" /><br/><br/>
                    <label>Gender</label>
                    <input type="radio" name="gender" class="" value="1" />Male
                    <input type="radio" name="gender" class="" value="2" />Female
                    <br/><br/>

                    <label>Date of birth</label>

                    <input type="date" name="date" class="form-control" value="" /><br/><br/>
                    <label>Professional Designation</label>
                    <input type="text" name="designation" class="form-control" value="" /><br/><br/>
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" value="" /><br/><br/>
                    <label>Country Name</label>
                    <select name="ecnt" >
                        <option value="0">Choice Country</option>

                        <?php
                        foreach ($allcountry as $country) {

                            echo"<option value='{$country->id}'>{$country->name}</option>";
                        }
                        ?>
                        <?php echo form_error('cnt', '<div class="error">', '</div>'); ?>
                    </select>
                    <br/><br/>
                    <label>City Name</label>
                    <select name="ect" >
                        <option value="0">Choice City</option>
                        <?php echo form_error('cnt', '<div class="error">', '</div>'); ?>
                        <?php
                        foreach ($allcity as $city) {

                            echo"<option value='{$city->id}'>{$city->name}</option>";
                        }
                        ?>


                    </select>
                    <br/><br/>
                    <input type="submit" name="submit-employee" class="btn btn-success" value="Save" /><br/><br/>
                    <p>Already have a account,Please click here</p>
                    <a href="<?php base_url() ?>login"><button type="button" class="btn btn-primary">Log-In</button></a>
                    <br/><br/>
                </form>
            </div> 
            <br/><br/><br/><br/>
        </div>
    </div>
</div>


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<script>


</script>
