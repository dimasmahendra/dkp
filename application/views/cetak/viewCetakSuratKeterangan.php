<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
     
<div class="panel-body">
  <H2 style="text-align: center;">Surat Keterangan</H2>
  <p>Yang bertanda tangan di bawah ini, saya ketua RT / RW menerangkan bahwa :</p>
  <table border="0">
    <tbody>
      <tr>
          <th>Nama</th>
          <td>: <?php echo $hasil['namalengkap']; ?></td>
      </tr> 
      <tr>
          <th>Alamat</th>
          <td>: <?php echo $hasil['alamat']; ?></td>
      </tr>
    </tbody>
  </table>
  <p>Adalah benar warga Semarang dan melakukan usaha makanan / minuman di</p>
  <p>Alamat : <?php echo $hasil['alamatperusahaan']; ?></p>
  <p>Sejak bulan <?php echo $hasil['bulanberdiri']; ?> tahun <?php echo $hasil['tahunberdiri']; ?> sampai sekarang.</p>
  <p>Demikian surat keterangan ini untuk dapat dipergunakan sebagaimana mestinya.</p>
  <div>
    <p>Semarang,                          </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p>Ketua RT / RW</p>
  </div>
  <div>
    <p align="center">Mengetahui :</p>
    <p align="center">Kelurahan</p>
  </div>
</div>
</body>
</html>