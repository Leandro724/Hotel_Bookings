<?php

// Creating a Class to sign up users
class SignUpUser {
//Class Properties
private $Name;
private $Surname;
private $Email;
private $raw_password;
private $encrypted_Password;
public $error;
public $success;
private $storage = "Users.json";
private $stored_users;
private $new_user;

// Creating the constructor
public function __construct($Name, $Surname,$Email, $Password){

    // Triming any spaces or special characters in Email and Password
    $this->Name = filter_var(trim($Name), FILTER_SANITIZE_STRING);
    $this->Surname = filter_var(trim($Surname), FILTER_SANITIZE_STRING);
    $this->Email = filter_var(trim($Email), FILTER_SANITIZE_STRING);
    $this->raw_password = filter_var(trim($Password), FILTER_SANITIZE_STRING);
    
    
    //Encrypting Password
    $this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);

    // Fetching all users in JSON file
    $this->stored_users = json_decode(file_get_contents($this->storage), true);

    //Add user to JSON file
    $this->new_user = [
        "Name" => $this->Name,
        "Surname" => $this->Surname,
        "Email" => $this->Email,
        "Password" => $this->encrypted_password,
    ];
    
    if($this->checkFieldValues()){
        $this->insertUser();
    }

}

// Check if fields are not emtpy
private function checkFieldValues(){
		if(empty($this->Email) || empty($this->raw_password)){
			$this->error = "Both fields are required.";
			return false;
		}else{
			return true;
		}
	}

//Checking if the user exists
private function usernameExists(){
    foreach($this->stored_users as $user){
        if($this->Email == $user['Email']){
            $this->error = "Username already taken, please choose a different one.";
            return true;
        }
    }
    return false;
}

//Storing the user in JSON file
private function insertUser(){
    if($this->usernameExists() == FALSE){
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