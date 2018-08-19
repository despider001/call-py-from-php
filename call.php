<?php
     $email = "sadiq@email.com";
     $pass = "12qwqwwe";
     $output = passthru("python target.py $email $pass");
     echo $output;
?>