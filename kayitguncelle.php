<?php 

$baglanti=mysqli_connect("localhost","root","");
$vt=mysqli_select_db($baglanti,'kisi');

if(isset($_POST['kayitguncelle']))
{
    $id=$_POST['updateID'];
    $adi= $_POST['adi'];
    $soyadi= $_POST['soyadi'];
    $mail= $_POST['mail'];
    $password= $_POST['password'];

    $query="UPDATE kisibilgileri SET kisiAdi='$adi', kisiSoyadi='$soyadi' , mail='$mail', sifre='$password' WHERE ID='$id' ";
    $query_run=mysqli_query($baglanti,$query);
 
    if($query_run)
    {
         echo '<script> alert ("Kayıt Başarıyla Güncellendi"); </script>';
         header("Location:index.php");
    }
    else
    {
        echo '<script> alert ("Kayıt Güncellenemedi...HATA"); </script>';
    }
 }

?>