<?php echo $this->include('partials/html/header') ?>
    <div class="container">
      <div class="row justify-content-center align-items-center">
          <div class="my-5 jumbotron col-md-6">
              <h1 class="display-4 text-center">Login</h1>
              <p class="lead text-center">Welcome to RecAdmin!</p>
              <hr class="my-4"/>
              <div class="row justify-content-center">
                <?= form_open('login/auth', [ 'class' => 'col-md-8' ]) ?>
                  <div class="form-group">
                    <label for="usr"><strong>Username:</strong></label>
                    <?= form_input(
                      [
                        'name' => 'username',
                        'id' => 'username',
                        'maxlength' => '30',
                        'class' => 'form-control'
                      ]
                    ) ?>
                  </div>
                  <div class="form-group">
                    <label for="pw"><strong>Password:</strong></label>
                    <?= form_password(
                      [
                        'name' => 'password',
                        'id' => 'password',
                        'class' => 'form-control'
                      ]
                    ) ?>
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                      <i class="fas fa-arrow-right"></i> &nbsp; Login
                    </button>
                    <a class="btn btn-secondary btn-lg btn-block" href="/">
                      <i class="fas fa-reply"></i> &nbsp; Back
                    </a>
                  </div>
                  <?= form_close() ?>
              </div>
          </div>
      </div>
    </div>
<?php echo $this->include('partials/html/footer') ?>
