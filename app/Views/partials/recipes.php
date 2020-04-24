<main id="recipes" class="bg-light">
  <div class="container py-5">
    <div class="text-center">
      <h1>Welcome <?= $user ?>!</h1>
    </div>
    <div class="my-5">
        <button class="btn btn-info btn-block">
            <i class="fas fa-plus"></i> Create Recipe
        </button>
    </div>
    <h2><strong>Your Recipes</strong></h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Recipe Example</h5>
            <h6 class="card-subtitle mb-2 text-muted">Created</h6>
            <p class="card-text">
                Here Some Text
            </p>
            </div>
            <div class="card-footer text-right bg-light text-right">
            <button class="btn btn-outline-primary btn-lg">
                <i class="fas fa-eye"></i> &nbsp; View
            </button>
            <button class="btn btn-outline-danger btn-lg">
                <i class="fas fa-trash"></i> &nbsp; Delete
            </button>
            </div>
        </div>
      </div>
    </div>
  </div>
</main>
