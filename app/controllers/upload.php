<?php

class upload extends framework{
    public function upload(){
        // echo "in upload";
        $this->helper("fpdf184/fpdf");
        $this->helper("vendor/autoload");
        
        $i=0;
            
                $img='';
                if(isset($_POST['submit'])){
                    $name=$this->input('Name');

                    $date=$this->input('DOB');
                    $email=$this->input('Email');
                    $in=$this->input('Linkedin_Profile');
                    $scname=$this->input('schoolname');
                    // $scname = $_POST['schoolname'];
                    // var_dump($scname);
                    $scstream=$this->input('Stream');
                    $scyear=$this->input('yop');
                    $scmarks=$this->input('school-marks');
                    $colname=$this->input('collegename');
                    $colstream=$this->input('col-Stream');
                    $colyear=$this->input('col-yop');
                    $colmarks=$this->input('col-marks');
                    $proname=$this->input('proname');
                    $prodes=$this->input('pro-des');
                
                    $pryear=$this->input('yoc');

                    
                if(isset($_FILES['image'])){
                    
                    $file_name = $_FILES['image']['name'];
                    $file_size =$_FILES['image']['size'];
                    $file_tmp =$_FILES['image']['tmp_name'];
                    $file_type=$_FILES['image']['type'];

                    $extensions= array("jpeg","jpg","png","gif");
                    // echo $file_name;
                        move_uploaded_file($file_tmp,"../Public/saved_image/".$file_name);
                        $img= "../Public/saved_image/".$file_name;
                        // echo $_SESSION['userID'];
                        // echo $_SESSION['pass'];                        
                }
                                if(isset($_POST["submit"])){
                                    ob_start();
                                        $pdf = new FPDF();
                                        $pdf->AddPage();
                                        $pdf->SetFont('Arial','B',32);
                                        // $pdf->Multicell(10,10,'');
                                        $pdf->Cell(0,0,'Resume',0,2,'C',);
                                        $pdf->Image($img,160,30,30,30);
                                        $pdf->Line(0,18,220,18);
                                        $pdf->Line(0,19,220,19);

                                        $pdf->SetFont('Arial','',16);

                                        $pdf->Multicell(10,20,'');
                                        $pdf->Cell(40,10,'Name:'.$name);
                                        $pdf->Multicell(10,10,'');
                                        $pdf->Cell(40,10,'Email Id:'.$email);
                                        $pdf->Multicell(10,10,'');
                                        $pdf->Cell(40,10,'Date of Birth: '.$date);
                                        $pdf->Multicell(10,10,'');
                                        $pdf->Cell(40,10,'Linkedin: '.$in);
                                        $pdf->Multicell(10,10,'');
                                        $pdf->Line(0,70,220,70);
                                        $pdf->Line(0,71,220,71);
                                        if($scname[0]!=''){
                                        $pdf->Cell(40,20,'School details:');
                                        $pdf->Multicell(10,20,'');
                                        $pdf->Cell(45,10,'School Name',1); 
                                        $pdf->Cell(45,10,'School Stream',1);
                                        $pdf->Cell(45,10,'Passing year',1); 
                                        $pdf->Cell(45,10,'Marks',1); 

                                        $pdf->Multicell(40,10,'');

                                        for($i=0 ; $i<count($scname) ;$i++){
                                                $pdf->Cell(45,10,$scname[$i],1); 
                                                $pdf->Cell(45,10,$scstream[$i],1); 
                                                $pdf->Cell(45,10,$scyear[$i],1); 
                                                $pdf->Cell(45,10,$scmarks[$i],1); 
                                                $pdf->Multicell(40,10,'');
                                        }
                                        }  
                                        if($colname[0]!=''){
                                        $pdf->Cell(45,10,'College details:');
                                        $pdf->Multicell(10,10,'');
                                        $pdf->Cell(45,10,'College Name',1); 
                                        $pdf->Cell(45,10,'College Stream',1);
                                        $pdf->Cell(45,10,'Passing year',1); 
                                        $pdf->Cell(45,10,'Marks',1); 

                                        $pdf->Multicell(40,10,'');
                                    
                                    

                                        for($i=0 ; $i<count($colname) ;$i++){
                                                $pdf->Cell(45,10,$colname[$i],1); 
                                                $pdf->Cell(45,10,$colstream[$i],1); 
                                                $pdf->Cell(45,10,$colyear[$i],1); 
                                                $pdf->Cell(45,10,$colmarks[$i],1); 
                                                $pdf->Multicell(40,10,'');
                                        }
                                        }  
                                        if($proname[0]!=''){
                                        $pdf->Cell(50,10,'Project Details');
                                        $pdf->Multicell(10,10,'');
                                        $pdf->Cell(50,10,'Project Name',1); 
                                        $pdf->Cell(50,10,'Description',1);
                                        $pdf->Cell(50,10,'Completion year',1); 

                                        $pdf->Multicell(40,10,'');

                                        for($i=0 ; $i<count($proname) ; $i++){
                                                $pdf->Cell(50,10,$proname[$i],1); 
                                                $pdf->Cell(50,10,$prodes[$i],1); 
                                                $pdf->Cell(50,10,$pryear[$i],1); 
                                                $pdf->Multicell(40,10,'');
                                            
                                        } 
                                    }   
                                    if (!file_exists('/var/www/html/phpassignment1/MVC_resume/Public/save_pdf/'.$_SESSION['userID'].$_SESSION['pass'])) {
                                        // echo "file";
                                        mkdir('/var/www/html/phpassignment1/MVC_resume/Public/save_pdf/'.$_SESSION['userID'].$_SESSION['pass']);
                                    }
                                    $path    = '../Public/save_pdf/'.$_SESSION['userID'].$_SESSION['pass'];
                                    $files = scandir($path);
                                    $files = array_diff(scandir($path), array('.', '..'));
                                    foreach($files as $file){
                                        ++$flag;
                                    }
                                        $pdf->Output('F','../Public/save_pdf/'.$_SESSION['userID'].$_SESSION['pass'].'/resume'.$flag.'.pdf');
                                        $pdf->Output('I','resume'.$flag.'.pdf');
                                    ob_end_flush();
                                }
                        }
       


            }

        }
?>