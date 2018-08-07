
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
            <h2 style="text-align: center">My Profile</h2>
            <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <br/><br/><br/>
            <form action="" method="post">

                <div class="row">
                    <div class="col-50">

                        <br/><br/>
                        <input type="hidden" name="id" value="" />
                        <label for="fname"><i class="fa fa-user"></i> Patient Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="" value="">
                        <label for="email"><i class="fa fa-envelope"></i> E-Mail</label>
                        <input type="text" id="email" name="" placeholder="" value="">
                        <label for="adr"><i class="fa fa-deviantart"></i> Contact</label>
                        <input type="text" id="adr" name="department" placeholder="" value="">
                        <label for="adr"><i class="fa fa-deviantart"></i> Gender</label>
                        <input type="text" id="adr" name="department" placeholder="" value="">
                         <label for="city"><i class="fa fa-institution"></i> Date of Birth</label>
                        <input type="text" id="city" name="date" placeholder="" value="">
                        <label for="adr"><i class="fa fa-deviantart"></i> Country</label>
                       
                        <select name="country">
                            <option value="0"></option>
                        </select>
                        <label for="adr"><i class="fa fa-deviantart"></i> City</label>
                         <select name="city">
                            <option value="0"></option>
                        </select>
                        


                    </div>



                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
<!--                <input type="submit" value="Confirm to Save" class="btn">-->
            </form>
            <br/><br/>
        </div>
    </div>

</div>


<div class="portfolio" id="gallery">
    <div class="container">
        <h3 class="w3l_head">My Gallery <span></span></h3>
        <div class="agileits_portfolio_grids">
            <div class="col-md-4 agileits_portfolio_grid">
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/1.jpg">
                        <img src="<?php echo base_url() ?>images/1.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/2.jpg">
                        <img src="<?php echo base_url() ?>images/2.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/3.jpg">
                        <img src="<?php echo base_url() ?>images/3.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 agileits_portfolio_grid">
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/4.jpg">
                        <img src="<?php echo base_url() ?>images/4.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/5.jpg">
                        <img src="<?php echo base_url() ?>images/5.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/6.jpg">
                        <img src="<?php echo base_url() ?>images/6.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 agileits_portfolio_grid">
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/7.jpg">
                        <img src="<?php echo base_url() ?>images/7.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/8.jpg">
                        <img src="<?php echo base_url() ?>images/8.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="<?php echo base_url() ?>images/9.jpg">
                        <img src="<?php echo base_url() ?>images/9.jpg" alt=" " class="img-responsive">
                        <div class="overlay">
                            <h4>Therapeutic</h4>

                        </div>
                    </a>
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>


    </div>
</div>










<!---------profile----edit----form----end----->



<div class="panel-body">
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Click  Launch Demo Modal
    </button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Modals-->



<script>
    $(document).ready(function () {
        $("#hide").click(function () {
            $("p").hide();
        });
        $("#show").click(function () {
            $("p").show();
        });
    });
</script>

<style>
    body {
        font-family: sans-serif;
    }
    #summation {
        font-size: 18px;
        font-weight: bold;
        color:#174C68;
    }
    .txt {
        background-color: #FEFFB0;
        font-weight: bold;
        text-align: right;
    }
</style>
<p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>



<table width="300px" border="1" style="border-collapse:collapse;background-color:#E8DCFF">
    <tr>
        <td width="40px">1</td>
        <td>Butter</td>
        <td><input class="txt" type="text" name="txt"/></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Cheese</td>
        <td><input class="txt" type="text" name="txt"/></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Eggs</td>
        <td><input class="txt" type="text" name="txt"/></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Milk</td>
        <td><input class="txt" type="text" name="txt"/></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Bread</td>
        <td><input class="txt" type="text" name="txt"/></td>
    </tr>
    <tr>
        <td>6</td>
        <td>Soap</td>
        <td><input class="txt" type="text" name="txt"/></td>
    </tr>
    <tr id="summation">
        <td>&nbsp;</td>
        <td align="right">Sum :</td>
        <td align="center"><span id="sum">0</span></td>
    </tr>
</table>


