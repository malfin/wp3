<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Steller Landing page | Free Bootstrap 4.1 landing page</title>
    <?php wp_head(); ?>
    <!-- font icons -->
    <!--    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">-->
    <!-- Bootstrap + Steller main styles -->
    <!--    <link rel="stylesheet" href="assets/css/steller.css">-->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<!-- Page navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="<?= get_template_directory_uri() ?>/assets/imgs/logo.svg"
                                              alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--            <ul class="navbar-nav ml-auto align-items-center">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#home">Home</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#about">About</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#service">Service</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#portfolio">Portfolio</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#testmonial">Testmonial</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#blog">Blog</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#contact">Contact</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="- btn btn-primary rounded ml-4" href="components.html">Copmonents</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
        <?php wp_nav_menu([
                'container'=>'div',
                'container_class'=>'collapse navbar-collapse',
                'menu_class'=>'navbar-nav ml-auto align-items-center',
        ])?>
    </div>
</nav>
<!-- End of page navibation -->
