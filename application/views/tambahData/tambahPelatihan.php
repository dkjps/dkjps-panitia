<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-body">
  <form>
  <div class="form-row">
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

</form>

  </div>
</div>
