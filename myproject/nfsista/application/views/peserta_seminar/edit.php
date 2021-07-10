<h1>Edit Data Peserta</h1>

<?php echo form_open('peserta_seminar/save'); ?>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nim">NIM</label>  
  <div class="col-md-4">
  <input id="nim" name="nim" type="text" placeholder="" class="form-control input-md" required="" 
  value = "<?=$objpeserta_seminar->nim?>">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Peserta</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md" required=""
  value = "<?=$objpeserta_seminar->nama?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="seminar_id">ID Seminar</label>
  <div class="col-md-4">
    <select id="seminar_id" name="seminar_id" class="form-control">
    <?php 
    echo '<option selected="selected" display hidden >'.$objpeserta_seminar->seminar_id.'</option>';
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
    <button id="submit" name="submit" class="btn btn-warning">Update</button>
  </div>
</div>
<input type="hidden" name="idedit" value="<?=$objpeserta_seminar->id?>"/>


<?php echo form_close() ?>
