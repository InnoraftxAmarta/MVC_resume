<?php   include "header.php";
?>
<body>
 
<?php include "nav.php";?>

<div class="fillcon"> 
<div class="container">
<h2> About Us</h2>

<h2> WE MAKE LIFE SIMPLE </h2>

<p>This resume builder is made by Amarta Sarkar(Software trainee)@innoraft , <br>
We try to make your life simple by using a form to take input and make a resume <br>
for you so that you don't have to waste time for making resume .
</p>
<a href="<?php echo BASEURL; ?>/profile/logout"><ul class = "my-2 my-lg-0 btn-danger btn">Log out</ul></a>

</div>
</div>
<?php
function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}
set_url("http://resume.com/Aboutus");
?>
</body>
</html>