<?php 

function formatDate($date)
{
    $date = date("F j, Y", strtotime($date));
    return $date;
}

/**
 * @return $string
 * @param [string]
 * 
 * Security
 */

function XSS($value)
{

    return  trim(strip_tags($value));
}

/**
 * @return $string
 * @param [string,string]
 * 
 * Security
 */

function CreateSession($session_name, $session_value)
{
    $_SESSION["$session_name"] = $session_value;
}

function SecurePassword($pass)
{
    return password_hash($pass, PASSWORD_BCRYPT);
    //or using md5() function
}

/*
 * Redirect To Page
*/
function redirect($page = FALSE, $message = NULL, $message_type = NULL)
{
    if (is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    //Check For Message
    if ($message != NULL) {
        //Set Message
        $_SESSION['message'] = $message;
    }
    //Check For Type
    if ($message_type != NULL) {
        //Set Message Type
        $_SESSION['message_type'] = $message_type;
    }

    //Redirect
    header('Location: ' . $location);
   
}

function isLoggedIn()
{
    if (isset($_SESSION['login'])) {
        return true;
    } else {
        return false;
    }
}
/*
 * Get Logged In User Info
*/
function getUser()
{
    $userArray = array();
    $userArray['name'] = $_SESSION['login'];
    return $userArray;
}

function isValidEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        echo "Email is invalid";
    }
}

function passwordsMatch($pw1, $pw2)
{
    if ($pw1 == $pw2) {
        return true;
    } else {
        return false;
    }
}
?>