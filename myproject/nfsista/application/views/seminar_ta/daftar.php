<h1>Daftar Seminar</h1><hr>

<?php echo form_open('seminar_ta/save'); ?>
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="semester">Semester</label>  
  <div class="col-md-4">
  <input id="semester" name="semester" type="number" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tanggal">Tanggal</label>  
  <div class="col-md-4">
  <input id="tanggal" name="tanggal" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jam">Jam</label>  
  <div class="col-md-4">
  <input id="jam" name="jam" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori_seminar_id">ID Katergori Seminar</label>
  <div class="col-md-4">
    <select id="kategori_seminar_id" name="kategori_seminar_id" class="form-control">
    <?php 
    foreach ($list_kategori_seminar->result() as $row)
    {
        echo '<option>'.$row->id.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nim">NIM</label>  
  <div class="col-md-4">
  <input id="nim" name="nim" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama_mahasiswa">Nama Mahasiswa</label>  
  <div class="col-md-4">
  <input id="nama_mahasiswa" name="nama_mahasiswa" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Judul</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="judul" name="judul" required=""></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pembimbing_id">Pembimbing</label>
  <div class="col-md-4">
    <select id="pembimbing_id" name="pembimbing_id" class="form-control">
    <?php 
    foreach ($list_dosen->result() as $row)
    {
      echo '<option>'.$row->id.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="penguji1_id">Penguji 1</label>
  <div class="col-md-4">
    <select id="penguji1_id" name="penguji1_id" class="form-control">
    <?php 
    foreach ($list_dosen->result() as $row)
    {
      echo '<option>'.$row->id.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="penguji2_id">Penguji 2</label>
  <div class="col-md-4">
    <select id="penguji2_id" name="penguji2_id" class="form-control">
    <?php 
    foreach ($list_dosen->result() as $row)
    {
      echo '<option>'.$row->id.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_pembimbing">Nilai Pembimbing</label>  
  <div class="col-md-4">
  <input id="nilai_pembimbing" name="nilai_pembimbing" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_penguji1">Nilai Penguji 1</label>  
  <div class="col-md-4">
  <input id="nilai_penguji1" name="nilai_penguji1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_penguji2">Nilai Penguji 2</label>  
  <div class="col-md-4">
  <input id="nilai_penguji2" name="nilai_penguji2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="lokasi">Lokasi</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="lokasi" name="lokasi" required=""></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_akhir">Nilai Akhir</label>  
  <div class="col-md-4">
  <input id="nilai_akhir" name="nilai_akhir" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
<?php echo form_close() ?>
