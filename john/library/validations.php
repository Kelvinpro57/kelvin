<?php 

// This function is to check if the user is submitting an empty form. 
function required($input_field, $input_name)
{
    if (!empty($input_field)) {
        return true;
    } else {
        throw new \Exception("$input_name cannot be empty");
    }
    // TESTED OK. 
}

// This function is to validate the user's email address. 
function valid_email ($input_field, $input_name)
{
    if (filter_var($input_field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        throw new \Exception("Invalid $input_name");
    }
    // TESTED OK. 
}

// This function is to make sure that the user is inputting a number. 
function valid_number ($input_field, $input_name){
    if (!is_numeric($input_field)) {
        throw new \Exception("$input_name must be a number");
    } else {
        return true;
    }
    // TESTED OK. 
}

// This function is to make sure that the user is inputting alphabet. 
function check_alphabet($input_field, $input_name){
    if (!ctype_alpha($input_field)) {
        throw new \Exception("$input_name must be characters only.");
    } else {
        return true;
    }
    // TESTED OK. 
}

// This function is to validate the username of the user. 
function valid_username($input_field, $input_name)
{
    if (!ctype_alnum($input_field)) {
        throw new \Exception("Invaild $input_name");
    } else {
        return true;
    }
    // TESTED OK. 
}

// This function is to validate the password that the user is inputting. 
// Not working yet. 
function validate_password($input_field, $input_name)
{
    if (ctype_alnum($input_field) && strlen($input_field) > 4) {
        return true;
    } else {
        throw new \Exception("Please use a valid $input_name, Password should be upto five(5) character");
    }
    // 
}

// $input_field = "e";
// $input_name = "Password";

// try {
//     check_username ($input_field, $input_name);
// } catch (\Exception $th) {
//     echo $th->getMessage();
// }


?>