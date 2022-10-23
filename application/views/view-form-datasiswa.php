<html> 
    
<head> 
    <title>Form Input Data Siswa</title> 
</head> 

<body> 
    <center> 
        <?php //echo validation_errors(); 
        ?> 
        <form action="<?= base_url('datasiswa/print'); ?>" method="post"> 
            <table> 
                <tr > 
                    <th colspan="3" style="font-size:20px;"> 
                        Form Input Data Siswa Di-Lemas
                    </th> 
                </tr>
                <tr> 
                    <td colspan="3"> 
                        <hr> 
                    </td> 
                </tr> 
                <tr align="left" > 
                    <th >Nama siswa</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="nama" id="nama"> 
                            <?= form_error('nama', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>NIS</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="nis" id="nis"> 
                            <?= form_error('nis', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Kelas</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="kelas" id="kelas"> 
                            <?= form_error('kelas', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tanggal lahir</th> 
                    <th>:</th> 
                    <td>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"> 
                            <?= form_error('tanggal_lahir', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tempat lahir</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir"> 
                            <?= form_error('tempat_lahir', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Alamat</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="alamat" id="alamat"> 
                            <?= form_error('alamat', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr>
                <tr align="left">
                <th>Jenis Kelamin</th> 
                    <th>:</th> 
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki <br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan <br>
                </tr> 
                <tr align="left"> 
                    <th>Agama</th> 
                    <th>:</th> 
                    <td> 
                        <select name="agama" id="agama"> 
                            <option value="#">Pilih Agama</option> 
                            <option value="Islam">Islam</option> 
                            <option value="Kristem">Kristen</option> 
                            <option value="Katolik">Katolik</option> 
                            <option value="Budha">Budha</option> 
                            <option value="Hindu">Hindu</option> 
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="Agnostik">Agnostik</option>
                            <option value="Lainnya">Lainnya</option> 
                        </select> 
                    </td>
                </tr> 
                <tr> 
                    <td colspan="3" align="center"><input type="submit" value="SUBMIT"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 
</body>
</html>