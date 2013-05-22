<?php

function processAuth($user, $pass) {

    $userList = array();
    $userList["david"] = "test1234";

    $auth = array();
    $auth["return"] = false;
    $auth["message"] = "";

    //Check if user exists
    $userArray = array_keys( $userList );
    if ( in_array( $user, $userArray ) ) {


        if ( $pass == $userList[$user] ) {
            $auth["return"] = true;
        }

           else {
            $auth["message"] = "Password is not correct";

           }

    }

    else {
        $auth["message"] = "User does not exist";
    }


    //Check if password is valid


return ( $auth );

}

