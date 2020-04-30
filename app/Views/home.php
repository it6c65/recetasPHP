<?php echo $this->include('partials/html/header') ?>
    <div class="container">
        <div class="my-5 jumbotron">
            <h1 class="display-4 text-center">Welcome to this Systems of Recipes! </h1>
            <p class="lead text-center">We are Exciting that you enjoy this software</p>
            <?php if($create_user != NULL): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h3><?= $create_user ?></h3>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif ?>
            <hr class="my-4"/>
            <div class="row justify-content-around">
              <div class="card col-md-4">
                <h3 class="card-header text-center"><i>Register</i></h3>
                <div class="card-body text-center">
                  <i class="fas fa-book-medical fa-7x"></i>
                  <h4 class="my-3">New Accounts Here!</h4>
                </div>
                <a href="<?= base_url() ?>/register" class="btn btn-lg btn-secondary my-2"><strong>Register</strong></a>
              </div>
              <div class="card col-md-4">
                <h3 class="card-header text-center"><i>Enter</i></h3>
                <div class="card-body text-center">
                  <i class="fas fa-book-open fa-7x"></i>
                  <h4 class="my-3">Old Accounts Here!</h4>
                </div>
                <a href="<?= base_url() ?>/login" class="col-m6 btn btn-lg btn-primary my-2"><strong>Enter</strong></a>
              </div>
            </div>
        </div>
    </div>
<?php echo $this->include('partials/html/footer') ?>
