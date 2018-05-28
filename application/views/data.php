<html>
<head>
  <title>KiosCoding</title>
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <style>
  .kotak
 {
  padding:10px;
  border:1px solid #e8e8e8;
  margin-bottom:15px;
  background:#F4F4F4;
  border-radius:5px;
 }
  </style>
</head>
<body>
  <!-- INI ADALAH HEADER -->
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://www.kioscoding.com">KiosCoding</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url('index.php/produk/sata')?>">Data Produk</a></li>
              <li><a href="<?php echo base_url('index.php/produk/input')?>">Input Produk</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://www.kioscoding.com/search/label/CODEIGNITER">Tutorial lainnya</a></li>
            </ul>
          </div>
        </div>
      </nav>
   <br><br><br><br><br>
   <div class="container">
     <div class="row">
       <?php
        foreach($produk as $p){
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="kotak">
            <a href="#"></a>
            <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/images/'.$p->gambar  ?>"/></a>
              <div class="card-body">
                <h1 class="card-title">
                  <a href="#"><?php echo $p->nama ?></a>
                </h1>
                <h4>Rp. <?php echo number_format($p->harga,0,",","."); ?></h4>
                  <p class="card-text">Stok tersisa : <?php echo $p->stok ?></p>
             </div>
              <div class="card-footer">
                <a href="<?php echo base_url();?>index.php/produk/ubah/<?php echo $p->id ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                <a href="<?php echo base_url();?>index.php/produk/hapus/<?php echo $p->id ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
              </div>
            </div>
          </div>
      <?php } ?>
     </div>

</div> <!-- /container -->
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
</body>
</html>
