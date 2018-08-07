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
<script>
$(document).ready(function(){
    $(".apponit").click(function(){
     ($(this).attr('id'));
       alert("Appointment-Successful  .Thank you ") 
    })
});

</script>
<?php 

foreach ($allpatient as $patient){
$id=$patient->id



?>

<div class="row">
  <div class="col-75">
    <div class="container">
        <br/><br/>
        <form action="" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Appointment Details</h3>
              <br/><br/>
              <?php    ?>
                <input type="hidden" name="id" value="<?php echo $patient->id ?>" />
            <label for="fname"><i class="fa fa-user"></i> Patient Name</label>
            <input type="text" id="fname" name="firstname" placeholder="" value="<?php echo $patient->patient_name  ?>">
            <label for="email"><i class="fa fa-user"></i> Doctor Name</label>
            <input type="text" id="email" name="doctor_name" placeholder="" value="<?php echo $patient->cname  ?>">
            <label for="adr"><i class="fa fa-deviantart"></i> Department</label>
            <input type="text" id="adr" name="department_name" placeholder="" value="<?php echo $patient->name  ?>">
            <label for="city"><i class="fa fa-institution"></i> Date</label>
            <input type="text" id="city" name="date" placeholder="" value="<?php echo $patient->date  ?>">

           
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label >Fees</label>
            <input type="text" name="payment_amount" value="1000"
            <label for="cname">Name on Card</label>
            
            <select name="paymentid">
                <option value="0">Choice payment Item</option>
                <?php
                
                foreach ($allpayment as $payment){
                    echo"<option value=''>{$payment->name}</option>";
                }
                
                ?>
            </select>
           
            
            
            
            <br/><br/>
            <label for="ccnum">Transection Id number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
           
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
            <input type="submit" id="<?php echo $patient->id ?>" value="Confirm to Appointment" class="btn apponit" name="payment_details">
      </form>
          <br/><br/>
    </div>
  </div>

</div>
<?php  } 


?>