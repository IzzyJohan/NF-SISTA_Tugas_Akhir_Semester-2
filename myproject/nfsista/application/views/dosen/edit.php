<h1>Edit Data Dosen</h1><hr>
<?php echo form_open('dosen/save'); ?>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nidn">NIDN</label>  
  <div class="col-md-4">
  <input id="nidn" name="nidn" type="text" 
  value = "<?=$objdosen->nidn?>"
  placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap Dosen</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" 
  value = "<?=$objdosen->nama?>"
  placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-warning">Update</button>
  </div>
</div>
<input type="hidden" name="idedit" value="<?=$objdosen->id?>"/>


<?php echo form_close() ?>
