<h1>Tambah Penilaian</h1><hr>
<?php echo form_open('detail_penilaian/save'); ?>
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dosen_id">ID Dosen</label>
  <div class="col-md-4">
    <select id="dosen_id" name="dosen_id" class="form-control">
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
  <label class="col-md-4 control-label" for="penilaian_id">ID Penilaian</label>
  <div class="col-md-4">
    <select id="penilaian_id" name="penilaian_id" class="form-control">
    <?php 
    foreach ($list_penilaian->result() as $row)
    {
        echo '<option>'.$row->id.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai">Nilai</label>  
  <div class="col-md-4">
  <input id="nilai" name="nilai" type="text" placeholder="" class="form-control input-md" required="">
    
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
