<style>
.btn-login{
    background-color: #FF4500 !important;
    color: white !important;
    
}
.ilus{
    display: block !important;
    margin-top: 30px !important;
}

.ilustrasi{

    width: 80% !important;
}

@media screen and (min-width: 992px){
    .p-5{
        padding: 30px 100px !important;
    }
    .ilustrasi{
        margin-top: 100px !important;
    }
}
@media screen and (min-width: 768px){
    .p-5{
        padding: 20px !important;
    }
    .ilus{
        margin-top: 100px;
    }
    .ilustrasi{
        margin-top: 100px !important;
    }
    .ilus{
        display: none;
    }
}

@media screen and (max-width: 768px){
    
    .ilus{
        display: none;
    }
}


@media screen and (max-width: 552px){
    .p-5{
        padding: 20px !important;
    }
    .card{
        margin-top: 0 !important;
    }
    .ilustrasi{
        margin-top: 100px !important;
    }

}
</style>
<body>
    <div class="container-fluid">
        <div class="row">
                <!-- <div class="card-body col-lg-6 col-12">
                    
                </div> -->
            <div class="col-md-6 ilus text-center ">
                <img src="img/undraw_Add_user_re_5oib.svg" class="ilustrasi mt-5 mx-auto" alt="">
            </div>
            <div class="col-md-6 pt-2 pb-5">
                <div class="card px-3 pb-4 mx-auto ml-5" style="margin-top: 50px;">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4 mt-3" style="color: #FF4500; font-weight: bold;">REGISTER</h2>
                        <form action="master/aksi_register.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">No Handphone</label>
                                        <input type="number" name="no_handphone" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="button_register" value="Register" class="form-control btn btn-login">
                                    </div>
                                    <p class="mt-3">
                                        Have Any Account |
                                        <a href="?menu=login" class="card-link" style="color: #FF4500 !important;"> Login</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>