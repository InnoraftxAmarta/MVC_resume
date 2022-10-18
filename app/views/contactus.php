<?php   include "header.php";
?>
<body>
<?php include "nav.php";?>

<div class="fillcon">  

<div class="container">
<h2>Contact us</h2>
<p>Email: amartarocks3@gmail.com</p>
<a href="<?php echo BASEURL; ?>/profile/logout"><ul class = "my-2 my-lg-0 btn-danger btn">Log out</ul></a>
</div>
</div>
<?php
function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}
set_url("http://resume.com/Contactus");
?>
</body>
</html>