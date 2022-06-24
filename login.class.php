<?php
// Creating a Class for users to login
class LoginUser{
    // class properties
		private $username;
		private $password;
		public $error;
		public $success;
		private $storage = "Users.json";
		private $stored_users;

    // class methods

        // Creating the constructor
        public function __construct($username, $password){
			$this->username = $username;
			$this->password = $password;
			$this->stored_users = json_decode(file_get_contents($this->storage), true);
			$this->login();
		}
        
        // Checking if the email entered matches the one of the JSON file then login the user or display an error message
        private function login(){
			foreach ($this->stored_users as $user) {
				if($user['Email'] == $this->username){
					if(password_verify($this->password, $user['Password'])){
						session_start();
						$_SESSION['user'] = $user['Name'];
						header("location: Search-Hotel.php"); exit();
					}
				}
			}
			return $this->error = "Wrong username or password";
		}
}
?>