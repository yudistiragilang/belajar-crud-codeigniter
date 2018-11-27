
<section>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Aksi</th>
        </tr>
        <?php // foreach($parameter yang diambil as $mau dikasi variabel apa){ ?>
        <?php 
            $no=1;
            foreach ($user as $u ) {?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php echo $u->pekerjaan ?></td>
            <td>
                <?php echo anchor('web/edit/'.$u->id,'Edit'); //anchor adalah fungsi hyperlink pada CodeIgniter ?>
                <?php echo anchor('web/hapus/'.$u->id,'Hapus') ;?>
            </td>
        </tr>
        <?php } ?>
    </table>
</section>