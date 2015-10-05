<?php
require_once "Mail.php";

foreach (array('message', 'ending', 'name', 'email') as $part) {
	if (!isset($_POST[$part])) {
		print '<h1>Gonna need a $part, chief.</h1>';
		return;
	}
}

$from_addr = "Me <notfor@github.com>";
$to = "Real Me <notfor@github.com>";
$subject =  "Contact form submission";
$body = $_POST['message'] . "\n\n" . $_POST['ending'] . "\n" . $_POST['name'] . "\n" . $_POST['email'];

$headers = array ("From" => $from_addr,
                  "To" => $to,
                  "Subject" => $subject);
$smtp = Mail::factory("smtp", array ('host' => "smtp.webfaction.com",
                                     'auth' => true,
                                     'username' => "my_mailbox_name",
                                     'password' => "password1"));

$mail = $smtp->send($to, $headers, $body);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <title>evan winters</title>
  <link href='https://fonts.googleapis.com/css?family=Oswald:300|Raleway:200,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body class="contact <?php $mail === true ? 'success' : 'failure'; ?>">
  <header id="header" class="clearfix table">
    <div class="content-wrapper table-row">
      <div class="middle table-cell">
      	<h3 class="message-failure">Crap. There was a problem sending your message. We're on it.</h3>
        <h1><a href="/"><span>Evan</span> <span>Winters</span></a></h1>
        <h3 class="message-success">received your message. Thank you!<br><a href="../">Back to Home</a></h3>
        <ul class="buy-links">
          <li><a href="">
            <h2>The Witch of Bracken's Hollow</h2>
            <i class="fa fa-amazon"></i> Available on Amazon
          </a></li>
        </ul>
      </div>
    </div>
  </header>

  <div class="scripts">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </div>
</body>
</html>