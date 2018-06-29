<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
     
<div class="panel-body">
    <table width="100%" style="border-bottom: 2px solid #000000;">
        <tr>
            <td width="20%">(LOGO PEMDA KAB/KOTA*)</td>
            <td width="60%" align="center">
                <p>PEMERINTAH DAERAH KOTA SEMARANG</p>
                <p>DINAS KETAHANAN PANGAN KOTA SEMARANG</p>
                <p>Jl. ................................................................................</p>
                <p>KABUPATEN/KOTA *........................ KODE POS ...........</p>
                <p>TELP : .....................................  FAX : ..........................</p>
                <p>E-MAIL : .......................................................................</p>
            </td>
            <td width="20%" style="text-align: right;">(LOGO DINAS KESEHATAN KAB/KOTA)</td>
        </tr>
    </table>
    <H3 style="text-align: center;">
        <p>FORMULIR</p>
        <p>PERMOHONAN REKOMENDASI PENGAWASAN</p>
        <p>SERTIFIKAT PRODUK PANGAN INDUSTRI RUMAH TANGGA (SPP-PIRT)</p>
    </H3>
    <table border="0">
        <tbody>
          <tr>
              <th>1.</th>
              <th>Nama jenis pangan</th>
              <small>(sesuai nama jenis pangan IRT)</small>
              <td>: <?php echo $hasil['pangan'][0]['kode_pangan_detail']; ?></td>
          </tr> 
          <tr>
              <th>2.</th>
              <th>Nama dagang</th>
              <td>: <?php echo $hasil['namadagang']; ?></td>
          </tr> 
          <tr>
              <th>3.</th>
              <th>Jenis kemasan</th>
              <td>: <?php echo $hasil['kemasan'][0]['jenis_kemasan']; ?></td>
          </tr> 
          <tr>
              <th>4.</th>
              <th>Berat bersih/isi bersih</th>
              <small>(g/mg/kg atau l/ml/kl)</small>
              <td>: <?php echo $hasil['beratbersih']; ?></td>
          </tr>
          <tr>
              <th>5.</th>
              <th>Komposisi</th>
              <td>: <?php echo $hasil['komposisi']; ?></td>
          </tr>      
          <tr>
              <th>6.</th>
              <th>Proses Produksi</th>
              <td>: <?php echo $hasil['prosesproduksi']; ?></td>
          </tr>    
          <tr>
              <th>7.</th>
              <th>Informasi tentang masa simpan</th>
              <small>(kedaluwarsa)</small>
              <td>: <?php echo $hasil['masasimpan']; ?></td>
          </tr>     
          <tr>
              <th>8.</th>
              <th>Informasi tentang kode produksi</th>
              <td>: <?php echo $hasil['kodeproduksi']; ?></td>
          </tr>     
          <tr>
              <th>9.</th>
              <th>Nama, alamat, kode pos dan nomor telepon IRTP</th>
              <td>: <?php echo $hasil['namaperusahaan']; ?>, <?php echo $hasil['alamatperusahaan']; ?>, <?php echo $hasil['kodepos']; ?>, <?php echo $hasil['telepon_kantor']; ?></td>
          </tr>     
          <tr>
              <th>10.</th>
              <th>Nama pemilik</th>
              <td>: <?php echo $hasil['namalengkap']; ?></td>
          </tr>     
          <tr>
              <th>11.</th>
              <th>Nama penanggungjawab</th>
              <td>: <?php echo $hasil['namalengkap']; ?></td>
          </tr>                    
        </tbody>
      </table>
      <div class="footer-right">
        <p>Semarang, <?php echo date('d-m-Y')?></p>
        <br>
        <br>
        <br>
        <br>
        <p>(....................................)</p>
      </div>
</div>
</body>
</html>