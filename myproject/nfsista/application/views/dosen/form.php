<h1>Form Dosen</h1><hr>
<?php echo form_open('dosen/save'); ?>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nidn">NIDN</label>  
  <div class="col-md-4">
  <input id="nidn" name="nidn" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap Dosen</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>



<?php echo form_close() ?>
