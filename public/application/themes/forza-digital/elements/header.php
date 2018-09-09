<header class="header">
    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="<?=URL::to('/')?>">
            <img src="<?=$view->getThemePath()?>/images/logo.svg" alt="Forza Digital">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php
            $a = new GlobalArea('Header Navigation');
            $a->display();
            ?>
        </div>
    </nav>
</header>