<script src="assets/js/jquery.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/gsap.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<!-- Google Site Verification -->
<meta name="google-site-verification" content="O4iWtwdECfVhI6bq5B2ZJ0QwfQJENhGcqxKYbRxGArQ">

<script>
	new WOW().init();
	
	$(function() {
    $('a[data-modal]').on('click', function() {
        
        var price = $(this).attr('data-price');
        var packages = $(this).attr('data-package');
        var service = $(this).attr('data-service');
        
        $('#modal-service').val(service);
        $('#modal-package').val(packages);
        $('#modal-price').val(price);
        <!-- Google Tag Manager -->
      $($(this).data('modal')).modal({
            fadeDuration: 250
          });
      return false;
    });
  });
  
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GF041FMJVS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GF041FMJVS');
</script>

