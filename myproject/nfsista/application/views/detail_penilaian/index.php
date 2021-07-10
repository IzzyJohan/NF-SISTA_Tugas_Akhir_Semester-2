<h1>Penilaian</h1><hr>

<a href="tambah" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="margin-bottom: 10px;">tambah</a>
<div class="table-responsive">
    <table class="table">
    <thead>
        <tr>
            <th>NO</th><th>ID Dosen</th><th>ID Seminar</th><th>ID Penilaian</th><th>Nilai</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $nomor = 1;

    foreach ($list_detail_penilaian->result() as $row)
    {
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$row->dosen_id.'</td>'; 
        echo '<td>'.$row->seminar_id.'</td>';
        echo '<td>'.$row->penilaian_id.'</td>';
        echo '<td>'.$row->nilai.'</td>';

        echo '</tr>';
        $nomor++;
    }
    ?>

    </tbody>
    </table>
</div>