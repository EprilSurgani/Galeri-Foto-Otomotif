<?php

   include 'db_.php';
      
   if(isset($_GET['idp'])){
	   $foto = mysqli_query($conn, "SELECT image FROM tb_galerifoto1 WHERE image_id = '".$_GET['idp']."' ");
	   $p = mysqli_fetch_object($foto);
	   
	   unlink('./foto/'.$p->image);
	   
	  $delete = mysqli_query($conn, "DELETE FROM tb_galerifoto1 WHERE image_id = '".$_GET['idp']."' ");
	  echo '<script>window.location="data-image.php"</script>';
   }

?>