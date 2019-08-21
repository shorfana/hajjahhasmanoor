<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit ortu</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id_ortu</label>
              <div class="col-sm-10">
                <input type="text" name="id_ortu" class="form-control" placeholder="" value="<?php echo $dataedit->id_ortu?>" readonly>
              </div>
            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">nik_ayah</label>
                              <div class="col-sm-10">
                                <input type="text" name="nik_ayah" class="form-control" value="<?php echo $dataedit->nik_ayah?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">nama_ayah</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama_ayah" class="form-control" value="<?php echo $dataedit->nama_ayah?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">nik_ibu</label>
                              <div class="col-sm-10">
                                <input type="text" name="nik_ibu" class="form-control" value="<?php echo $dataedit->nik_ibu?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">nama_ibu</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama_ibu" class="form-control" value="<?php echo $dataedit->nama_ibu?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">jmlh_penghasilan_ayah</label>
                              <div class="col-sm-10">
                                <input type="text" name="jmlh_penghasilan_ayah" class="form-control" value="<?php echo $dataedit->jmlh_penghasilan_ayah?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">jmlh_penghasilan_ibu</label>
                              <div class="col-sm-10">
                                <input type="text" name="jmlh_penghasilan_ibu" class="form-control" value="<?php echo $dataedit->jmlh_penghasilan_ibu?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">pekerjaan_ayah</label>
                              <div class="col-sm-10">
                                <input type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $dataedit->pekerjaan_ayah?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">pekerjaan_ibu</label>
                              <div class="col-sm-10">
                                <input type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $dataedit->pekerjaan_ibu?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">agama_ayah</label>
                              <div class="col-sm-10">
                                <input type="text" name="agama_ayah" class="form-control" value="<?php echo $dataedit->agama_ayah?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">agama_ibu</label>
                              <div class="col-sm-10">
                                <input type="text" name="agama_ibu" class="form-control" value="<?php echo $dataedit->agama_ibu?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">ttl_ayah</label>
                              <div class="col-sm-10">
                                <input type="text" name="ttl_ayah" class="form-control" value="<?php echo $dataedit->ttl_ayah?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">ttl_ibu</label>
                              <div class="col-sm-10">
                                <input type="text" name="ttl_ibu" class="form-control" value="<?php echo $dataedit->ttl_ibu?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">pendidikan_terakhir_ayah</label>
                              <div class="col-sm-10">
                                <input type="text" name="pendidikan_terakhir_ayah" class="form-control" value="<?php echo $dataedit->pendidikan_terakhir_ayah?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">pendidikan_terakhir_ibu</label>
                              <div class="col-sm-10">
                                <input type="text" name="pendidikan_terakhir_ibu" class="form-control" value="<?php echo $dataedit->pendidikan_terakhir_ibu?>">
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
