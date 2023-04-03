<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_web; ?></title>
    <base href="<?php echo base_url();?>"/>
  	<link rel="icon" type="image/png" href="assets/images/favicon.png"/>
    <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    </style>
  </head>
  <body onload="window.print();">
    <?php $this->load->view('kop_lap'); ?>
    <br>
    <h4 align="center" style="margin-top:0px;"><u>BUKTI PENDAFTARAN</u></h4>
    <br>

    <table width="100%" border="0">
      <tr>
        <td width="200">NO. PENDAFTARAN</td>
        <td width="1">:</td>
        <td><?php echo $user->no_pendaftaran; ?></td>
      </tr>
      <tr>
        <td>TANGGAL PENDAFTARAN </td>
        <td>:</td>
        <td><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($user->tgl_siswa))); ?></td>
      </tr>
      <tr>
        <td>TANGGAL CETAK </td>
        <td>:</td>
        <td><?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $user->nik; ?></td>
      </tr>
      <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_lengkap); ?></td>
      </tr>
      <tr>
        <td>JENIS KELAMIN</td>
        <td>:</td>
        <td><?php echo $user->jk; ?></td>
      </tr>
      <tr>
        <td>TEMPAT, TANGGAL LAHIR</td>
        <td>:</td>
        <td><?php echo "$user->tempat_lahir, ".$this->Model_data->tgl_id($user->tgl_lahir); ?></td>
      </tr>
      <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td><?php echo $user->agama; ?></td>
      </tr>
      <tr>
      <tr>
        <td>Asal TK/PAUD</td>
        <td>:</td>
        <td><?php echo $user->nama_sekolah; ?></td>
      </tr>
      <tr>  
        <td>NAMA ORANG TUA /WALI</td>
        <td>:</td>
        <td></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">AYAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ayah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">IBU</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ibu); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">WALI</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_wali); ?></td>
      </tr>
      <tr>
        <td>NO. HANDPHONE (HP)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_siswa; ?></td>
      </tr>
    <br>
</table>
    <div style="float:right;">
      Rangkasbitung, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
			Ketua Panitia PPDB,  <br>
      <img src="img/ttd1.png" alt="" width="100"><br>
      <b><u>Siti Nurul Hasanah, S.Pd</u></b><br>
      NUPTK. 2435776677230013
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    <b><u>Siapkan Berkas Berikut Ketika anda melakukan verifikasi :</u></b>
    <br>
    <table width="100%" border="0" style="margin-left:5px;">
      <tr>
        <td width="1">1.</td>
        <td>Cetak bukti pendaftaran</td>
        <td width="1">:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Pas Foto berwarna ukuran 3 x 4</td>
        <td>:</td>
        <td>3 lembar</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Foto copy Akta Kelahiran</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Foto copy nilai KK (Kartu Keluarga)</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td valign="top">5.</td>
        <td colspan="3">Semua berkas dimasukan kedalam map plastik berlubang (Contoh:  merk folder one), laki – laki warna merah dan perempuan warna biru</td>
      </tr>
    </table>

  </body>
</html>
