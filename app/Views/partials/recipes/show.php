<main id="recipes" class="bg-light">
  <div class="container py-5 my-5">
    <div class="text-center">
      <h1>Welcome <strong><?= $user ?></strong>!</h1>
    </div>
    <div class="my-5">
        <a href="<?= base_url() ?>/recipes/new" class="btn btn-info btn-block">
            <i class="fas fa-plus"></i> Create Recipe
        </a>
    </div>
    <h2><strong>Your Recipes</strong></h2>
        <?php if( $recipes == NULL ): ?>
          <div class="text-center">
             <h2>There is nothing here!</h2>
          </div>
        <?php endif ?>
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
                <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#modal-rec-<?= $rec['id'] ?>">
                    <i class="fas fa-eye"></i> &nbsp; View
                </button>
                <button class="btn btn-danger btn-lg delete-recipe" data-recipe-id=<?= $rec['id'] ?>>
                    <i class="fas fa-trash"></i> &nbsp; Delete
                </button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal-rec-<?= $rec['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title"><strong class="text-center">Current Recipe</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th scope="row">Recipes Name:</th>
                            <td><?= $rec['recname'] ?></td>
                          </tr>
                          <tr>
                            <th scope="row">Creation:</th>
                            <td><?= $rec['creation']?></td>
                          </tr>
                          <tr>
                            <th scope="row">Duration of process</th>
                            <td><?= $rec['estimated'] . ' ' . $rec['estimated_type'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                      <h3>Steps of Preparation</h3>
                      <div class="card">
                        <div class="card-body container">
                          <?= $rec['preparation'] ?>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer bg-light">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times"></i> &nbsp; Close
                      </button>
                      <a href="<?= base_url() ?>/recipes/<?= $rec['id'] ?>/edit" type="button" class="btn btn-primary">
                        <i class="fas fa-pen"></i> &nbsp; Edit
                      </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
  </div>
</main>
