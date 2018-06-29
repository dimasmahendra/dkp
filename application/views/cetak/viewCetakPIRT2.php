<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
     
<div class="panel-body">
  <H2 style="text-align: center;">Formulir isian data pendukung</H2>
  <table border="1" width="100%">
    <thead>
      <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Bahan baku</th>
          <th>Kemasan</th>
          <th>Merk</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td>1</td>
          <td><?php echo $hasil['namadagang']; ?></td>
          <td><?php echo $hasil['pangan'][0]['kode_pangan_detail']; ?></td>
          <td><?php echo $hasil['kemasan'][0]['jenis_kemasan']; ?></td>
          <td><?php echo $hasil['merk']; ?></td>
      </tr>             
    </tbody>
  </table>
</div>
</body>
</html>