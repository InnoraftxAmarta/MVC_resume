<?php

class userModel extends database {
    public function userSignup($data){
        if($this->Query("insert into RB1 (User_name, password) values (?,?)",$data)){
            return true;
        }
        else{
            return false;
        }
    }
        
    
}

?>