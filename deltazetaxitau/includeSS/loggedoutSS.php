<?php

//THIS PAGE IS FOR WHEN WE WANT TO LOGOUT

  if(isset($_POST['submit'])){
    session_start(); //start the sessions
    session_unset(); //unsets all those sessions we set earlier
    session_destroy(); //destroys any remaining active sessions
    header("Location: ../dzPage.php");
  }
  //THIS PAGE IS SPECIFICALLY LINKED TO POSITIONSDZ.PHP AND ALL THE ROLES PAGE BECAUSE THATS THE
  //PAGES THAT HAVE LOGOUT BUTTONS
 ?>
