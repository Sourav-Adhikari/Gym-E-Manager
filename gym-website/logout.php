<?php
session_start();
session_destroy();
header('Refresh:2; url=http://localhost/gym-website/signup.html');
?>