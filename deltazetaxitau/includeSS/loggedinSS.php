<?php
//THIS PAGE IS FOR ACCOUNTS THAT HAVE ALREADY BEEN CREATED

session_start(); //starts the session in the website

if (isset($_POST['submit'])){ //check if we clicked the submit button
  include 'ssConnector.php'; //include our SS connector file that connects to the database

  $uid = mysqli_real_escape_string($conn,$_POST['uid']); //this safely stores the user entered uid entered from dzPage.php
  $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

  //errorhandlers

  if(empty($uid) || empty($pwd)){ //if the information entered is empty
    header("Location: ../dzPage.php?login=empty");
    exit();
  }else{ //the user inputted something
    $sql = "SELECT * FROM dzusers WHERE uid = '$uid'"; //this is the snippet of sql code that checks if a user id is in the database
    $result = mysqli_query($conn,$sql); //stores the queried action into the variable (the sql code)
    $resultCheck = mysqli_num_rows($result); //this checks if anything was actually returned from the mysqliquery action above

    if($resultCheck < 1){ //this means the query result returned ZERO things, so it wasn't found in the database
      header("Location: ../dzPage.php?login=error");
      exit();
    }else{ //okay cool, so we found the user id inside the database
      //now its time to check if we got the right password from the user
      if($row = mysqli_fetch_assoc($result)) //this stores the array that was given from result into row
        //$hashedPwdCheck = password_verify($pwd,$row['pwd']); this is only if we hashed the password

        if($pwd != $row['pwd']){ //incorrect password given
          header("Location: ../dzPage.php?login=error"); //go back to the homepage
          exit();
        }else{ //correct password given
          $_SESSION['uid'] = $row['uid']; //start the session for this specific user id
          $_SESSION['pwd'] = $row['pwd']; //and the specific user password
          header("Location: ../positionsDZ.php?login=success");
        }
    }
  }
}else{ //user never clicked submit
  header("Location: ../dzPage.php?login=error"); //brings us back to the homepage
  exit();
}
