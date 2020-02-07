<?php 

$baglanti=mysqli_connect("localhost","root","");
$vt=mysqli_select_db($baglanti,'kisi');

if(isset($_POST['kayitekle'])){
   $adi= $_POST['adi'];
   $soyadi= $_POST['soyadi'];
   $mail= $_POST['mail'];
   $password= $_POST['password'];

   $query="INSERT INTO kisibilgileri(`kisiAdi`, `kisiSoyadi`, `mail`, `sifre`) VALUES ('$adi','$soyadi','$mail','$password')";
   $query_run=mysqli_query($baglanti,$query);

   if($query_run)
   {
        echo '<script> alert ("Kayıt Başarıyla Eklendi"); </script>';
        header("Location:index.php");
   }
   else
   {
       echo '<script> alert ("Kayıt Eklenmedi...HATA"); </script>';
   }
}

?>