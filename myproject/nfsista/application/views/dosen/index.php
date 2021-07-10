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
<h1>Daftar Dosen</h1><hr>

<a href="create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="margin-bottom: 10px;">tambah</a> 
<table class="table">
<thead>
    <tr>
        <th>NO</th><th>NIDN</th><th>Nama Dosen</th><th>Action</th>
    </tr>
</thead>
<tbody>

<?php
$nomor = 1;

foreach ($list_dosen->result() as $row)
{
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$row->nidn.'</td>';
    echo '<td>'.$row->nama.'</td>'; 
    echo  
    '<td>
    <a href="'.base_url().'index.php/dosen/edit/'.$row->id.'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">edit</a> 
    <a href="'.base_url().'index.php/dosen/delete/'.$row->id.'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return hapus(\'Dosen '.$row->nama.' Yakin mau dihapus ?? \')">delete</a>
    </td>';

    echo '</tr>';
    $nomor++;
}
?>

</tbody>
</table>