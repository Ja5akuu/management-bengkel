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

  #atas {
    font-family:  Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    margin-left: 50px;
  }

  #atas td, #atas tr {
    /*border: 1px solid #2e2f30;*/
    padding: 8px;
    text-align: justify;

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
    <h3>Nota Transaksi</h3>
  </div>
  <table id="atas">
    <?php
    foreach ($edittrans as $data)
    { 
      ?>
      <tr>
        <td>Date</td>
        <td>:</td>
        <td style="width: 300px; "><?php echo $data->tgl ;?></td>

        <td>Invoice</td>
        <td>:</td>
        <td style="width: 300px; "><?php echo $data->invoice ;?></td>
      </tr> 

      <tr>
        <td>Customer</td>
        <td>:</td>
        <td><?php echo $data->nama ;?></td>

        <td>Merk</td>
        <td>:</td>
        <td><?php echo $data->brand ;?></td>
      </tr>

      <tr>
        <td>Type </td>
        <td>:</td>
        <td><?php echo $data->type ;?></td>

        <td>No Polisi</td>
        <td>:</td>
        <td><?php echo $data->no_pol ;?></td>
      </tr>

      <tr>
        <td>Teknisi</td>
        <td>:</td>
        <td><?php echo $data->teknisi ;?></td>

        <td>Keluhan</td>
        <td>:</td>
        <td><?php echo $data->keluhan ;?></td>
      </tr>
    <?php } ?>
    </table>
<br>
<br>
<br>
    <table id="invoice">
      <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Kategory</th>
        <th>Harga</th>
        <th>Diskon</th>
        <th>QTY</th>
        <th>Total</th>
      </tr>
      <?php
      $total=0;
      foreach ($edittrans1 as $temp) {
                # code...
       ?>
       <tr>
         <td><?php echo $temp->id_baja ?></td>
         <td><?php echo $temp->nama ?></td>
         <td><?php echo $temp->satuan ?></td>
         <td><?php echo $temp->kategori ?></td>
         <td><?php echo format_rupiah($temp->harga_jual) ?></td>
         <td><?php echo $temp->diskon ?></td>
         <td><?php echo $temp->qty ?></td>
         <td>
           <?php
           $harga = $temp->harga_jual ;
           $disc = $temp->diskon ;
           $qty = $temp->qty;
           $d = ($harga-(($disc/100)*$harga)) ;

           echo format_rupiah($d*$qty) ;
           ?>
         </td>
       </tr>

       <?php $total=$total+$d*$qty; } ?>
       <tr>
        <th><b>GRAND TOTAL</b></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th><b><?php echo format_rupiah($total);?></b></th>
      </tr>
    </table>

    <div id="sign">
      Signature<br><br><br><br><br><br>



      <?php echo $_SESSION['username1']; ?>
    </div>






  </body>
  </html>