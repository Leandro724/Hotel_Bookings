<?php

// Creating a Class to sign up users
class SignUpUser {
//Class Properties
private $userName;
private $userSurname;
private $userEmail;
private $userPassword;
private $encrypted_Password;
public $error;
public $success;
private $storage = "Users.json";
private $stored_users;
private $new_user;

// Creating the constructor
public function __construct($userName, $userSurname,$userEmail, $userPassword){

    // Triming any spaces or special characters in Email and Password
    $this ->userName = filter_var(trim($userName), FILTER_SANITIZE_STRING);
    $this ->userSurname = filter_var(trim($userSurname), FILTER_SANITIZE_STRING);
    $this->userEmail = filter_var(trim($userEmail), FILTER_SANITIZE_STRING);
    $this->userPassword = filter_var(trim($userPassword), FILTER_SANITIZE_STRING);
    
    //Encrypting Password
    $this->encrypted_Password = password_hash($this->$userPassword, PASSWORD_DEFAULT);

    // Fetching all users in JSON file
    $this->stored_users = json_decode(file_get_contents($this->storage),true);

    //Add user to JSON file
    $this->new_user = [
        "Name" => $this->userName,
        "Surname" => $this->userSurname,
        "Email" => $this->userEmail,
        "Password" => $this->userPassword,
    ];
    
    $this->newUser();

}

//Checking if the user exists
private function userExists(){

    foreach($this->stored_users as $user){
        if($this->userEmail == $user['Email']){

            $this->error = "Email already taken, please choose a different one.";

            return true;
        }
    }

    return false;

}

//Storing the user in JSON file
private function newUser(){

    if($this->userExists() == FALSE){
        array_push($this->stored_users, $this->new_user);
        if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
            return $this->success = "Your registration was successful";
        }else{
            return $this->error = "Something went wrong, please try again";
        }
    }

}
}

?>