<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POPUP</title>
    
    <link rel="stylesheet" href="datatables\css\dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
   
</head>
<body>

    <script type="text/javascript" src="jQuery\jquery-3.3.1.js"></script>
    <script type="text/javascript" src="bootstrap\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="datatables\js\jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="datatables\js\dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "pagingType":"full_numbers",
                "lengthMenu": [
                [5,10,15],
                [5,10,15,"All"]
            ],
            responsive:true,
            language:{

                info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
                search:"Arama",
                searchPlaceholder:"Kayıt Ara",
                infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",

                paginate: {
                    first: "İlk",
                    previous: "Önceki",
                    next: "Sonraki",
                    last: "Son"
                },
            }
            
            });

        } );


    </script>


    <!--EDIT-->   
    <script>
        $(document).ready(function(){
            $('.editbtn').on('click',function(){
                $('#editmodal').modal('show');
                $satir=$(this).closest('tr');
                var data= $satir.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(data);
                $('#updateID').val(data[0]);
                $('#kisiAdi').val(data[1]);
                $('#kisiSoyadi').val(data[2]);
                $('#mail').val(data[3]);
                $('#password').val(data[4]);
            });
        });
    </script>

    <!--SİL-->
    <script>
        $(document).ready(function(){
            $('.deletebtn').on('click',function(){
                $('#deletemodal').modal('show');
                $satir=$(this).closest('tr');
                var data= $satir.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(data);
                $('#deleteID').val(data[0]);

            });
        });
    </script>

<!-- Modal -->
<div class="modal fade" id="yenikayitekleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yeni Kayıt Ekle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="yenikayit.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label>Adı</label>
                <input type="text" name="adi" class="form-control" placeholder="Adınız">              
            </div>
            <div class="form-group">
                <label>Soyadı</label>
                <input type="text" name="soyadi" class="form-control" placeholder="Soyadınız">               
            </div>
            <div class="form-group">
                <label>Email Adresi</label>
                <input type="email" name="mail" class="form-control"  placeholder="Email Adresi">
            </div>
            <div class="form-group">
                <label>Şifre</label>
                <input type="password" name="password" class="form-control" placeholder="Şifre">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
            <button type="submit" name="kayitekle" class="btn btn-primary">Kaydet</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- EDIT -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Kayıt Düzenle</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <form action="kayitguncelle.php" method="POST">

        <div class="modal-body">

            <input type="hidden" name="updateID" id="updateID">

                <div class="form-group">

                    <label>Adı</label>
                    <input type="text" name="adi" id="kisiAdi" class="form-control" placeholder="Adınız">                
                </div>

                <div class="form-group">
                    <label>Soyadı</label>
                    <input type="text" name="soyadi" id="kisiSoyadi" class="form-control" placeholder="Soyadınız">             
                </div>

                <div class="form-group">
                    <label>Email Adresi</label>
                    <input type="email" name="mail" id="mail" class="form-control"  placeholder="Email Adresi">
                </div>

                <div class="form-group">
                    <label>Şifre</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Şifre">
                </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
            <button type="submit" name="kayitguncelle" class="btn btn-primary">Güncelle</button>
        </div>

      </form>

    </div>

  </div>

</div>
<!-- EDIT SONU-->

<!-- DELETE -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Kayıt SİL</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <form action="kayitsil.php" method="POST">

        <div class="modal-body">
            
            <input type="hidden" name="deleteID" id="deleteID">

            <h6>Kayıt Sil</h6>   

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Silme</button>
            <button type="submit" name="kayitsil" class="btn btn-primary">Sil</button>
        </div>

      </form>

    </div>

  </div>

</div>
<!-- DELETE SONU-->

<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h3>bootstrap modal ile pop up yapma</h3>
        </div>
        <div class="card">
            <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yenikayitekleModal">Yeni Kayıt Ekle</button>
        </div>
        </div>
        <div class="card">
            <div class="card-body">


    <?php 
        
        $baglanti=mysqli_connect("localhost","root","");
        $vt=mysqli_select_db($baglanti,'kisi');

        $query="SELECT * FROM kisibilgileri";
        $query_run=mysqli_query($baglanti,$query);
    ?>

                <table id="dataTable" class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Kayıt Numarası</th>
                        <th scope="col">ADI</th>
                        <th scope="col">SOYADI</th>
                        <th scope="col">MAIL</th>
                        <th scope="col">ŞİFRE</th>
                        <th scope="col">DÜZENLE</th>
                        <th scope="col">SİL</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    if($query_run)
    {
        foreach($query_run as $row)
        {
    ?>
                        <tr>
                            <td><?php echo $row['ID'] ?></td>
                            <td><?php echo $row['kisiAdi'] ?></td>
                            <td><?php echo $row['kisiSoyadi'] ?></td>
                            <td><?php echo $row['mail'] ?></td>
                            <td><?php echo $row['sifre'] ?></td>
                            <td>
                                <button type="button" class="btn btn-success editbtn">DÜZENLE</button>                              
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger deletebtn">SİL</button>                              
                            </td>
                            
                        </tr>
                        
                    </tbody>
    <?php        
        }
    }
    else
    {
        echo "Kayıt bulunamadı";
    }
    ?>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>