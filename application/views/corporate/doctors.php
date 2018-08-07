<br/><br/><br/><br/><br/>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3> <a href="<?php echo base_url() ?>corporate/doctors-doctor_appointment" class="btb btn-success">Doctor Appointment</a></h3>
<br/><br/>
            <table border="5" width="100%" class="table table-bordered">

                <tr>
                    <th>Name</th>
                    <th>Picture</th>
                    <th>E-Mail</th>
                    <th>Gender</th>
                    <th>Fees</th>
                    <th>Contact</th>
                    <th>Degrees</th>
                    <th>Specialist</th>
                    <th>Designetion</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                foreach ($allregistration as $registration) {
                    ?>

        <!--            <img src="<?php // echo base_url()."images/doctor-($registration->id).($registration->conpic)"   ?>"-->
                    <tr>
                        <td><?php echo $registration->name; ?></td>
                        <td><img src="<?php echo base_url()."images/doctor/doctor-{$registration->id}.{$registration->picture}" ?>" class="img-responsive" width="75"/></td> 
                        <td><?php echo $registration->email; ?></td> 
                        <td><?php echo $registration->gender; ?></td> 
                        <td><?php echo $registration->fees; ?></td> 
                        <td><?php echo $registration->contact; ?></td> 
                        <td><?php echo $registration->dname; ?></td> 
                        <td><?php echo $registration->sname; ?></td> 
                        <td><?php echo $registration->mname; ?></td> 
                        <td>  <a href="<?php echo base_url() . "corporate/doctors-doctor_edit/{$registration->id}" ?>">Edit</a></td>
                      
                        <td><a href="<?php echo base_url() . "corporate/doctors-doctor_delete/{$registration->id}" ?>">Delete</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<br/><br/><br/>