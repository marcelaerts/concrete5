<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<!doctype html>
<html lang="en">
<head>
    <?php View::element('header_required'); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?=$view->getThemePath()?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$view->getThemePath()?>/css/carousel.css" rel="stylesheet">
    <link href="<?=$view->getThemePath()?>/css/admin-fixes.css" rel="stylesheet">

    <!-- Test with .less file -->
    <link href="<?=$view->getStylesheet('main.less')?>" rel='stylesheet'>
</head>
<body>

    <div class="<?php echo $c->getPageWrapperClass() ?>">
    
        <?php $view->inc('elements/header.php'); ?>

        <main role="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        $a = new Area('Main');
                        $a->display($c);
                        ?>
                    </div>
                </div>
            </div>

            <?php $view->inc('elements/footer.php'); ?>
        </main>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=$view->getThemePath()?>/js/popper.min.js"></script>
    <script src="<?=$view->getThemePath()?>/js/bootstrap.min.js"></script>

    <?php View::element('footer_required'); ?>
</body>
</html>
