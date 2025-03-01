<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?= img('js/dist/logo.png', false , [ 'width' => '48', 'height' => '32' ]) ?></a>
    <button class="navbar-toggler btn-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Recipes </a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Administration</a>
        </li>
        </ul>
        <form class="form-inline my-2 mx-auto">
            <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"> <i class="fas fa-search"></i> </div>
            </div>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $user ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url() ?>/exit">Log Out</a>
            </div>
        </div>
    </div>
</nav>
