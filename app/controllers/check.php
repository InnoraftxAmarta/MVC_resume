<?php

class check extends framework{
    public function signup(){
        $userModel = $this->model('userModel');
      
        $uname = $this->input('username');
        $pass = $this->input('password');
        if($userModel->userSignup( $uname, $pass)){
            echo "Registered successfully";
        }
        else {
            echo "Not Registered";
        }
    }
     
    public function userLogin(){
        $userData = [
            'Uname'     => $this->input('uname'),
            'Pass'      => $this->input('pass'),
            'unameError'=> '',
            'passError' => ''  
        ];

        if(empty($userData['Uname'])){
            $userData['unameError'] = "Email is required";
        }

        if(empty($userData['Pass'])){
            $userData['passError'] = "Password is required";
        }

        if(empty($userData['unameError']) && empty($userData['passError'])){

        }
        else{
            $this->view("log-in-page", $userData);
        }

    }
   

}
?>