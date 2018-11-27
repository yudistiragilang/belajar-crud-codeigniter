
<section>

    <center><h1>Entry Data</h1></center>
    <form action="<?php echo base_url(). 'index.php/web/aksi_input'; ?>" method="post">
        <table border="1">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td><input type="submit" value="tambah"></td>
            </tr>
        </table>
    </form>
</section>