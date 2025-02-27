<?php                             // to connect the DB

  $con = mysqli_connect('localhost','root','','digisnare');   // localhost, db-username, db-password, folder-name // if we didn't give any password thn keep it empty

  if(!$con)                               
  {
     //  echo 'Error in connection';
  }
  else
  {
    //  echo 'Connected';
  }

?>