<?php if($this->getSession('userID')): 
  include "header.php";

  ?>
<body>
<?php include "nav.php";?>
<div class="fillcon">
<div class="container ">
<div class="justify-content-md-center">
  <h2>
    HELLO AND WELCOME TO RESUME BUILDER'S HOME PAGE 
  </h2>
  <p>
    &nbsp; We all know that making resume is easy but making a good and proper resume is 
    very difficult and there we came with an idea of making this app so that people 
    can just login and fill there details and we will make the pdf for them and save 
    time for them and this is absolutely free.
    <br><br>
    Thanks for Using this app.
  </p>


<a href="<?php echo BASEURL; ?>/profile/formfill"><ul class = "my-2 my-lg-0 btn btn-primary">Start building resume</ul></a>

  <a href="<?php echo BASEURL; ?>/profile/logout"><ul class = "my-2 my-lg-0 btn-danger btn">Log out</ul></a>
  



</div>
</div>
</div>

</body>
</html>
<?php
endif;
?>