<?php  
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account;


	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<html>
	<head>
		<title>Welcome to Spotify!</title>
	</head>

<body>
	<div id="InputContainer">
	<form id="loginForm" action="login.php" method="POST">
		<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. Johny" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input type="password" id="loginPassword" name="loginPassword" placeholder="Your Password" required>
			</p>
				<button type="submit" name="loginButtom">LOG IN</button>
	</form>

	<form id="registerForm" action="register.php" method="POST">
		<h2>Create your free account</h2>
			<p>
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" placeholder="e.g. Johny" value="<?php getInputValue('username'); ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>
				<label for="firstName">First name</label>
				<input type="text" id="firstName" name="firstName" placeholder="e.g. Johny" value="<?php getInputValue('firstName'); ?>" required>
			</p>


			<p>
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>
				<label for="lastName">Last Name</label>
				<input type="text" id="lastName" name="lastName" placeholder="e.g. Simpson" value="<?php getInputValue('lastName'); ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<label for="email">E-mail</label>
				<input type="email" id="email" name="email" placeholder="e.g. JohnySimpson.com" value="<?php getInputValue('email') ?>" required>
			</p>

			<p>
				<label for="email2">Confirm E-mail</label>
				<input type="text" id="email2" name="email2" placeholder="e.g. JohnySimpson.com" value="<?php getInputValue('email2') ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Your Password"  required>
			</p>

			<p>
				<label for="password2">Confim Password</label>
				<input type="password" id="password2" name="password2" placeholder="Your Password"  required>
			</p>
				<button type="submit" name="registerButton">Sign Up</button>
	</form>




	</div>
</body>
</html>


