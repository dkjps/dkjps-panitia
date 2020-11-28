<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Pelatihan</h3>

  <form id="form-tambah-posisi" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Posisi" name="posisi" aria-describedby="sizing-addon2">
    </div>
    <div class="form-group">
    <div class="form-group col-md-6">
      <label for="inputNamaPelatihan">Nama Kelas Pelatihan</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Pelatihan">
    </div>
    <div class="form-group col-md-6">
      <label for="inputTanggalPelatihan">Tanggal Mulai</label>

      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
    </div>
  </div>

  <div class="form-group col-md-12">
    <label for="inputAddress">Deskripsi Pelatihan</label>
    <textarea class="form-control" cols="40" id="textarea" name="textarea" rows="10" style="resize:none" placeholder="Pelatihan ini tentang . . ."></textarea>
  </div>

  <div class="form-group col-md-12">
  <button type="submit" class="btn btn-primary">Tambah Pelatihan</button>
  </div>

    </div>
  </form>
</div>