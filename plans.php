<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- Bootstrap Core CSS -->
        <link href="user/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="user/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="user/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="user/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="user/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="user/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" href="user/img/logo.png">

        <!-- <script type="text/javascript" src="js/sweetalert.min.js"></script> -->
</head>
<body>

	<!-- <div id="page-wrapper"> -->
        <div class="container-fluid">
			<div class="row"> 

                       <?php 
    $plan = 'STARTER';
        $roi1 = 3;
        $invsPlan = [$plan, $roi1, 1, 300, "$1,500"];

    $plan2 = 'SILVER';
        $roi2 = 10;
        $invsPlan2 = [$plan2, $roi2, 3, 1500, "$10000"];

    $plan3 = 'GOLD';
        $roi3 = 15;
        $invsPlan3 = [$plan3, $roi3, 7, 10000, "$45,000"];

    $plan4 = 'PLATINUM';
        $roi4 = 10;
        $invsPlan4 = [$plan4, $roi4, 3, 45000, "$150,000"];

    $invPlans = array($invsPlan, $invsPlan2, $invsPlan3);

if (!empty($invPlans)) {
	foreach ($invPlans as $invPlan) {
		
	$i = 0;
		$i++;
		if ($invPlan[4] === "No Limit") {
			$limit = 90000000000;
		}else{
			$limit = $invPlan[4];
		}
 ?>
                      
                        
                        <div class="col-lg-4 col-md-6">
                        	<!-- <h3 style="font-weight: bolder;"><i class="fa fa-money"></i> Available Bal: $<?= round(floatval($user['usd_bal']),2);?></h3> -->
                        	<br>
                            <div class="panel panel-primary">


                                
                                <!-- <div class="login-panel panel panel-default sign-in"> -->
			                        <div class="panel-heading">
			                            <h2 align="center" style="font-weight: bolder;"><?= $invPlan[0]; ?></h2>
			                        </div>
			                        <div class="panel-body" style="height: 356px;">
			                            <!-- <form role="form" action="" method=""> -->
			                            	<h4><b>Amount Range : $<?= number_format($invPlan[3]); ?> - <?= $invPlan[4]; ?></b></h4>
			                            	<h4><b>Maturity : <?= $invPlan[2]; ?> Days</b></h4>
			                            	<h4><b>Returns : <?= $invPlan[1]; ?>%</b></h4>
			                            	<h4><b>24/7 Support</b></h4>
			                            	<h4><b>Instant Withdrawals</b></h4>
			                                <fieldset>
			                                    <div class="form-group">
			                                        <input style="visibility: hidden;" class="form-control" name="sector" type="text" value="<?= $plan ?>">
			                                    	<label>Enter Amount</label>
			                                        <input id="amt<?= $i; ?>" class="form-control" placeholder="Amount" name="amt" type="number">
			                                    </div>
			                                    
			                                    <!-- Change this to a button or input when using this as a form -->
			                                    <a href="user/pkg" class="btn btn-lg btn-success btn-block">Activate</a>

			                                </fieldset>
			                            <!-- </form> -->

			                        </div>
			                    <!-- </div> -->


                            </div>
                        </div>



<?php }
	}
 ?>


            </div>
        </div>
    <!-- </div> -->

</body>
</html>
