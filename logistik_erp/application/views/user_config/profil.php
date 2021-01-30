<div style="display: block;" id="content" class="animate-bottom">
          
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Perbarui Profil Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small>Label bidang yang ditandai dengan * adalah bidang masukan yang harus diisi.</small></p>
                        <form method="POST" action="https://localhost/Winsales/user/update_profile/1" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="WGdAJofaTL6NJNuzlyv6rGMLzlzLRSkFUJs7XSxZ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>UserName * </label>
                                    <input type="text" name="name" value="admin" required="" class="form-control">
                                                                    </div>
                                <div class="form-group">
                                    <label>E-mail * </label>
                                    <input type="email" name="email" value="admin@gmail.com" required="" class="form-control">
                                                                    </div>
                                <div class="form-group">
                                    <label>Nomor Telepon * </label>
                                    <input type="text" name="phone" value="12112" required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama Perusahaan </label>
                                    <input type="text" name="company_name" value="lioncoders" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Ganti Kata Sandi</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="https://localhost/Winsales/user/changepass/1" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="WGdAJofaTL6NJNuzlyv6rGMLzlzLRSkFUJs7XSxZ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kata Sandi Saat ini * </label>
                                    <input type="password" name="current_pass" required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi Baru * </label>
                                    <input type="password" name="new_pass" required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Sandi * </label>
                                    <input type="password" name="confirm_pass" id="confirm_pass" required="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="registrationFormAlert" id="divCheckPasswordMatch">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("ul#setting").siblings('a').attr('aria-expanded','true');
    $("ul#setting").addClass("show");
    $("ul#setting #user-menu").addClass("active");

    

    $('#confirm_pass').on('input', function(){

        if($('input[name="new_pass"]').val() != $('input[name="confirm_pass"]').val())
            $("#divCheckPasswordMatch").html("Password doesn't match!");
        else
            $("#divCheckPasswordMatch").html("Password matches!");
         
    });
</script>
      </div>