<script>
    $(document).ready(function () {

        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $(".txt").each(function () {

            $(this).keyup(function () {
                calculateSum();
            });
        });

    });

    function calculateSum() {

        var sum = 0;
        //iterate through each textboxes and add the values
        $(".txt").each(function () {

            //add only if the value is number
            if (!isNaN(this.value) && this.value.length != 0) {
                sum += parseFloat(this.value);
            }

        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#sum").html(sum.toFixed(2));
    }
</script>



<table id="myTable">
<tr>   <th width="100">Name </th>
    <th>Price</th>
</tr>
<tr>
    <td><span>Pen :</span></td>
    <td><input type="text" class='txtCal' /></td>
</tr>    
<tr>
    <td><span>Pencil :</span></td>
    <td><input type="text" class='txtCal' /></td>
</tr>  
<tr>
    <td><span>Eraser :</span></td>
    <td><input type="text" class='txtCal' /></td>
</tr>  
<tr>
    <td><span>Sharpner :</span></td>
    <td><input type="text" class='txtCal' /></td>
</tr>  
<tr>
    <td><span>Book :</span></td>
    <td><input type="text" class='txtCal' /></td>
</tr>
<tr>
    <td><span><b>TOTAL  :</b></span></td>
    <td><b><span id="total_sum_value"></span></b></td>
</tr>
</table>


<script>
$(document).ready(function(){

	
$("#myTable").on('input', '.txtCal', function () {
       var calculated_total_sum = 0;
     
       $("#myTable .txtCal").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }                  
            });
              $("#total_sum_value").html(calculated_total_sum);
       });

});

</script>

<style>
body, input{
	font-family: Calibri, Arial;
	margin:0px;
}
h1 {
	margin: 0 0 0 20px;
}
html, body, #container { height: 100%; }
body > #container { height: auto; min-height: 100%; }

#header {
	height:50px;
	background-color:#ddd;
	border-bottom:1px solid #aaa;
	width:100%;
}
#footer {
	font-size: 12px;
	clear: both;
	position: relative;
	z-index: 10;
	height: 3em;
	margin-top: -3em;
	text-align:center;
}


th {
	background-color:#3E6DB0;
	color: white;
	padding: 5px;
}
</style>


<table border="1">
<tr>
	<th><input type="checkbox" id="selectall"/></th>
	<th>Cell phone</th>
	<th>Rating</th>
</tr>
<tr>
	<td align="center"><input type="checkbox" class="case" name="case" value="1"/></td>
	<td>BlackBerry Bold 9650</td>
	<td>2/5</td>
</tr>
<tr>
	<td align="center"><input type="checkbox" class="case" name="case" value="2"/></td>
	<td>Samsung Galaxy</td>
	<td>3.5/5</td>
</tr>
<tr>
	<td align="center"><input type="checkbox" class="case" name="case" value="3"/></td>
	<td>Droid X</td>
	<td>4.5/5</td>
</tr>
<tr>
	<td align="center"><input type="checkbox" class="case" name="case" value="4"/></td>
	<td>HTC Desire</td>
	<td>3/5</td>
</tr>
<tr>
	<td align="center"><input type="checkbox" class="case" name="case" value="5"/></td>
	<td>Apple iPhone 4</td>
	<td>5/5</td>
</tr>
</table>


</div>
<div id="footer">
Copyright &copy; <a href="//viralpatel.net">ViralPatel.net</a>
| <a href="//viralpatel.net/blogs/about">About</a>
</div>

</BODY>
<SCRIPT>
$(function(){

	// add multiple select / deselect functionality
	$("#selectall").click(function () {
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function(){

		if($(".case").length == $(".case:checked").length) {
			$("#selectall").attr("checked", "checked");
		} else {
			$("#selectall").removeAttr("checked");
		}

	});
});
</SCRIPT>

//quantity's



<table class="table11">
  <tbody>
    <tr>
      <td>Name</td>
      <td class="quantity">2</td>
      <td class="price">20</td>
      <td class="sum_one">40</td>
    </tr>
    <tr>
      <td>Name</td>
      <td class="quantity">1</td>
      <td class="price">30</td>
      <td class="sum_one">30</td>
    </tr>
    <tr>
      <td></td>
      <td class="total_quantity">3</td>
      <td></td>
      <td class="total_sum">70</td>
    </tr>
  </tbody>
</table>

<table class="table table-bordered" >
  <tbody>
    <tr>
      <td>Name</td>
      <td class="quantity">1</td>
      <td class="price">10</td>
      <td class="sum_one">10</td>
    </tr>
    <tr>
      <td>Name</td>
      <td class="quantity">2</td>
      <td class="price">10</td>
      <td class="sum_one">20</td>
    </tr>
    <tr>
      <td></td>
      <td class="total_quantity">3</td>
      <td></td>
      <td class="total_sum">30</td>
    </tr>
  </tbody>
</table>













<script>
$(document).ready( function(){
    var sum = 0;
var quantity = 0;
var sum1 = 0;
$('.price').each(function() {
    var price = $(this);
    var q = price.closest('tr').find('.quantity').html();
    sum += parseInt(price.html()) * parseInt(q);
    quantity += parseInt(q);
    sum1 = 0;
    sum1 += parseInt(price.html()) * parseInt(q);
    price.closest('tr').find('.sum_id').html(sum1);
});



$('table.table11 tr:last-child').find('.total_price').html(sum);
});
</script>