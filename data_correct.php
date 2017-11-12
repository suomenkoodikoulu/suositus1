<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10.11.2017
 * Time: 13:33
 */

function check_name($name)
{
    if (strlen($name) < 2)
    {
        return false;
    }
    else
    {
        return true;
    }
}


function check_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return false;
    }
    else
    {
        return true;
    }
}


function check_question($qston)
{
    if (($qston != "kylla"))
    {
        return true;
    }
    else
    {
        return false;
    }
}


if (isset($_POST['form']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $qston = $_POST['question'];

    if (!check_name($first_name))
    {
        echo "First name too short! ";
    }
    else if (!check_name($last_name))
    {
        echo "Last name too short! ";
    }
    else if (!check_email($email))
    {
        echo "Invalid email! ";
    }
    else if (!check_question($qston))
    {
        echo "There's no answer! ";
    }
    else
    {
        echo "Success! ";
    }

    echo "Correct! Or was it incorrect?";
}
?>