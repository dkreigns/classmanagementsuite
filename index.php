<?php

    session_start();

    //Check if the logged in session exists
    if(isset($_SESSION['logged_in']))
    {
        //Check if it's signed in
        if($_SESSION['logged_in'] == true)
        {
            //Forward to home
        }
        else
        {
            //Foroward to Welcome Page
            header('Location:welcome.php');
        }
    }

?>