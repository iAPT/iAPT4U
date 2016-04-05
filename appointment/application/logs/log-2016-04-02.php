<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-04-02 07:47:32 --> Session: HMAC mismatch. The session cookie data did not match what was expected.
ERROR - 2016-04-02 08:03:45 --> Severity: Warning  --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\xampp\htdocs\iAPT4U\appointment\application\third_party\phpmailer\phpmailer\class.phpmailer.php 664
ERROR - 2016-04-02 08:03:45 --> Email could not been sent. Mailer Error (Line 127): Could not instantiate mail function.
ERROR - 2016-04-02 08:03:45 --> #0 D:\xampp\htdocs\iAPT4U\appointment\application\controllers\appointments.php(445): Notifications->send_appointment_details(Array, Array, Array, Array, Array, 'Your appointmen...', 'Thank you for a...', 'http://localhos...', 'kaju.k2@gmail.c...')
#1 [internal function]: Appointments->ajax_register_appointment()
#2 D:\xampp\htdocs\iAPT4U\appointment\system\core\CodeIgniter.php(360): call_user_func_array(Array, Array)
#3 D:\xampp\htdocs\iAPT4U\appointment\index.php(229): require_once('D:\\xampp\\htdocs...')
#4 {main}
