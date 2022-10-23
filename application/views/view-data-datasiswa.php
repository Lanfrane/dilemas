<html> 
    
<head>
    <title>Data Siswa</title> 
</head> 
<body> 
    <center> 
        <table> 
            <tr>
                <th colspan="3" style="font-size:20px;"> 
                    Data Siswa Di-Lemas 
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td>
            </tr>
            <tr align="left"> 
                <th>Nama Siswa</th> 
                <th>:</th> 
                <td> 
                    <?= $nama; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>NIS</th> 
                <th>:</th> 
                <td> 
                    <?= $nis; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>Kelas</th> 
                <th>:</th> 
                <td> 
                    <?= $kelas; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>Tanggal Lahir</th> 
                <th>:</th> 
                <td> 
                    <?= $tanggal_lahir; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>Tempat Lahir</th> 
                <th>:</th> 
                <td> 
                    <?= $tempat_lahir; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>Alamat</th> 
                <th>:</th> 
                <td> 
                    <?= $alamat; ?> 
                </td> 
            </tr> 
            <tr align="left"> 
                <th>Jenis Kelamin</th> 
                <th>:</th> 
                <td> 
                    <?= $jenis_kelamin; ?> 
                </td> 
            </tr>
            <tr align="left"> 
                <th>Agama</th> 
                <th>:</th> 
                <td> 
                    <?= $agama; ?> 
                </td> 
            </tr>
            <tr> 
                <td colspan="3" align="center" >
                    <a  style="color:black; text-decoration:none; font-size:15px; border-style:solid; border-width:medium; border-radius:5px; padding:3px;"  
                    href="<?= base_url('datasiswa'); ?>">Kembali</a> 
                </td>
            </tr> 
        </table> 
    </center> 
</body> 
</html>