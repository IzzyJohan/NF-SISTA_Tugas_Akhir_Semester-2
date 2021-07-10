<script>
function hapus(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>

<h1>Peserta Seminar</h1><hr>

<a href="tambah" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="margin-bottom: 10px;">tambah</a>
<div class="table-responsive">
    <table class="table">
    <thead>
        <tr>
            <th>NO</th><th>NIM</th><th>Nama Peserta</th><th>ID Seminar</th><th>Kehadiran</th><th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $nomor = 1;

    foreach ($list_peserta_seminar->result() as $row)
    {
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$row->nim.'</td>'; 
        echo '<td>'.$row->nama.'</td>';
        echo '<td>'.$row->seminar_id.'</td>';
        echo '<td>'.$row->kehadiran.'</td>';
        echo '<td>
        <a href="'.base_url().'index.php/peserta_seminar/edit/'.$row->id.'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">edit</a> 
        <a href="'.base_url().'index.php/peserta_seminar/delete/'.$row->id.'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return hapus(\'Peserta '.$row->nama.' Yakin mau dihapus ?? \')">delete</a>
        </td>';
        echo '</tr>';
        $nomor++;
    }
    ?>

    </tbody>
    </table>
</div>