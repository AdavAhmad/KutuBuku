<html>

<body onLoad="window.print();">

  <style type="text/css">
    body {
      font-size: 12px;
      font-family: Arial, Helvetica, sans-serif;
    }

    .style1 {
      font-size: 12px;
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>
  <p align="center">LAPORAN DATA ANGGOTA PERPUSTAKAAN</p>
  <table width="100%" cellspacing="0" cellpadding="2" border="1px" class="style1">

    <tr>
      <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">No</th>
      <th width="20%" align="center" class="style1" bgcolor="#CCCCCC">Password</th>
      <th width="20%" align="center" class="style1" bgcolor="#CCCCCC">Username</th>
      <th width="20%" align="center" class="style1" bgcolor="#CCCCCC">No Telp</th>
      <th width="20%" align="center" class="style1" bgcolor="#CCCCCC">Email</th>
      <th width="15%" align="center" class="style1" bgcolor="#CCCCCC">Jenis Kelamin</th>
      <!-- <th width="14%" align="center" class="style1" bgcolor="#CCCCCC">Prodi</th>
   	<th width="8%" align="center" class="style1" bgcolor="#CCCCCC">Thn Masuk</th> -->
    </tr>

    <?php
    include_once 'inc/class.perpus.php';
    $anggota = new anggota;
    $query = "SELECT * FROM tbl_anggota";
    $no = 1;

    foreach ($anggota->showData($query) as $data) {
    ?>
      <tbody>
        <tr>
          <td align="center"><?php echo $no; ?></td>
          <td><?php echo $data['password']; ?></td>
          <td><?php echo $data['username']; ?></td>
          <td align="center"><?php echo $data['no_telp']; ?></td>
          <td align="center"><?php echo $data['email']; ?></td>
          <td align="center"><?php echo $data['jk']; ?></td>
          <!-- <td align="center"><?php //echo $data['prodi']; 
                                  ?></td>
          <td align="center"><?php //echo $data['thn_masuk']; 
                              ?></td> -->

        </tr>

      <?php $no++;
    } ?>

      </tbody>
  </table>

</body>

</html>