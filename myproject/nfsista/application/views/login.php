<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo base_url()?>public/css/loginpage.css" rel="stylesheet">

    <title>SISTA-NF | Login</title>

  </head>
  <body>
    <div class="container-fluid">
        <div class="row row-pin-title">
            <div class="col-md col-pin-title">  
                <div class="card card-pin-title">
                    <div class="card-body">
                        <h2>SISTA-NF</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-pin-formlogin">
            <div class="col-md col-pin-formlogin">         
                <div class="card card-pin-formlogin">
                    <div class="card-body">
                        <div class="login-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="login-u-pw">
                            <label for="uname">Username</label><br>
                            <input type="text" placeholder="Masukan Username" name="uname" id="uname"><br>
                            <label for="pwd">Password</label><br>
                            <input type="password" placeholder="Masukan Password" name="pwd" id="pwd">
                        </div>
                        <div class="login-button">
                            <a href="#" onclick="check()" class="badge badge-success">Login</a>
                        </div>
                        <div class="login-checkbox">
                            <p><input type="checkbox" name="remember"><label>Ingat saya</label></p>
                        </div>                                                                  
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Selamat Datang!</h5>
                                    </div>
                                    <div class="modal-body">
                                        Tekan Lanjutkan untuk meneruskan ke halaman admin
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?php echo base_url('index.php/dashboard/')?>" class="btn btn-primary">Lanjutkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="example2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Selamat Datang <span id="user"></span>!</h5>
                                    </div>
                                    <div class="modal-body">
                                        Tekan Lanjutkan untuk meneruskan
                                    </div>
                                    <div class="modal-footer">
                                    <a href="<?php echo base_url('index.php/dashboard/')?>" class="btn btn-primary">Lanjutkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="example3Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Error!</h5>
                                    </div>
                                    <div class="modal-body">
                                        Username atau password anda salah
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Coba lagi</button>
                                    </div>
                                </div>
                            </div>
                        </div>                                                              
                    </div>
                </div>                       
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bc39465ab8.js" crossorigin="anonymous"></script>
    <script>
    function check() {
    if(uname.value == "admin" && pwd.value == "admin") {
        $('#exampleModal').modal('show');
        
    }

    else if(uname.value == "diego" && pwd.value == "diego") {
        $('#example2Modal').modal('show');
        var x = document.getElementById("uname").value;
        var y = x.charAt(0).toUpperCase() + x.slice(1)
        document.getElementById("user").innerHTML = y;
    }

    else {
        $('#example3Modal').modal('show');
    }
    }
    </script>
    
  </body>
</html>