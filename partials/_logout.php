<?php 
 session_start();
 echo "Logging out please wait........";
 session_destroy();
 header("Location:/forumWebsite/");
?>