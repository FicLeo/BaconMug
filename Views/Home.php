<?php ob_start(); ?>

<style>
    body, html{
        overflow-x: hidden;
    }
    #btnBanner{
        left: 50%;
        margin-left: -110px;
        top: 60%;
    }
    video, #divGames, #divBlog, #divSobre, #divContato{
        border-bottom: 4px solid #f57c00;
        min-height: 100px;
    }
    .card-zoom:hover {
        transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
    .col{
        padding: 0 !important;
    }
    .card-zoom{
        margin: 0 !important;
        transition: transform .2s; /* Animation */
        border-radius: 0 !important;
        cursor: pointer;
        background-size: cover;
        background-position: center;
    }
    .large{
        height: 396px !important;
    }
    .medium{
        height: 296px !important;
    }
    .little{
        height: 100px !important;
    }
    #divGames{
        height: 400px;
    }
    video{
        display: block;
        min-height: 600px;
        position: absolute;
        bottom: 0;
        max-width: 100%;
    }
    .btn-floating-divs{
        margin-top: -28px;
        margin-left: -28px;
        left: 50%;
        position: absolute;
    }
</style>

<!-- Banner -->

<div id="divBanner">
    <video playsinline autoplay muted loop>
        <source src="../Files/Videos/Banner.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <a id="btnBanner" class="waves-effect waves-light orange darken-1 btn-large">
        Play Our Games
        <i class="large material-icons right">games</i>
    </a>
</div>

<!-- Games -->

<div id="divGames">
    <a class="btn-floating-divs btn-floating btn-large waves-effect waves-light orange darken-1">
        <i class="large material-icons">games</i>
    </a>
    <div class="row">
        <div class="col s3">
            <div class="card card-zoom large" style="background-image: url('https://i.ytimg.com/vi/FyIwEFXOcaE/maxresdefault.jpg');">
                <div class="card-content white-text">
                    <span class="card-title">God of War</span>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card card-zoom large" style="background-image: url('https://metrouk2.files.wordpress.com/2018/08/djw7zc7uyaagd3w-a774.jpg?quality=80&strip=all&zoom=1&resize=644%2C448')">
                <div class="card-content white-text">
                    <span class="card-title">Fifa 19</span>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card card-zoom large" style="background-image: url('https://www.elefantevoador.com/wp-content/uploads/2017/12/bgs-750x450.jpg')">
                <div class="card-content white-text">
                    <span class="card-title">The Last of Us</span>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card card-zoom medium" style="background-image: url('https://i.ytimg.com/vi/T5Xx3MdqdgM/maxresdefault.jpg')">
                <div class="card-content white-text">
                    <span class="card-title">Horizon Zero Dawn</span>
                </div>
            </div>
            <div class="card card-zoom little" style="background-image: url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/BBmc1w7Iiq35z51n/videoblocks-abstract-dark-background-honeycomb-grid-with-lighting-effect-for-technology_hsh9u2w5g_thumbnail-full01.png')">
                <div class="card-content white-text">
                    <span class="card-title center">See More</span>
                </div>
            </div>
        </div>
    </div>
</div>
 
<!-- Blog -->

<div id="divBlog">
    <a class="btn-floating-divs btn-floating btn-large waves-effect waves-light orange darken-1">
        <i class="large material-icons">question_answer</i>
    </a>
    
</div>

<!-- Sobre -->

<div id="divSobre">
    <a class="btn-floating-divs btn-floating btn-large waves-effect waves-light orange darken-1">
        <i class="large material-icons">group</i>
    </a>
</div>

<!-- Contato -->

<div id="divContato">
    <a class="btn-floating-divs btn-floating btn-large waves-effect waves-light orange darken-1">
        <i class="large material-icons">email</i>
    </a>
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