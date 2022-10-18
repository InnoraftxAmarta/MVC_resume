<?php

class accountModel extends database {

    public function checkUser($user){
        if($this->Query("select User_name from RB1 where User_name = ?",[$user])){
            if($this->rowCount()>0){
                return false;
            }
            else {
                return true;
            }
        }
    }
    public function userlogin($uname, $pass){
        if($this->Query("select * from RB1 where User_name = ?", [$uname])){
            if($this->rowCount()>0){
                $row = $this->fetch();
                $dbpassword = $row->password;
                $userID = $row->User_name;
                if($pass == $dbpassword){
                    return ['status' => 'ok', 'data' => $userID];

                }
                else{
                    return ['status' => 'PasswordNotMatched'];
                }
            }
            else{
                return ['status' => 'Usernotfound'];
            }
        }
    }

}

?>