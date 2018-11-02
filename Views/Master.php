<!DOCTYPE html>
<html>
<head>
    <!-- Config CharSet Tag -->
    <meta charset="utf-8" />
    <!-- Compatibility Tag -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Title Tag -->
    <title>Bacon Mug - <?php echo $pagetitle; ?></title>
    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

    <!-- Nav bar -->

    <div class="navbar-fixed">
        <nav style="border-bottom: 2px solid #f57c00; background-image: url('../Files/Images/bg-nav.png')">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">
                    <img src="http://baconmug.com.br/images/logo.png" alt="Logo">
                </a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>    
    </div>

    <!-- Content -->

    <div class="container-fluid">
        <?php echo $pagemaincontent; ?>
    </div>

    <!-- Footer -->

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>