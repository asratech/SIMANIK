<!DOCTYPE html>
<html>
<head>
  <title>cetak no. antrian</title>
  <link rel="stylesheet" type="text/css" href="{{URL::to('css/print.css')}}">
</head>
<body onload="window.print()" class="receipt">
  <sectio class="sheet padding-10mm">
  <div id="invoice-POS">
    <center id="top">
      <div class="info">
        <h3>Klinik Qona'ah</h3>
        <p>==================</p>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->

    <div id="mid">
      <center>
        <h2>{{$data}}</h2>
        <div>
          <p>==================</p>
          <h5>Terima Kasih.</h5>
        </div>
      </center>
    </div>
</section>

</body>
</html>