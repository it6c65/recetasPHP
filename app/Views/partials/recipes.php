<main id="recipes" class="bg-light">
  <div class="container py-5">
    <div class="text-center">
      <h1>Welcome <strong><?= $user ?></strong>!</h1>
    </div>
    <div class="my-5">
        <a href="<?= base_url() ?>/recipes/new" class="btn btn-info btn-block">
            <i class="fas fa-plus"></i> Create Recipe
        </a>
    </div>
    <h2><strong>Your Recipes</strong></h2>
    <div class="row">
        <?php foreach( $recipes as $rec): ?>
        <div class="col-md-4 py-2">
            <div class="card" id="rec-<?= $rec['id'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $rec['recname'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Created at <?= $rec['creation'] ?></h6>
                    <p class="card-text">
                        <?= $rec['estimated']?>
                        <?= $rec['estimated_type']?>
                    </p>
                </div>
                <div class="card-footer text-right bg-light text-right">
                <button class="btn btn-warning btn-lg">
                    <i class="fas fa-eye"></i> &nbsp; View
                </button>
                <button class="btn btn-danger btn-lg delete-recipe" data-recipe-id=<?= $rec['id'] ?>>
                    <i class="fas fa-trash"></i> &nbsp; Delete
                </button>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
  </div>
</main>
