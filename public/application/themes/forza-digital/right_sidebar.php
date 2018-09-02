<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<!doctype html>
<html lang="en">
<head>
    <?php View::element('header_required'); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?=$view->getThemePath()?>/css/build.css" rel="stylesheet">
</head>
<body>

    <div class="<?php echo $c->getPageWrapperClass() ?>">
    
        <?php $view->inc('elements/header.php'); ?>

        <main role="main">

            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-content">
                        <?php
                        $a = new Area('Main');
                        $a->display($c);
                        ?>
                    </div>
                    <div class="col-sm-offset-1 col-sm-3 col-sidebar">
                        <?php
                        $a = new Area('Sidebar');
                        $a->display($c);
                        ?>
                    </div>
                </div>
            </div>

            <?php $view->inc('elements/footer.php'); ?>
        </main>

    </div>

    <script src="<?=$view->getThemePath()?>/js/build.js"></script>
    <?php View::element('footer_required'); ?>
</body>
</html>
