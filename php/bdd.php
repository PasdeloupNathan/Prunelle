<?php
   include 'meta.php';

   template_meta('BDD');

   if($_SESSION["roles"] == 'admin'){
      template_headerAdmin();
   
  }elseif($_SESSION["roles"] == 'notadmin'){
  
      template_headerNotAdmin();
  }elseif($_SESSION == False){
      header("Location: connect.php");
  }

?>


<?php template_footer() ?>
