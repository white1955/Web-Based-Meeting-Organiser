<?php
// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password, verified FROM user WHERE username = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();

                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){
                    // Bind result variables
                    $stmt->bind_result($username, $hashed_password,$verified);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password) && $verified == "yes"){
                            /* Account is verfied and Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;

                            $_SESSION['role'] = $_POST['role'];

                            header("location: index.php");
                        } else{
                            if ($verified != "yes")
                            {
                                // Display an error message if account is not yet verified
                                $username_err = "This account is not yet verified.";
                            }
                            else{
                                // Display an error message if password is not valid
                                $password_err = 'The password you entered was not valid.';
                            }
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Meeting Organiser</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/fields_validation.js" type="application/javascript"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; }
    </style>
</head>
<body>
        <div class="row">
        			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        				<div class="login-panel panel panel-default">
        					<div class="panel-heading">Log in</div>
        					<div class="panel-body">
        						<form role="form" name="login" onsubmit="return validate_login()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        							<fieldset>
                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label>Username:<sup>*</sup></label>
                            <input type="text" autofocus="" placeholder="username" name="username"class="form-control" value="<?php echo $username; ?>" required>
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>Password:<sup>*</sup></label>
                            <input type="password" name="password" class="form-control" required>
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Sign in as: </label>
                            <br>
                            <label class="radio-inline" for="participant">
								            <input type="radio" name="role" id="participant" value="Participant" checked="checked">Participant</label>

                            <label class="radio-inline" for="organiser">
								            <input type="radio" name="role" id="organiser" value="Organiser">Organiser</label>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Log In">
                        </div>
                        <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                                    </fieldset>
                    </form>
                                <noscript>*Please enable javascript on your device to enjoy the best experience*</noscript>
        					</div>
        				</div>
        			</div><!-- /.col-->
        		</div><!-- /.row -->

</body>
</html>
