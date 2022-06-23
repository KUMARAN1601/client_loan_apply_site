<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Application form</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href="http://pg.gaarsam.com//html/assets/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" >
		<script type="text/javascript" src="http://pg.gaarsam.com//html/assets/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="http://pg.gaarsam.com//html/assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://pg.gaarsam.com//html/assets/js/jquery.validate.min.js"></script>
		<link src="" type="stylesheet" href="Calculator.css">
        <?php
  session_start();
  $hostname = "sql110.epizy.com";
  $user = "epiz_31673252";
  $pass = "4smbzrvf";
  $dbname = "epiz_31673252_c2cdb";

  $conn = mysqli_connect($hostname, $user, $pass, $dbname);
  if(!$conn){
      die("your database is not connected!");
  }
  if(!isset($_SESSION['done'])){
      die("<h1>You must login first to access this page!</h2>");
  }
?>
		<style>
			.wrap { max-width: 980px; margin: 10px auto 0; }
			#steps { margin: 80px 0 0 0 }
			.commands { overflow: hidden; margin-top: 30px; }
			.prev {float:left}
			.next, .submit {float:right}
			.error { color: #b33; }
			#progress { position: relative; height: 5px; background-color: #eee; margin-bottom: 20px; }
			#progress-complete { border: 0; position: absolute; height: 5px; min-width: 10px; background-color: #337ab7; transition: width .2s ease-in-out; }
		</style>
		<link rel="stylesheet" href="homeloan.css">
		<script src="jquery.formtowizard.js" type="text/javascript"></script>
		<script>
        $( function() {
            var $HomeLoan = $( '#HomeLoan' );
            $HomeLoan.validate({errorElement: 'em'});
            $HomeLoan.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
        });
		</script>
    
</head>

<body style="font-family: 'Montserrat Light', sans-serif;">
<div class="jumbotron text-center">
  <h2 style="color:purple;">Application Form:</h2>
</div>

<div class="container">
<ul id="tabs" class="nav nav-pills nav-stacked col-md-2">
  <li class="active"><a href="#tab_a" data-toggle="pill">Loan Eligibility <br><span style="font-size:10px;">How much loan you are eligible for?</span></a></li>
  <li><a href="#tab_b" data-toggle="pill">EMI <br><span style="font-size:10px;">How much EMI you have to pay?</span></a></li>
  <li><a href="#tab_c" data-toggle="pill">Apply Loan</a></li>
</ul>
<div class="tab-content col-md-10">
        <div class="tab-pane active" id="tab_a">
		<script language="javascript" type="text/javascript">
		function eligiable()
        {
                var P1 = document.formval2.pr_amt2.value; // pick the form input value..
                var rate1 = document.formval2.int_rate2.value; // pick the form input value..
                var n1 = document.formval2.period2.value; // pick the form input value..
                var r1 = rate1/(12*100); // to calculate rate percentage..
                var prate1 = (P1 * r1 * Math.pow((1+r1),n1*12))/(Math.pow((1+r1),n1*12)-1); // to calculate compound interest..
                 var emi1 = Math.ceil(prate1 * 100) / 100; // to parse emi amount..
				var existing = document.formval2.ExLoan.value;
				var existingLoan=(existing-(existing*60/100));
				var income1 = document.formval2.NetIncome.value;
				if (income1<=14999){
				var incomere=((income1)*40/100)-existingLoan;
				} else if (income1<=29999){
				var incomere=((income1)*45/100)-existingLoan;
				} else if (income1>=30000){
				var incomere=((income1)*50/100)-existingLoan;
				}
				var incomereq=Math.floor(incomere / emi1 * P1);
				var prate2 = (incomereq * r1 * Math.pow((1+r1),n1*12))/(Math.pow((1+r1),n1*12)-1); // to calculate compound interest2..
                 var emi2 = Math.ceil((prate2) * 100) / 100; // to parse emi2 amount..   //Check again Reminder
                // to assign value in field1 as fixed upto two decimal..
                if (incomereq > P1) {
				document.formval3.field13.value = ("You are Eligible for this loan ");
				document.formval3.field11.value = (("₹ "+P1+" at EMI "+"₹ "+emi1.toFixed(0)));
				document.formval3.field12.value = ("You are Eligible for a maximum loan of "+("₹ "+incomereq+" at EMI "+"₹ "+emi2.toFixed(0)));
				} else {
				document.formval3.field13.value = ("You are not Eligible for this loan");
				document.formval3.field11.value = ("");
				document.formval3.field12.value = ("You are Eligible for a maximum loan of "+("₹ "+incomereq+" at EMI "+"₹ "+emi2.toFixed(0)));
				}
				
         //to assign value in field2.. 
         } 
         </script>
				<form name="formval2" class="form-horizontal col-md-8" style="font-size:12px;">
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Home Loan Required:</label>
						<div class="col-sm-8">
						<div class="input-group">
						<span class="input-group-addon">₹</span>
						<input type="number" class="form-control input-sm" id="input" name="pr_amt2" placeholder="Enter Loan Amount">
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Net income per month</label>
						<div class="col-sm-8">
						<div class="input-group">
						<span class="input-group-addon">₹</span>
						<input type="number" class="form-control input-sm" id="input" name="NetIncome" placeholder="Excluding LTA and Medical allowances">
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label" >Existing loan commitments</label>
						<div class="col-sm-8">
						<div class="input-group">
						<span class="input-group-addon">₹</span>
						<input type="number" class="form-control input-sm" id="input" Name="ExLoan" placeholder="(per month)">
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Loan Tenure</label>
						<div class="col-sm-8">
						<input type="number" class="form-control input-sm" id="input" name="period2" placeholder="(in years)">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Rate of Interest</label>
						<div class="col-sm-8">
						<div class="input-group">
						<input type="number" class="form-control input-sm" id="input" disabled value="9.5" name="int_rate2">
						<span class="input-group-addon">%</span>
						</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-12">
						<button type="button" class="btn btn-primary" onclick="eligiable()">Check Eligibility</button>
						<button type="reset" class="btn btn-link">Reset All</button>
						</div>
					</div>
				</form>
				<form name="formval3" class="form-horizontal col-md-4" style="font-size:12px;">
					<div class="form-group">	
						<output class="col-sm-12" name="field13" style="font-size:20px; font-weight:bold; font-family:Roboto;"></output>
						<output class="col-sm-12" name="field11" style="font-size:15px; font-family:Roboto;"></output>
					</div>
					<div class="form-group">
						<output class="col-sm-12" name="field12" style="font-size:17px; font-family:Roboto"></output>
					</div>	
				</form>
		</div>
        <div class="tab-pane" id="tab_b">
		<script language="javascript" type="text/javascript">
        function emi()
        {
                var P = document.formval.pr_amt.value; // pick the form input value..
                var rate = document.formval.int_rate.value; // pick the form input value..
                var n = document.formval.period.value; // pick the form input value..
                var r = rate/(12*100); // to calculate rate percentage..
                var prate = (P * r * Math.pow((1+r),n*12))/(Math.pow((1+r),n*12)-1); // to calculate compound interest..
                var emi = Math.ceil(prate * 100) / 100; // to parse emi amount..
        // to assign value in field1 as fixed upto two decimal..				
                document.formval4.field1.value = ("Monthly EMI: "+"₹ "+emi.toFixed(0));
        } 
        </script>
				<form name="formval" class="form-horizontal col-md-8" style="font-size:12px;">
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Loan Amount</label>
						<div class="col-sm-8">
						<div class="input-group">
						<span class="input-group-addon">₹</span>
						<input type="text" class="form-control input-sm" id="idLoanAmount" name="pr_amt" placeholder="Enter Loan Amount">
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Loan Tenure</label>
						<div class="col-sm-8">
						<input type="text" class="form-control input-sm" id="idLoanTenure" placeholder="(in years)" name="period">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Rate of Interest</label>
						<div class="col-sm-8">
						<div class="input-group">
						<input type="text" class="form-control input-sm" id="idROI" name="int_rate">
						<span class="input-group-addon">%</span>
						</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-12">
						<button type="button" name="calculate" value="Calculate" onclick="emi()" class="btn btn-primary">Calculate EMI</button>
						<button type="reset" class="btn btn-link">Reset All</button>
						</div>
					</div>
					
				</form>
				<form name="formval4" class="form-horizontal col-md-4" style="font-size:12px;">
					<div class="form-group">
						<output class="col-sm-12" name="field1" style="font-size:20px; font-weight:bold; font-family:Roboto;"></output>
					</div>
        		</form>
        </div>
		<div class="tab-pane" id="tab_c">
		<div class="row wrap">
    <form id="HomeLoan" class="form-horizontal col-md-8" style="font-size:12px;">
        <fieldset>
            <legend style="text-align:center; font-size:15px; font-weight:bold;">Personal Information</legend>
			<div class="form-group">
				<label for="input" class="col-sm-4 control-label">You Are</label>
				<div class="col-sm-8">
				<label class="radio-inline"><input type="radio" name="optradio">Male</label>
				<label class="radio-inline"><input type="radio" name="optradio">Female</label>
				</div>
			</div>
            <div class="form-group">
				<label for="input" class="col-sm-4 control-label">Full Name</label>
				<div class="col-sm-8">
				<input type="text" class="form-control input-sm" id="input" placeholder="Enter Your Full Name">
				</div>
			</div>
			<div class="form-group">
				<label for="input" class="col-sm-4 control-label">Phone No.</label>
				<div class="col-sm-8">
				<input type="text" class="form-control input-sm" id="input"  placeholder="Enter Your Phone No.">
				<small id="emailHelp" class="form-text text-muted">We'll never share your Phone No. with anyone else.</small>
				</div>
			</div>
			<div class="form-group">
				<label for="input" class="col-sm-4 control-label">Date of Birth</label>
				<div class="col-sm-8">
				<input type="text" class="form-control input-sm" id="input" placeholder="Enter Your Date of Birth">
				</div>
			</div>
            <div class="form-group">
				<label for="input" class="col-sm-4 control-label">Email ID</label>
				<div class="col-sm-8">
				<input type="email" class="form-control input-sm" id="input"  placeholder="Enter Your Email ID">
				</div>
			</div>
        </fieldset>

        <fieldset>
            <legend style="text-align:center; font-size:15px; font-weight:bold;">Property Detail</legend>
				<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Pupose for Loan</label>
						<div class="col-sm-8">
						<select class="form-control input-sm" id="purpose">
							<option value="" disabled selected>Select Pupose for Loan</option>
						    <option>Ready to move</option>
						    <option>Under Construction</option>
						    <option>Buy a Plot of Land</option>
						    <option>Home Renovation</option>
					  	</select>
						</div>
					</div>
					<script type="text/javascript">
						function ShowHideDiv() {
							var chkYes = document.getElementById("chkYes");
							var dvFinalized = document.getElementById("dvFinalized");
							dvFinalized.style.display = chkYes.checked ? "block" : "none";
						}
					</script>
					<div class="form-group">
						<label for="input" class="col-sm-4 control-label">Property Finalized</label>
							<div class="col-sm-8">
							<label for="chkYes">
								<input type="radio" id="chkYes" name="chkFinalized" checked="checked" onclick="ShowHideDiv()" />  Yes      
							</label>
							<label for="chkNo">
								<input type="radio" id="chkNo" name="chkFinalized" onclick="ShowHideDiv()"/>  No
							</label>
							</div>
					</div>
					
					<div id="dvFinalized">
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Property Address</label>
							<div class="col-sm-8">
							<textarea rows="4" cols="41%" placeholder="Enter your Address" class="form-control input-sm"></textarea> 
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Property In</label>
							<div class="col-sm-8">
							<input type="text" class="form-control input-sm" id="input" placeholder="Enter City">
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Possession By</label>
							<div class="col-sm-8">
							<select class="form-control input-sm" id="possession">
						    	<option>Ready to Move</option>
						    	<option>1 Month</option>
						    	<option>3 Month</option>
						    	<option>6 Month</option>
								<option>1 Year</option>
								<option>Any</option>
					  		</select>
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Property Price</label>
							<div class="col-sm-8">
							<div class="input-group">
							<span class="input-group-addon">₹</span>
							<input type="number" class="form-control input-sm" id="input" placeholder="Enter Property Price">
							</div>
							</div>
						</div>
						<div id="dvFinalized">
							<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Down Payment</label>
							<div class="col-sm-8">
							<div class="input-group">
							<span class="input-group-addon">₹</span>
							<input type="number" class="form-control input-sm" id="input" placeholder="Enter Down Payment Amount">
							</div>
							</div>
							</div>
						</div>
					</div>
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Loan Amount</label>
							<div class="col-sm-8">
							<div class="input-group">
							<span class="input-group-addon">₹</span>
							<input type="number" class="form-control input-sm" name="HomeLoanAmount" id="HomeLoanAmount" placeholder="Enter Loan Amount"/>
							</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Tenure</label>
							<!--<div class="col-sm-4">
							<input type="number" class="form-control input-sm" name="HomeLoanTenure" id="HomeLoanTenure">
							</div>-->
							<div class="range-slider col-sm-6">
							<input class="range-slider__range" name="HomeLoanTenure" id="HomeLoanTenure" type="range" value="10" min="5" max="30"/>
							<span class="range-slider__value"></span> Year
							</div>
							<div class="col-sm-2">
							<button type="button" class="btn btn-success btn-xs" onclick="javascript:CheckEMI()"/>Check EMI</button>
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-4 control-label">Your EMI</label>
							<div class="col-sm-5">
							<div class="input-group">
							<span class="input-group-addon">₹</span>
							<input type="number" class="form-control input-sm" name="HomeLoanEMI20" disabled id="HomeLoanEMI20"/ style="font-weight:Bold; font-size:20px;">
							</div>
							</div>
							<label for="input" class="col-sm-3 control-label" style="text-align:center;">Per Month (@ 9.5%)</label>
						</div>
						<script language="javascript">
							function CheckEMI()
							{
								var val1 = parseInt(document.getElementById("HomeLoanAmount").value);
								var val2 = parseInt(document.getElementById("HomeLoanTenure").value);
								var r = 9.5/(12*100); // to calculate rate percentage..
								var ansD = document.getElementById("HomeLoanEMI20");
								ansD.value = ((val1 * r * Math.pow((1+r),val2*12))/(Math.pow((1+r),val2*12)-1)).toFixed(0);
							}
						</script>

						<script type="text/javascript">
						var rangeSlider = function(){
							var slider = $('.range-slider'),
								range = $('.range-slider__range'),
								value = $('.range-slider__value');
    
						slider.each(function(){

							value.each(function(){
								var value = $(this).prev().attr('value');
								$(this).html(value);
							});

							range.on('input', function(){
								$(this).next(value).html(this.value);
							});
						});
						};

						rangeSlider();
						</script>
        </fieldset>
		<fieldset>
            <legend style="text-align:center; font-size:15px; font-weight:bold;">Professional Detail</legend>
			<div class="form-group">
				<label for="input" class="col-sm-4 control-label">Nature of occupation</label>
				<div class="col-sm-8">
				<select class="form-control input-sm" id="purpose">
							<option value="" disabled selected>Select Nature of occupation</option>
						    <option>Salaried</option>
						    <option>Self Employed</option>
						    <option>Self Employed Professional</option>
						    <option>Retired</option>
					  	</select>
				</div>
			</div>
            <div class="form-group">
				<label for="input" class="col-sm-4 control-label">Working With</label>
				<div class="col-sm-8">
				<input type="text" class="form-control input-sm" id="input" placeholder="Enter Company Name">
				</div>
			</div>
			<div class="form-group">
				<label for="input" class="col-sm-4 control-label">Monthly Income</label>
				<div class="col-sm-8">
				<div class="input-group">
						<span class="input-group-addon">₹</span>
						<input type="text" class="form-control input-sm" id="idLoanAmount" name="LoanAmount" placeholder="Enter Your Monthly Income">
						</div>
				</div>
			</div>
			<div class="form-group">
				<label for="input" class="col-sm-4 control-label">Monthly Liabilities</label>
				<div class="col-sm-8">
				<div class="input-group">
						<span class="input-group-addon">₹</span>
						<input type="text" class="form-control input-sm" id="idLoanAmount" name="LoanAmount" placeholder="Enter Your Monthly Liabilities">
						</div>
				</div>	
			</div>
        </fieldset>
        <p>
            <button id="SaveAccount" type="button" class="btn btn-primary submit" data-toggle="modal" data-target="#submitbutton">Submit</button>

  <!-- Modal -->
  <div class="modal fade" id="submitbutton" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
			<img src="" class="img-rounded">
			<h4>Thanks for choosing us.</h4>
			<p>Your request for the loan and your profile details as been sent successfully!</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" href="#" data-dismiss="modal">Close</button>
      	</div>
      </div>
    </div>
  </div>
        </p>
		
    </form>

		</div>
		</div>
</div>
</div>



</body>
</html>
