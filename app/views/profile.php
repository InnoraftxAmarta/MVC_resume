<?php
  include "header.php";
  ?>
<body>
<?php include "nav.php";?>

<div class="fillcon">
<div class="container">
  
<?php
// header("Location:/profile/download");
$path    = '../Public/save_pdf/'.$_SESSION['userID'].$_SESSION['pass'];
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        foreach($files as $file){
            echo "Content last changed: ".date("F d Y H:i:s.", fileatime($path.'/'.$file));
            echo "<a href=$path/$file>$file</a>";
            // $this->redirect($file);
            // readfile("$path/$file");
            echo "<br>";

        }
?>

<a href="<?php echo BASEURL; ?>/profile/logout"><ul class = "my-2 my-lg-0 btn-danger btn">Log out</ul></a>


</div>
</div>

<?php
// function set_url( $url )
// {
//     echo("<script>history.replaceState({},'','$url');</script>");
// }
// set_url("http://resume.com/profile");
?>
</body>
</html>