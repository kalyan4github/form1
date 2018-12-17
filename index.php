<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the phone field is not empty
	if(trim($_POST['passportno']) == '') {
		$hasError = true;
	} else {
		$passportno = trim($_POST['passportno']);
	}

	//Check to make sure that the name field is not empty
	if(trim($_POST['issuedatepicker']) == '') {
		$hasError = true;
	} else {
		$issuedatepicker = trim($_POST['issuedatepicker']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['validdatepicker']) == '') {
		$hasError = true;
	} else {
		$validdatepicker = trim($_POST['validdatepicker']);
	}
	//Check to make sure that the subject field is not empty
	if(trim($_POST['typeofpassport']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['typeofpassport']);
	}
	//Check to make sure that the subject field is not empty
	if(trim($_POST['nationality']) == '') {
		$hasError = true;
	} else {
		$nationality = trim($_POST['nationality']);
	}
	//Check to make sure that the subject field is not empty
	if(trim($_POST['dobdatepicker']) == '') {
		$hasError = true;
	} else {
		$dobdatepicker = trim($_POST['dobdatepicker']);
	}
	//Check to make sure that the subject field is not empty
	if(trim($_POST['gender']) == '') {
		$hasError = true;
	} else {
		$gender = trim($_POST['gender']);
	}
	//Check to make sure that the subject field is not empty
	if(trim($_POST['maritalstatus']) == '') {
		$hasError = true;
	} else {
		$maritalstatus = trim($_POST['maritalstatus']);
	}
	//Check to make sure that the subject field is not empty
	if(trim($_POST['nationalindentityno']) == '') {
		$hasError = true;
	} else {
		$nationalindentityno = trim($_POST['nationalindentityno']);
	}
	if(trim($_POST['occupation']) == '') {
		$hasError = true;
	} else {
		$occupation = trim($_POST['occupation']);
	}

	//Check to make sure sure that a valid email address is submitted
	//if(trim($_POST['email']) == '')  {
		//$hasError = true;
	//} else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
		//$hasError = true;
	//} else {
		//$email = trim($_POST['email']);
	//}

	//Check to make sure comments were entered
	if(trim($_POST['address']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$address = stripslashes(trim($_POST['address']));
		} else {
			$address = trim($_POST['address']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'kalyaninform@gmail.com'; // Put your own email address here
		$body = "Name: $name \n\nType of Passport: $typeofpassport \n\nNationality: $nationality \n\nDate of birth: $dobdatepicker \n\nPlace of birth: $placeofbirth \n\nGender: $gender \n\nMarital Satus: $maritalstatus \n\nNational Indentity Number: $nationalindentityno \n\nOccupation: $occupation \n\nAddress:\n $address";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Bootstrap Contact Form</title>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
<script src="js/bootstrap-contact.js" type="text/javascript"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--<script>
  $( function() {
    $( "#issuedatepicker1" ).datepicker();
    $( "#validdatepicker" ).datepicker();
    $( "#dobdatepicker" ).datepicker();
  } );
  </script>-->
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-push-1">
        <legand>FORM</legand>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-md-push-3">
        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
          <fieldset>


            <?php if(isset($hasError)) { //If errors are found ?>
              <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
            <?php } ?>

            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
              <div class="alert alert-success">
                <p><strong>Message Successfully Sent!</strong></p>
                <p>Thank you for using our contact form, <strong><?php echo $name;?></strong>! Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="name">Your Name<span class="help-required">*</span></label>
              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="passportno">Passport No<span class="help-required">*</span></label>
              <input type="text" name="passportno" id="passportno" value="" class="form-control required" role="input" aria-required="true" />
              <label for="issuedate">issue date<span class="help-required">*</span></label>
              <input type="date"  id="issuedatepicker" value="2011-01-13">
              
              <label for="validuntil">vaild until<span class="help-required">*</span></label>
                <input type="date" id="validdatepicker" value="2011-01-13">
              
            </div>
            <div class="form-group">
              <label for="typeofpassport">Type of Passport<span class="help-required">*</span></label>
              <input type="text" name="typeofpassport" id="typeofpassport" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="nationality">Nationality<span class="help-required">*</span></label>
              <input type="text" name="nationality" id="nationality" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth<span class="help-required">*</span></label>
              <input type="date" id="dobdatepicker" value="2011-01-13" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="placeofbirth">Place of Birth<span class="help-required">*</span></label>
              <input type="text" name="placeofbirth" id="placeofbirth" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="gender">Gender<span class="help-required">*</span></label>
              <input type="text" name="gender" id="gender" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="maritalstatus">Marital Status<span class="help-required">*</span></label>
              <input type="text" name="maritalstatus" id="maritalstatus" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="nationalindentityno">National Identity No<span class="help-required">*</span></label>
              <input type="text" name="nationalindentityno" id="nationalindentityno" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            <div class="form-group">
              <label for="occupation">Occupation<span class="help-required">*</span></label>
              <input type="text" name="occupation" id="occupation" value="" class="form-control required" role="input" aria-required="true" />
            </div>
            
            
            <div class="form-group">
              <label for="address">Address<span class="help-required">*</span></label>
              <textarea rows="8" name="address" id="address" class="form-control required" role="textbox" aria-required="true"></textarea>
            </div>

            <div class="actions">
              <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
              <input type="reset" value="Clear Form" class="btn btn-danger" title="Remove all the data from the form." />
            </div>
          </fieldset>
        </form>
      </div><!-- col -->
    </div><!-- row -->

      <hr>

      <div class="footer">
        
      </div>

    </div> <!-- /container -->
</body>
</html>
