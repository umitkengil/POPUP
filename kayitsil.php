<?php 

$baglanti=mysqli_connect("localhost","root","");
$vt=mysqli_select_db($baglanti,'kisi');

if(isset($_POST['kayitsil'])){

    $id = $_POST['deleteID'];
    $query = "DELETE FROM kisibilgileri WHERE id='$id'";
    $query_run = mysqli_query($baglanti,$query);


    if($query_run)
   {
        echo '<script> alert ("Kayıt Başarıyla Silindi"); </script>';
        header("Location:index.php");
   }
   else
   {
       echo '<script> alert ("Kayıt Silinemedi...HATA"); </script>';
   }

}


?>