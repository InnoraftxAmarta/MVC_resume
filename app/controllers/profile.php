<?php

class profile extends framework{

    public function __construct(){
        if(!$this->getSession('userID')){
            $this->redirect("Login/Login");
        }
    }
    public function Login(){
        $this->view("home");
    }
    public function profile(){
        $this->view("profile");
    }
    public function logout(){
        $this->destroy();
        $this->redirect("Login/Login");
    }
    public function contactus(){
        $this->view("contactus");

    }
    public function aboutus(){
        $this->view("aboutus");

    }
    public function header(){
        $this->view("header");
    }
    public function formfill(){
        $this->view("form");
    }
    // public function download(){
        // $path    = BASEURL.'/Public/save_pdf/'.$_SESSION['userID'].$_SESSION['pass'];
        // $file_name = $path."/resume.pdf";
        // $files = scandir($path);
        // $files = array_diff(scandir($path), array('.', '..'));
        // foreach($files as $file){
        //     echo "Content last changed: ".date("F d Y H:i:s.", fileatime($path.'/'.$file));
        //     // echo "<a href=$path/$file>$path/$file</a>";
        //     // $this->redirect($file);
        //     // readfile("$path/$file");
        //     echo "<br>";

        // }
        // header('Content-Description: File Transfer');
        // header('Content-Type: application/pdf');
        // header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
        // header('Content-Transfer-Encoding: binary');
        // header('Expires: 0');
        // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        // header('Pragma: public');
        // header('Content-Length: ' . filesize($file_name)); //Absolute URL
        // ob_clean();
        // flush();
        // readfile($file_name); //Absolute URL
        // exit();


        // echo "downloaded";
    // }
    
}

?>