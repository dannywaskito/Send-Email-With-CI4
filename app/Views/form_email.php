<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Send Email With CI 4</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Favicon -->
     <link rel="shortcut icon" href="<?=base_url() ?>/assets/img/gmail.png">

     <!-- End Favicon -->
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>
<body>
  <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
  <div class="container mt-5">
<h3>Send Email With CI 4 & SMTP Gmail</h3>
    <form method="post" action="<?php echo base_url('SendEmail/sendemail') ?>">
      <div class="form-group">
        <label>E-Mail Anda</label>
        <input type="text" name="mailTo" class="form-control" required="">
      </div>
       
      <div class="form-group">
        <label>Nama Anda</label>
        <input type="text" name="name" class="form-control" required="">
      </div>

      <div class="form-group">
        <label>Pesan Anda</label>
        <textarea rows="6" type="text" name="message" class="form-control" required=""></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Kirim</button>
      </div>
    </form>

  </div>
  <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
  <!-- Swall -->
<script src="<?= base_url() ?>/assets/sweetalert/sweetalert2.all.min.js"></script>
<!-- My script -->
<script src="<?= base_url() ?>/assets/js/script.js"></script>
</body>
</html>
