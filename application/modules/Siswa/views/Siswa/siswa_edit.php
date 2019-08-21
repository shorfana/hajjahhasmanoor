<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit siswa</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">nik_siswa</label>
              <div class="col-sm-10">
                <input type="text" name="nik_siswa" class="form-control" placeholder="" value="<?php echo $dataedit->nik_siswa?>" readonly>
              </div>
            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">id_ortu</label>
                              <div class="col-sm-10">
                                <input type="text" name="id_ortu" class="form-control" value="<?php echo $dataedit->id_ortu?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">no_induk</label>
                              <div class="col-sm-10">
                                <input type="text" name="no_induk" class="form-control" value="<?php echo $dataedit->no_induk?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">nama_siswa</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama_siswa" class="form-control" value="<?php echo $dataedit->nama_siswa?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">jenis_kelamin</label>
                              <div class="col-sm-10">
                                <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $dataedit->jenis_kelamin?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">tempat_lahir</label>
                              <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $dataedit->tempat_lahir?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">tanggal_lahir</label>
                              <div class="col-sm-10">
                                <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $dataedit->tanggal_lahir?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">alamat</label>
                              <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" value="<?php echo $dataedit->alamat?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">tahun_masuk</label>
                              <div class="col-sm-10">
                                <input type="text" name="tahun_masuk" class="form-control" value="<?php echo $dataedit->tahun_masuk?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">tingkat</label>
                              <div class="col-sm-10">
                                <input type="text" name="tingkat" class="form-control" value="<?php echo $dataedit->tingkat?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">status_tempat_tinggal</label>
                              <div class="col-sm-10">
                                <input type="text" name="status_tempat_tinggal" class="form-control" value="<?php echo $dataedit->status_tempat_tinggal?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">warga_negara</label>
                              <div class="col-sm-10">
                                <input type="text" name="warga_negara" class="form-control" value="<?php echo $dataedit->warga_negara?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">agama</label>
                              <div class="col-sm-10">
                                <input type="text" name="agama" class="form-control" value="<?php echo $dataedit->agama?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">nik_ayah</label>
                              <div class="col-sm-10">
                                <input type="text" name="nik_ayah" class="form-control" value="<?php echo $dataedit->nik_ayah?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">nik_ibu</label>
                              <div class="col-sm-10">
                                <input type="text" name="nik_ibu" class="form-control" value="<?php echo $dataedit->nik_ibu?>">
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
