


<style>

    * {
        box-sizing: border-box;
    }

    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container {

        padding: 5px 20px 15px 20px;

        border-radius: 3px;
    }

    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    .btn:hover {
        background-color: #45a049;
    }

    a {
        color: #2196F3;
    }

    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
    }


    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }
        .col-25 {
            margin-bottom: 20px;
        }
    }
</style>



<div class="row">
    <div class="col-75">
        <div class="container">
            <br/><br/><br/><br/><br/><br/>
            <h2 style="text-align: center">My Profile Edit Form</h2>
            <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <br/><br/><br/>
            <?php
            foreach ($allpatients as $patients) {
                ?>
                <form action="" method="post">

                    <div class="row">
                        <div class="col-50">

                            <br/><br/>

                            <label for="fname"><i class="fa fa-user"></i> Patient Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="" value="<?php echo $patients->name; ?>">
                            <label for="email"><i class="fa fa-envelope"></i> E-Mail</label>
                            <input type="text" id="email" name="" placeholder="" value="<?php echo $patients->email; ?>">
                            <label for="adr"><i class="fa fa-deviantart"></i> Contact</label>
                            <input type="text" id="adr" name="department" placeholder="" value="<?php echo $patients->contact; ?>">
                            <label for="adr"><i class="fa fa-deviantart"></i> Gender</label>
                            <input type="text" id="adr" name="department" placeholder="" value="<?php echo $patients->gender; ?>">
                            <label for="city"><i class="fa fa-institution"></i> Date of Birth</label>
                            <input type="text" id="city" name="date" placeholder="" value="<?php echo $patients->dob; ?>">
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


                        </div>



                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>
                    <input type="submit" value="Confirm to Save" class="btn">
                </form>
            <?php } ?>
            <br/><br/>
        </div>
    </div>

</div>