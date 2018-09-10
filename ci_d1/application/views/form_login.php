<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

//header("location: http://localhost/login/index.php/member/login");
}
?>
<head>
<title>Login Form</title>
<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>

<div id="main">
<div id="login">
<h2>Login Form</h2>
<hr/>
<?php echo form_open('member/user_login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
<label>Username :</label>
<input type="text" name="username" id="name" placeholder="username"/><br /><br />
<label>Password :</label>
<input type="password" name="password" id="password" placeholder="password"/><br/><br />
<input type="submit" value=" Login " name="submit"/><br />
<a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a>
<?php echo form_close(); ?>
</div>
</div>
</body>
</html>