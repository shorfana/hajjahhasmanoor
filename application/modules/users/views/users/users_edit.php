<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit users</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id</label>
              <div class="col-sm-10">
                <input type="text" name="id" class="form-control" placeholder="" value="<?php echo $dataedit->id?>" readonly>
              </div>
            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
                              <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="<?php echo $dataedit->name?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">username</label>
                              <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" value="<?php echo $dataedit->username?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
                              <div class="col-sm-10">
                                <input type="text" name="password" class="form-control" value="<?php echo $dataedit->password?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                              <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" value="<?php echo $dataedit->email?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">phone</label>
                              <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control" value="<?php echo $dataedit->phone?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">provinsi</label>
                              <div class="col-sm-10">
                                <input type="text" name="provinsi" class="form-control" value="<?php echo $dataedit->provinsi?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">kota</label>
                              <div class="col-sm-10">
                                <input type="text" name="kota" class="form-control" value="<?php echo $dataedit->kota?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">address</label>
                              <div class="col-sm-10">
                                <input type="text" name="address" class="form-control" value="<?php echo $dataedit->address?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">usertype</label>
                              <div class="col-sm-10">
                                <input type="text" name="usertype" class="form-control" value="<?php echo $dataedit->usertype?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">active</label>
                              <div class="col-sm-10">
                                <input type="text" name="active" class="form-control" value="<?php echo $dataedit->active?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">photo</label>
                              <div class="col-sm-10">
                                <input type="text" name="photo" class="form-control" value="<?php echo $dataedit->photo?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">photo_type</label>
                              <div class="col-sm-10">
                                <input type="text" name="photo_type" class="form-control" value="<?php echo $dataedit->photo_type?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">ip_address</label>
                              <div class="col-sm-10">
                                <input type="text" name="ip_address" class="form-control" value="<?php echo $dataedit->ip_address?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">salt</label>
                              <div class="col-sm-10">
                                <input type="text" name="salt" class="form-control" value="<?php echo $dataedit->salt?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">activation_code</label>
                              <div class="col-sm-10">
                                <input type="text" name="activation_code" class="form-control" value="<?php echo $dataedit->activation_code?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">forgotten_password_code</label>
                              <div class="col-sm-10">
                                <input type="text" name="forgotten_password_code" class="form-control" value="<?php echo $dataedit->forgotten_password_code?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">forgotten_password_time</label>
                              <div class="col-sm-10">
                                <input type="text" name="forgotten_password_time" class="form-control" value="<?php echo $dataedit->forgotten_password_time?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">remember_code</label>
                              <div class="col-sm-10">
                                <input type="text" name="remember_code" class="form-control" value="<?php echo $dataedit->remember_code?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">last_login</label>
                              <div class="col-sm-10">
                                <input type="text" name="last_login" class="form-control" value="<?php echo $dataedit->last_login?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">created_on</label>
                              <div class="col-sm-10">
                                <input type="text" name="created_on" class="form-control" value="<?php echo $dataedit->created_on?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">modified</label>
                              <div class="col-sm-10">
                                <input type="text" name="modified" class="form-control" value="<?php echo $dataedit->modified?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">verifikasi</label>
                              <div class="col-sm-10">
                                <input type="text" name="verifikasi" class="form-control" value="<?php echo $dataedit->verifikasi?>">
                              </div>
                            </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>
