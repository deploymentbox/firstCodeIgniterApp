<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/united/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
	</style>
</head>
<body>
    <?php $this->load->view('list_customers_content.php'); ?>
    <footer class="footer">
        <div class="container">
            <div>
                <img src="/assets/images/hostingcrab-logo.png" alt="Hostingcrab.com"/>
            </div>
            <div>by <a href="http://www.hostingcrab.com">HostingCrab.com</a></div>
        </div>
    </footer>
</body>
</html>
