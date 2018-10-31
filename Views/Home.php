<?php ob_start(); ?>

<div id="divBanner">
    <div style="background-image: url('../Files/Banner.png'); background-size: 100%; background-repeat: no-repeat; height: 100%">
    </div>
</div>

<?php
  $pagemaincontent = ob_get_contents(); 

  ob_end_clean();
  $pagetitle = "Home";

  include("master.php");
?>

<script>

    window.onload = function(){
        var wHeight = window.innerHeight;
        document.querySelector( '#divBanner' ).setAttribute( 'style', 'height: ' + ( wHeight - 64 ) + 'px');
    }



</script>