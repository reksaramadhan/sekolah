<?php  
include 'koneksi.php';
$data_edit = mysqli_query ($conn, "SELECT * FROM guru WHERE id_guru = '".$_GET['id_guru']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tabel Kelas</title>
  </head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="../asset/css/font-awesome.css" rel="stylesheet">
    <link href="../asset/css/font-awesome-ie7.css" rel="stylesheet">
    <link href="../asset/css/font-awesome-ie7.min.css" rel="stylesheet">
    <link href="../asset/css/main.css" rel="stylesheet">
    <link href="../asset/css/util.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../asset/style.css" rel="stylesheet">
  <body>
    <div class="container">
        <div id="main-content" class="col-lg-12" style="padding-left: 300px;">
    <h2 style="text-align: left;">Update Guru</h2>
  <div class="bootstrap-wrap">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form class="md-form" action="aksi-update-guru.php" method="POST" enctype="multipart/form-data">
  <div class="form-group ">
      <input class="form-control" type="hidden" name="id_guru" value="<?php echo $result['id_guru']?>">
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nis">
      Kode Guru
      </label>
      <input class="form-control" name="kode_guru" value="<?php echo $result['kode_guru']?>">
     </div>
     <div class="form-group ">
      <label class="control-label " for="nama">
      Nama Guru
      </label>
      <input class="form-control" type="text" name="nm_guru" value="<?php echo $result['nm_guru']?>">
     </div>
     <div class="form-group ">
      <label class="control-label " for="alamat">
       Alamat
      </label>
      <input class="form-control" cols="40" name="alamat" value="<?php echo $result['alamat']?>" rows="10">
     </div>
  <div class="form-group">
      <div>
       <button class="btn btn-primary " type="submit" name="edit" value="Simpan">
        Submit
       </button>
      </div>
     </div>
</form>
  <script src="../asset/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../asset/js/bootstrap.min.js"></script>
  </body>
</html>