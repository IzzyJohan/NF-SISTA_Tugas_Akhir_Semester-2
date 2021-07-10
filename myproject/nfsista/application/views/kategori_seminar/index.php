<h1>Kategori Seminar</h1><hr>

<table class="table">
<thead>
    <tr>
        <th>NO</th><th>Nama Kategori</th>
    </tr>
</thead>
<tbody>

<?php
$nomor = 1;

foreach ($list_kategori_seminar->result() as $row)
{
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$row->nama.'</td>'; 
    echo '</tr>';
    $nomor++;
}
?>

</tbody>
</table>