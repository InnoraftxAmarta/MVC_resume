<?php
    // require "../Public/CSS/style.css";


class Login extends framework {


    public function __construct(){
      
        $this->helper("link");
        $this->accountModel = $this->model('accountModel');
        $this->userModel = $this->model('userModel');
        if($this->getSession('userID')){
            $this->redirect("profile/Login");
        }
    }

    public function Login(){
        $this->helper("link");

        $this->view("log-in-page");
        $mymodel = $this->model('userModel');
        
    }        
        

    public function index(){
        $this->helper("link");
        $this->view('log-in-page');
    }

    public function Signup(){
    //     $this->helper("link");
        $this->view("sign-up");
    //     $mymodel = $this->model('userModel');
    //     if($mymodel->myData()){
           
    //     }
    //     else {
    //         echo "sorry";
    //     }
        }    
        public function createAccount(){

            $userData = [
                'Uname'         => $this->input('username'),
                'Pass'          => $this->input('password'),
                'UnameError'    => '' ,
                'PassError'     => ''
            ];
            if(empty($userData['Uname'])){
                $userData['UnameError'] = 'Full Name is Required';
            }
            else {
                if(!$this->accountModel->checkUser($userData['Uname'])){
                    $userData['UnameError'] = "Sorry this username is already exist";
                }
                
            }

            if(empty($userData['Pass'])){
                $userData['PassError'] = 'Password is required';
            }
            if(empty($userData['UnameError']) && empty($userData['PassError'])){
                $data = [$userData['Uname'],$userData['Pass']];
                if($this->userModel->userSignup($data)){
                    $this->setFlash("accountCreated", "Your account has been created successfully");
                    $this->setSession('userId',5);
                    $this->redirect("Login/Login");
                }

            }
            else {
                $this->view('sign-up', $userData);
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
                $result =$this->accountModel->userLogin($userData['Uname'], $userData['Pass']);
                if($result['status'] === 'Usernotfound'){
                    $userData['unameError'] = "Sorry invalid User Name";
                    $this->view("log-in-page", $userData);
                }
                else if($result['status'] === 'PasswordNotMatched'){
                    $userData['passError'] = "Sorry invalid password";
                    $this->view("log-in-page", $userData);
// changes to be done

                }else if($result['status'] === "ok"){
                    $this->setSession("userID" , $userData['Uname']);
                    $this->setSession("pass" , $userData['Pass']);
                    $this->redirect("profile/Login");
                }
            }
            else{
                $this->view("log-in-page", $userData);
            }
        }
        public function code(){
            // echo "linkedin";
            header("Location:https://www.linkedin.com/oauth/v2/authorization?response_type=code()&state=foobar&client_id=86i7q1357wnlxd&redirect_uri=linkedin/code&scope=r_liteprofile%20r_emailaddress%20w_member_social"); 
          }
}

?>