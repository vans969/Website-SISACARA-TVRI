<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>
    <style type="text/css">
        body {
            font-family: Arial;
            color: black;
        }
    </style>
</head>

<body>
    <td class="text-left" width="20%">
        <img src="<?php echo base_url(); ?>assets/img/Logo TVRI.png" alt="logo-dkm" height="200" width="280" />
    </td>
    <center>
        <h1>LPP TVRI SIARAN NASIONAL</h1>
        <h2>SUSUNAN ACARA HARIAN</h2>
    </center>

    <?php

    if ((isset($_GET['tanggal']) && $_GET['tanggal'] != '')) {
        $tanggal = $_GET['tanggal'];
        $bulantahun = $tanggal;
    } else {
        $tanggal = date('d');
        $bulantahun = $tanggal;
    }
    ?>
    <table>
        <tr>
            <td>Tanggal Siaran</td>
            <td>:</td>
            <td><?php echo $bulantahun ?></td>
        </tr>
    </table>
    <table class="table table-bordered table-triped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">ID Acara</th>
            <th class="text-center">ID Program</th>
            <th class="text-center">Tanggal Siaran</th>
            <th class="text-center">Waktu Siaran</th>
            <th class="text-center">Nama Acara</th>
            <th class="text-center">Sifat Siaran</th>
            <th class="text-center">Durasi</th>
            <th class="text-center">Jenis Program</th>
            <th class="text-center">Simbol Usia</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($cetak_susunan as $su) : ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $su->id_acara ?></td>
                    <td class="text-center"><?php echo $su->id_program ?></td>
                    <td class="text-center"><?php echo $su->tanggal_siaran ?></td>
                    <td class="text-center"><?php echo $su->waktu_siaran ?></td>
                    <td class="text-center"><?php echo $su->nama_acara ?></td>
                    <td class="text-center"><?php echo $su->sifat_siaran ?></td>
                    <td class="text-center"><?php echo $su->durasi ?></td>
                    <td class="text-center"><?php echo $su->jenis_program ?></td>
                    <td class="text-center"><?php echo $su->simbol_usia ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p>Tanggal, <?php echo date("d M Y") ?> <br> Koordinator Program</p>
                <br>
                <br>
                <p>_____________________</p>
            </td>
        </tr>
    </table>
</body>

</html>

<script type="text/javascript">
    window.print();
</script>