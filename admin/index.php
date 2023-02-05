<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../admin/index.php"><b>sure</b>Vote <i class="fa fa-check-circle" style="color:green"></i></a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in as an admin to start your session</p>

            <form action="login.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="w3-row">
                    <div class="w3-right" style="float:right">
                        <span class="w3-small">Not an admin? <a href="../index.php">Sign in as a voter</a></span>
                    </div>
                    <div class="w3-row">
                        <div class="w3-left">
                            <button type="submit" class="w3-btn w3-hover-green w3-round" name="login"><i
                                    class="fa fa-sign-in"></i> Sign In</button>
                        </div>
                    </div>
            </form>
        </div>
        <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
    </div>

    <?php include 'includes/scripts.php' ?>
</body>

</html>