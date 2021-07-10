<h1>Tambah Peserta</h1><hr>
<?php echo form_open('peserta_seminar/save'); ?>
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nim">NIM</label>  
  <div class="col-md-4">
  <input id="nim" name="nim" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="seminar_id">ID Seminar</label>
  <div class="col-md-4">
    <select id="seminar_id" name="seminar_id" class="form-control">
    <?php 
    foreach ($list_seminar->result() as $row)
    {
        echo '<option>'.$row->id.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kehadiran">Kehadiran</label>
  <div class="col-md-4">
    <select id="kehadiran" name="kehadiran" class="form-control">
        <option>1</option>
        <option>0</option>
    </select>
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
