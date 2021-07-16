<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 

	// check for form submission
	if (isset($_POST['submit'])) {

		$errors = array();

		// check if the username and password has been entered
		if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}

		// check if there are any errors in the form
		if (empty($errors)) {
			// save username and password into variables
			$email 		= mysqli_real_escape_string($connection, $_POST['email']);
			$password 	= mysqli_real_escape_string($connection, $_POST['password']);
			$hashed_password = sha1($password);

			// prepare database query
			$query = "SELECT * FROM user 
						WHERE email = '{$email}' 
						AND password = '{$password}' 
						LIMIT 1";

			$result_set = mysqli_query($connection, $query);

			verify_query($result_set);

			if (mysqli_num_rows($result_set) == 1) {
				// valid user found
				$user = mysqli_fetch_assoc($result_set);
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['first_name'] = $user['first_name'];
				// updating last login
				$query = "UPDATE user SET last_login = NOW() ";
				$query .= "WHERE id = {$_SESSION['user_id']} LIMIT 1";

				$result_set = mysqli_query($connection, $query);

				verify_query($result_set);

				// redirect to users.php
				header('Location: users.php');
			} else {
				// user name and password invalid
				$errors[] = 'Invalid Username / Password';
			}
		}
	}
?>
<?php require_once('inc/header.php'); ?>

<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
              <h3 align="center">Admin Login</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="index.php" method="post" autocomplete="off">
                            <div class="form-group">
                            	<?php 
								if (isset($errors) && !empty($errors)) {
									echo '<p class="error">Invalid Username / Password</p>';
								}
								?>

								<?php 
									if (isset($_GET['logout'])) {
										echo '<p class="info">You have successfully logged out from the system</p>';
									}
								?>
                                <input type="text" class="form-control" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Enter password">
                            </div>
                            <!-- <input type="submit" name="" class="fadeIn fourth"> -->
                            <button type="submit" name="submit" class="fadeIn fourth">Log In</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('inc/footer.php') ?>