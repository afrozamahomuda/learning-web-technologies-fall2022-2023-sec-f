<?php

    $username = $_POST['username'];

    $password = $_POST['pass'];



    if($username == "" || $password == "" ){

        echo "<h1>One or more fields are empty!</h1>";

    }

    else if(strlen($username)<2){

        echo "<h1>Username must be at least 2 characters long! </h1>";

    }

     else if((substr_count($username,'@')>0)||(substr_count($username,'#')>0)||(substr_count($username,'$')>0)||(substr_count($username,'%')>0))

    {echo "<h1>Username cannot contain special characters! </h1>";}

   

    else if(strlen($password)<8){

        echo "<h1>Password must be at least 8 characters long! </h1>";

    }

    else if((substr_count($password,'@')<1)&&(substr_count($password,'#')<1)&&(substr_count($password,'$')<1)&&(substr_count($password,'%')<1)){

        echo "<h1>Password must contain the special characters (@, # $, %) </h1>";

    }

   

    else{

        echo "<h1>  Valid User!  </h1>";

    }



?>