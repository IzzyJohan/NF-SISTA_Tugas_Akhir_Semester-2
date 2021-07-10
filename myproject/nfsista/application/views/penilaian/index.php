<h1>Tipe Penilaian</h1><hr>

<table class="table">
<thead>
    <tr>
        <th>NO</th><th>Nama</th><th>Keterangan</th>
    </tr>
</thead>
<tbody>

<?php
$nomor = 1;

foreach ($list_penilaian->result() as $row)
{
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$row->nama.'</td>';
    echo '<td>'.$row->keterangan.'</td>'; 
    echo '</tr>';
    $nomor++;
}
?>

</tbody>
</table>