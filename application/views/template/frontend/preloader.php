<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aminduk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/preloader.css">
  <script src="<?= base_url() ?>assets/frontend/js/jquery.min.js"></script>
  <script type="text/javascript">
  //script preloader
   (function( $ ) {   
     $(window).on('load', function(){
      $('#preloader').fadeOut('3000',function(){
             $(this).hide();
         });
     });

    })(jQuery);

   //slow bisa diganti dengan angka misal 2000 
  </script>
</head>
<body>
<div id="preloader">
  <div class="loading">
    <img src="<?= base_url() ?>assets/frontend/img/loading.gif" width="110" height="110">
  </div>
</div>
</body>

</html>