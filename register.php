
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Registrasi Event</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>
    
<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>EVENT</b></a>
            <small>Buat Event Yang Kamu Inginkan !</small>
        </div>
        <div class="card">
            <div class="body">

                <form id="sign_up" method="POST" enctype="multipart/form-data">
                    <div class="msg">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>

                        <div class="form-line">
                        <input type="text" placeholder="Username" name="username" class="form-control" required/>
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">sort_by_alpha</i>
                        </span>
                        <div class="form-line">
                        <input type="text" placeholder="Nama" name="nama" class="form-control" required/>
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password"  placeholder="Password" required>
                        </div>
                    </div>


                 

                 
                            <div class="form-line">
                                    <div class="form-line"> 
                                    <select readonly="readonly" name="level" class="form-control show-tick" style="visibility:hidden;" >
                                        <option value="Userweb">Userweb</option>
                    
                                    </select>
                                    </div>
                                </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">add_a_photo</i>
                        </span>
                        <div class="form-line">
                        <input type="file" placeholder="Foto" name="foto" class="form-control"required/>
                        </div>
                    </div>


                       <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                             <input type="text" placeholder="Email Address" name="email" class="form-control" required/>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>

                    <input type="submit" name="simpan" value="Simpan" class="btn btn-block btn-lg bg-pink waves-effect">  
                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.html">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-up.js"></script>
</body>

</html>

     <?php
    
    if (isset($_POST['simpan'])) {

    $username    = $_POST['username'];
    $nama  = $_POST['nama'];
    $password  = $_POST['password'];
    $level = $_POST['level'];

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi,"images/".$foto);
    $email = $_POST['email'];
    $koneksi = new mysqli("localhost","root","","fahmi");

    if ($upload)   {

        $sql = $koneksi->query("INSERT INTO tb_user (username, nama, password, level, foto,email) values('$username', '$nama', '$password', '$level', '$foto','$email') ");

    if ($sql) {
    ?>    
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href="login.php";
        </script>
          
<?php
            }
    }
}
?>
