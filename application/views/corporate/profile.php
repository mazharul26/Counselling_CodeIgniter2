







<script>
    $(document).ready(function () {
        var panels = $('.user-infos');
        var panelsButton = $('.dropdown-user');
        panels.hide();

        //Click dropdown
        panelsButton.click(function () {
            //get data-for attribute
            var dataFor = $(this).attr('data-for');
            var idFor = $(dataFor);

            //current button
            var currentButton = $(this);
            idFor.slideToggle(400, function () {
                //Completed slidetoggle
                if (idFor.is(':visible'))
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                } else
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                }
            })
        });


        $('[data-toggle="tooltip"]').tooltip();

        $('button').click(function (e) {
            e.preventDefault();
            alert("This is a demo.\n :-)");
        });
    });


</script>
<style>
    .user-row {
        margin-bottom: 14px;
    }

    .user-row:last-child {
        margin-bottom: 0;
    }

    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }

    .dropdown-user:hover {
        cursor: pointer;
    }

    .table-user-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information > tbody > tr:first-child {
        border-top: 0;
    }


    .table-user-information > tbody > tr > td {
        border-top: 0;
    }
    .toppad
    {margin-top:20px;
    }

</style>



<div class="container-fluid" style="background-color: #eee">
    <?php
    foreach ($allpatients as $patients) {
        ?>
        <div class="row">
            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                <A href="<?php echo base_url() . "patient/patient_edit/{$patients->id}" ?>" >Edit Profile</A>

                <A href="<?php echo base_url() . "patient/patient_edit/{$patients->id}" ?>" >Logout</A>
                <br>
                <p class=" text-info"><?php
             date_default_timezone_set("Asia/dhaka");   
$d=strtotime("now");
echo date("Y-m-d h:i:sa", $d) . "<br>";
                ?>
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hi <?php echo $patients->name ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"> 
                                <img src="<?php echo base_url() ?>images/no.png" alt=" " class="img-circle img-responsive "><p>User Img</p> </div>


                            <div class=" col-md-9 col-lg-9 "> 
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td><h3>Name :</h3></td>
                                            <td><h3><?php echo $patients->name ?></h3></td>
                                        </tr>
                                        <tr>
                                            <td><h3>E-mail :</h3></td>
                                            <td><h3><?php echo $patients->email ?></h3></td>
                                        </tr>
                                        <tr>
                                            <td><h3>Mobile:</h3></td>
                                            <td><h3><?php echo $patients->contact ?></h3></td>
                                        </tr>

                                        <tr>
                                        <tr>
                                            <td><h3>Date:</h3></td>
                                            <td><h3><?php echo $patients->dob ?></h3></td>
                                        </tr>
                                        <tr>
                                            <td><h3>Country:</h3></td>
                                            <td><h3><?php echo $patients->cname ?></h3></td>
                                        </tr>
                                        <tr>
                                            <td><h3>City:</h3></td>
                                            <td><h3><?php echo $patients->ctname ?></h3></td>
                                        </tr>
                                  

                                  

                                    </tbody>
                                </table>

                                <a href="#" class="btn btn-primary">My Performance</a>
                                <a href="#" class="btn btn-primary">Hospital Performance</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>






