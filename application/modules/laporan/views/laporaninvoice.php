<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <style>
    .kopsurat{
      margin-top: 40px ;
      font-style: bold;
  }   

  .titlee{
      margin-top: 40px ;
      text-align: center;
  }  

  #invoice {
    font-family:  Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-left: 50px;
}

#invoice td, #invoice th {
    border: 1px solid #2e2f30;
    padding: 8px;

}



#invoice tr:hover {background-color: #2e2f30;}

#invoice th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #e0e1e2;
    color: black;
}

#sign{
    text-align: right;
    margin-right: 90px;
    padding-top: 50px;
}


</style>
</head>
<body>

  <div class="kopsurat">
      <h3>Cv.Dasa Motor Jaya Abadi</h3>
       jl.Jendaral Sudirman , AB 17 no.110 Cikarang Barat <br>
      Kab.Bekasi  - (+628) - 579 - 0663
  </div>
  <div class="titlee">
      <h3>Report Invoice</h3>
  </div>
  <table id="invoice">
      <tr>
          <th>Date</th>
          <th>Invoice</th>
          <th>Customer</th>
          <th>Merk</th>
          <th>Type</th>
          <th>No Polisi</th>
          <th>Teknisi</th>
          <th>Keluhan</th>
      </tr>
      <?php
      foreach ($transaksi as $data) {
                # code...
         ?>
         <tr>
          <td><?php echo $data->tgl ;?></td>
          <td><?php echo $data->invoice ;?></td>
          <td><?php echo $data->nama ;?></td>
          <td><?php echo $data->brand ;?></td>
          <td><?php echo $data->type ;?></td>
          <td><?php echo $data->no_pol ;?></td>
          <td><?php echo $data->teknisi ;?></td>
          <td><?php echo $data->keluhan ;?></td>
      </tr>
      <?php
  }
  ?> 
</table>

<div id="sign">
    Signature<br><br><br><br><br><br>



    <?php echo $_SESSION['username1']; ?>
</div>






</body>
</html>