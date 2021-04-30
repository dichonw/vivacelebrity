<style>
.btn-login{
    background-color: #FF4500 !important;
    color: white !important;
    
}
.ilus{
    display: block !important;
    margin-top: 70px !important;
}
.ilustrasi{
    width: 80%;
}
@media screen and (min-width: 992px){
    .p-5{
        padding: 30px 100px !important;
    }
    .ilustrasi{
        margin-top: 100px !important;
    }
    .card{
        width: 65% !important;
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
        margin-top: 0 !important;
    }

}
</style>
<body>
    <div class="container-fluid">
        <div class="row">
                <!-- <div class="card-body col-lg-6 col-12">
                    
                </div> -->
            <div class="col-md-6 ilus text-center">
                <img src="img/undraw_secure_login_pdn4.svg" class="ilustrasi mt-5 " alt="">
            </div>
            <div class="col-md-6 py-5">
                <div class="card px-3 pb-4 mx-auto ml-5" style="margin-top: 50px;">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5" style="color: #FF4500; font-weight: bold;">LOGIN</h2>
                        <form action="master/aksi_login.php" method="POST">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" required    >
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-login" name="button_login" value="Login"> 
                            </div>
                            <p class="mt-3">
                                Don't Have Any Account |
                                <a href="?menu=register" class="card-link" style="color: #FF4500 !important;"> Register</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>