




<style>
    body {font-family: Arial;}

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>
</head>

<div class="container-fluid"  style="background-color: #999999">
    <div class="row">
        <div class="col-sm-3" width="100"></div>
        <div class="col-sm-6" width="" style="background-color: #cccccc">
            <br/><br/> 

            <h1 style="align-content:center">Log-IN Here</h1> <br/><br/> 
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">Patients</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Consultent</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Employee</button>
            </div>

            <div id="London" class="tabcontent">
                 <br/><br/>  
                <div class="col-sm-3"></div>
                <div class="col-sm-6">  <h1 style="text-align: center"><marquee>Patient Log-In Form  </marquee></h1></div>
                <br/><br/>   





                <br/><br/>

                <?php
                $msg = $this->session->userdata("msg");
                if ($msg != NULL) {
                    echo"<div class='error'>$msg</div>";
                    $this->session->unset_userdata("msg");
                }
                ?>
                <form method="post" enctype="multipart/form-data">


                    <label>E-Mail</label>
                    <input type="text" name="email" class="form-control" value="<?php echo set_value("email") ?>" />
                    <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo set_value("password") ?>" />
                    <?php echo form_error('password', '<div class="error">', '</div>'); ?>

                    <br/><br/>


                    <input type="submit" name="sub" class="btn btn-success" value="Log In" /><br/><br/>
                    <p>Have no registration ,please registration first,Click registration button</p>
                    <a href="<?php base_url() ?>"><button type="button" class="btn btn-info">Forgot Password</button></a>
                    <a href="<?php base_url() ?>registration"><button type="button" class="btn btn-primary">Registration-Here</button></a>
                    <br/><br/>
                </form>



            </div>


            <!--            <------------===============--Consultent----------------------------->


            <div id="Paris" class="tabcontent">
                 <br/><br/>  
                <div class="col-sm-3"></div>
                <div class="col-sm-6">  <h1 style="text-align: center"><marquee>Consultent Log-In Form  </marquee></h1></div>
                <br/><br/>   

                <br/><br/>
                <?php
                $msg = $this->session->userdata("msg");
                if ($msg != NULL) {
                    echo"<div class='error'>$msg</div>";
                    $this->session->unset_userdata("msg");
                }
                ?>
                <form method="post" enctype="multipart/form-data">


                    <label>E-Mail</label>
                    <input type="text" name="email" class="form-control" value="<?php echo set_value("email") ?>" />
                    <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo set_value("password") ?>" />
                    <?php echo form_error('password', '<div class="error">', '</div>'); ?>

                    <br/><br/>


                    <input type="submit" name="sub" class="btn btn-success" value="Log In" /><br/><br/>
                    <a href="<?php base_url() ?>"><button type="button" class="btn btn-info">Forgot Password</button></a>
                    <a href="<?php base_url() ?>registration"><button type="button" class="btn btn-primary">Registration-Here</button></a>
                    <br/><br/>
                </form>

            </div>


            <!--            <------------===============--Employee----------------------------->


            <div id="Tokyo" class="tabcontent">
                  <br/><br/>  
                <div class="col-sm-3"></div>
                <div class="col-sm-6">  <h1 style="text-align: center"><marquee>Employee Log-In Form </marquee></h1></div>
                <br/><br/>   
              
                <br/><br/>
                <?php
                $msg = $this->session->userdata("msg");
                if ($msg != NULL) {
                    echo"<div class='error'>$msg</div>";
                    $this->session->unset_userdata("msg");
                }
                ?>
                <form method="post" enctype="multipart/form-data">


                    <label>E-Mail</label>
                    <input type="text" name="email" class="form-control" value="<?php echo set_value("email") ?>" />
                    <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                    <br/><br/>
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo set_value("password") ?>" />
                    <?php echo form_error('password', '<div class="error">', '</div>'); ?>

                    <br/><br/>


                    <input type="submit" name="sub" class="btn btn-success" value="Log In" /><br/><br/>
                    <a href="<?php base_url() ?>"><button type="button" class="btn btn-info">Forgot Password</button></a>
                    <a href="<?php base_url() ?>registration"><button type="button" class="btn btn-primary">Registration-Here</button></a>
                    <br/><br/> <br/><br/>
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
