<?
/*
1/3/17 - 8:30 PM - 10:00 PM
*/
/*
id
first_name
last_name
email_address
phone_number_home
phone_number_cell
phone_number_work
alternate_phone_number_home
alternate_phone_number_cell
alternate_phone_number_work
address
town
zip_code
loan_type
first_time
cash_out
finance_time
has_agent
contact_method
date_submitted
follow_up_date
follow_up_by
*/

$form_posted = false;

if( isset( $_POST["fm_home_loans"] ) ) {
	if( 
		$_POST["first_name"]
		&& $_POST["last_name"]
		&& $_POST["email_address"]
		&& $_POST["phone_number_home"]
		&& $_POST["phone_number_cell"]
		&& $_POST["phone_number_work"]
		&& $_POST["alternate_phone_number_home"]
		&& $_POST["alternate_phone_number_cell"]
		&& $_POST["alternate_phone_number_work"]
		&& $_POST["address"]
		&& $_POST["town"]
		&& $_POST["zip_code"]
		&& $_POST["loan_type"]
		&& $_POST["first_time"]
		&& $_POST["cash_out"]
		&& $_POST["finance_time"]
		&& $_POST["has_agent"]
		&& $_POST["contact_method"] 
	) {
		$form_posted = true;
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <title>FirstName LastName at FM Home Loans</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                
                <a class="navbar-brand page-scroll" href="#page-top"><img src="fm-logo.jpg" alt="" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        &nbsp;
                    </li>
                    <li>
                        &nbsp;
                    </li>
                    <li>
                        &nbsp;
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
		<?php if( $form_posted === false ) { ?>
        <form action="index.php" method="POST">
			<div class="container">
				<div class="row text-left">
					<div class="col-lg-8">
						Thank you for contacting FirstName LastName at FM Home Loans. Please complete the form
						below and I will contact you to help you achieve homeownership by leveraging FM Home Loans
						extensive mortgage lending resources to provide great rates, fast pre-approvals, superior
						customer service and hassle-free closings. I am dedicated to providing effective purchasing and
						loan solutions with real time communication throughout the loan process from application to
						closing.
					</div>
				</div>
				
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							First Name
						</div>
						<div class="col-lg-4">
							<input type="text" name="first_name" value="<?php echo ( isset( $_POST["first_name"] ) ? $_POST["first_name"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Last Name
						</div>
						<div class="col-lg-4">
							<input type="text" name="last_name" value="<?php echo ( isset( $_POST["last_name"] ) ? $_POST["last_name"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Email Address
						</div>
						<div class="col-lg-4">
							<input type="text" name="email_address" value="<?php echo ( isset( $_POST["email_address"] ) ? $_POST["email_address"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Phone Number
						</div>
						<div class="col-lg-4">
							&nbsp;
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Home
						</div>
						<div class="col-lg-4">
							<input type="text" name="phone_number_home" value="<?php echo ( isset( $_POST["phone_number_home"] ) ? $_POST["phone_number_home"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Cell
						</div>
						<div class="col-lg-4">
							<input type="text" name="phone_number_cell" value="<?php echo ( isset( $_POST["phone_number_cell"] ) ? $_POST["phone_number_cell"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Work
						</div>
						<div class="col-lg-4">
							<input type="text" name="phone_number_work" value="<?php echo ( isset( $_POST["phone_number_work"] ) ? $_POST["phone_number_work"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Alternate Phone Number
						</div>
						<div class="col-lg-4">
							&nbsp;
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Home
						</div>
						<div class="col-lg-4">
							<input type="text" name="alternate_phone_number_home" value="<?php echo ( isset( $_POST["alternate_phone_number_home"] ) ? $_POST["alternate_phone_number_home"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Cell
						</div>
						<div class="col-lg-4">
							<input type="text" name="alternate_phone_number_cell" value="<?php echo ( isset( $_POST["alternate_phone_number_cell"] ) ? $_POST["alternate_phone_number_cell"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Work
						</div>
						<div class="col-lg-4">
							<input type="text" name="alternate_phone_number_work" value="<?php echo ( isset( $_POST["alternate_phone_number_work"] ) ? $_POST["alternate_phone_number_work"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Address
						</div>
						<div class="col-lg-4">
							<input type="text" name="address" value="<?php echo ( isset( $_POST["address"] ) ? $_POST["address"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Town
						</div>
						<div class="col-lg-4">
							<input type="text" name="town" value="<?php echo ( isset( $_POST["town"] ) ? $_POST["town"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Zip Code
						</div>
						<div class="col-lg-4">
							<input type="text" name="zip_code" value="<?php echo ( isset( $_POST["zip_code"] ) ? $_POST["zip_code"] : "" ); ?>" />
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Are you purchasing or refinancing?
						</div>
						<div class="col-lg-4">
							<div>
								<label>
									<input type="radio" name="loan_type" value="Purchasing" <?php echo ( isset( $_POST["loan_type"] ) && $_POST["loan_type"] == "Purchasing" ? "checked" : "" ); ?> /> Purchasing
								<label>
							</div>
							<div>
								<label>
									<input type="radio" name="loan_type" value="Refinancing" <?php echo ( isset( $_POST["loan_type"] ) && $_POST["loan_type"] == "Refinancing" ? "checked" : "" ); ?> /> Refinancing
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Are a you first-time home buyer?
						</div>
						<div class="col-lg-4">
							<div>
								<label>
									<input type="radio" name="first_time" value="Yes" <?php echo ( isset( $_POST["first_time"] ) && $_POST["first_time"] == "Yes" ? "checked" : "" ); ?> /> Yes
								</label>
							</div>
							<div>
								<label>
									<input type="radio" name="first_time" value="No" <?php echo ( isset( $_POST["first_time"] ) && $_POST["first_time"] == "No" ? "checked" : "" ); ?> /> No
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Are you looking for cash out?
						</div>
						<div class="col-lg-4">
							<div>
								<label>
									<input type="radio" name="cash_out" value="Yes" <?php echo ( isset( $_POST["cash_out"] ) && $_POST["cash_out"] == "Yes" ? "checked" : "" ); ?> /> Yes
								</label>
							</div>
							<div>
								<label>
									<input type="radio" name="cash_out" value="No" <?php echo ( isset( $_POST["cash_out"] ) && $_POST["cash_out"] == "No" ? "checked" : "" ); ?> /> No
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							When do you intend to apply for financing?
						</div>
						<div class="col-lg-4">
							<select name="finance_time">
								<option value="" <?php echo ( isset( $_POST["finance_time"] ) && $_POST["finance_time"] == "" ? "selected" : "" ); ?>>Choose one...</option>
								<option value="Immediately" <?php echo ( isset( $_POST["finance_time"] ) && $_POST["finance_time"] == "Immediately" ? "selected" : "" ); ?>>Immediately</option>
								<option value="Within 3 months" <?php echo ( isset( $_POST["finance_time"] ) && $_POST["finance_time"] == "Within 3 months" ? "selected" : "" ); ?>>Within 3 months</option>
								<option value="3-6 months" <?php echo ( isset( $_POST["finance_time"] ) && $_POST["finance_time"] == "3-6 months" ? "selected" : "" ); ?>>3-6 months</option>
								<option value="6-9 months" <?php echo ( isset( $_POST["finance_time"] ) && $_POST["finance_time"] == "6-9 months" ? "selected" : "" ); ?>>6-9 months</option>
								<option value="More than 9 months" <?php echo ( isset( $_POST["finance_time"] ) && $_POST["finance_time"] == "More than 9 months" ? "selected" : "" ); ?>>More than 9 months</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							Are you currently working with a real estate agent?
						</div>
						<div class="col-lg-4">
							<div>
								<label>
									<input type="radio" name="has_agent" value="Yes" <?php echo ( isset( $_POST["has_agent"] ) && $_POST["has_agent"] == "Yes" ? "checked" : "" ); ?> /> Yes
								</label>
							</div>
							<div>
								<label>
									<input type="radio" name="has_agent" value="No" <?php echo ( isset( $_POST["has_agent"] ) && $_POST["has_agent"] == "No" ? "checked" : "" ); ?> /> No
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							How would you like to discuss your home financing needs with us?
						</div>
						<div class="col-lg-4">
							<div>
								<label>
									<input type="radio" name="contact_method" value="By phone or email with a national consultant" <?php echo ( isset( $_POST["contact_method"] ) && $_POST["contact_method"] == "By phone or email with a national consultant" ? "checked" : "" ); ?> /> By phone or email with a national consultant
								</label>
							</div>
							<div>
								<label>
									<input type="radio" name="contact_method" value="With a local consultant" <?php echo ( isset( $_POST["contact_method"] ) && $_POST["contact_method"] == "With a local consultant" ? "checked" : "" ); ?> /> With a local consultant
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-left">
					<div class="col-lg-8">
						<div class="col-lg-4">
							&nbsp;
						</div>
						<div class="col-lg-4">
							<input type="submit" name="fm_home_loans" value="Submit Form" />
						</div>
					</div>
				</div>
			</div>
		</form>
			<?php } else { ?>
			<div class="container">
				<div class="row text-left">
					<div class="col-lg-8">
						<h1>Thank You!</h1>
						I will contact you as soon as possible.
					</div>
				</div>
			</div>
			<?php } ?>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row text-left">
                <div class="col-lg-12">
                    <h1>FirstName LastName</h1>
					NMLS# #######<br />
					Ficticious Home Loan Company, LLC <br />
					### StreetName Ave, Suite ### <br />
					Anytown, State ZipCode <br />
					(###) ###-##### <br />
					<a href="#">EMAIL ME</a> <br />
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
