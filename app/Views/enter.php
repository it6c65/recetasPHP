<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="apple-touch-icon" href="/apple-touch-icon.png"> -->
    <!-- Place favicon.ico in the root directory -->

  </head>
  <body>
    <!--[if lt IE 8]>
      <h2> You are using an <strong>outdated</strong> browser.
      <em>Please</em> upgrade your browser
      </h2>
    <![endif]-->
    <div class="container">
      <div class="row justify-content-center align-items-center">
          <div class="my-5 jumbotron col-md-6">
              <h1 class="display-4 text-center">Login</h1>
              <p class="lead text-center">Welcome to RecAdmin!</p>
              <hr class="my-4"/>
              <div class="row justify-content-center">
                <form method="POST" action="#" class="col-md-8">
                  <div class="form-group">
                    <label for="usr"><strong>Username:</strong></label>
                    <input class="form-control" name="usr" type="text" value=""/>
                  </div>
                  <div class="form-group">
                    <label for="pw"><strong>Password:</strong></label>
                    <input class="form-control" name="pw" type="password" value=""/>
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                      <i class="fas fa-arrow-right"></i> &nbsp; Login
                    </button>
                    <a class="btn btn-secondary btn-lg btn-block" href="/">
                      <i class="fas fa-reply"></i> &nbsp; Back
                    </a>
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>
    <script src="<?= base_url() ?>/js/dist/bundle.js"></script>
  </body>
</html>
