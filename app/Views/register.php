<?php echo $this->include('partials/html/header') ?>
    <div class="container">
      <div class="row justify-content-center align-items-center">
          <div class="my-5 jumbotron col-md-6">
              <h1 class="display-4 text-center">Register</h1>
              <p class="lead text-center">It's the simple register for you can login in the system</p>
              <?php if(! empty($errors)): ?>
                  <?php foreach ($errors as $field => $error ): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p><?= $error ?></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php endforeach ?>
              <?php endif ?>
              <hr class="my-4"/>
              <div class="row justify-content-center">
                <?= form_open('Login/register', [ 'class' => 'col-md-8' ]) ?>
                  <div class="form-group">
                    <label for="usr"><strong>Username:</strong></label>
                    <?= form_input(
                      [
                        'name' => 'new_user',
                        'id' => 'user',
                        'maxlength' => '30',
                        'class' => 'form-control'
                      ]
                    ) ?>
                  </div>
                  <div class="form-group">
                    <label for="pw"><strong>Password:</strong></label>
                    <?= form_password(
                      [
                        'name' => 'new_password',
                        'id' => 'password',
                        'class' => 'form-control'
                      ]
                    ) ?>
                  </div>
                  <div class="form-group">
                    <label for="repeat-pw"><strong>Repeat Password:</strong></label>
                    <?= form_password(
                      [
                        'name' => 'test_password',
                        'id' => 'test_password',
                        'class' => 'form-control'
                      ]
                    ) ?>
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-success btn-lg btn-block" type="submit">
                      <i class="fas fa-plus"></i> &nbsp; Sign Up
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
