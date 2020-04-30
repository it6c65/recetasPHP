<main id="recipes" class="bg-light">
  <div class="container py-5">
    <div class="text-center">
      <h1><strong>Edit Recipe</strong></h1>
    </div>
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
    <div class="px-5 py-5 row my-2">
        <?= form_open('recipes/'.$current_recipe['id'],
                      [ 'class' => 'offset-md-2 col-md-8' ]) ?>
        <div class="form-group">
            <label for="recname"><strong>Recipes Name:</strong></label>
            <?= form_input(
                [
                'name' => 'recname',
                'id' => 'name',
                'maxlength' => '40',
                'class' => 'form-control',
                'value' => $current_recipe['recname']
                ]
            ) ?>
        </div>
        <div class="form-group form-row">
          <div class="col">
            <label for="estimated"><strong>Estimated Time:</strong></label>
            <?= form_input(
                [
                'name' => 'estimated',
                'id' => 'time_estimated',
                'min' => '1',
                'max' => '60',
                'class' => 'form-control',
                'value' => $current_recipe['estimated']
                ], 1, [], "number"
            ) ?>
          </div>
          <div class="col">
            <label for="estimated_type"><strong>Estimated Time:</strong></label>
            <?php
            $estimated_type = [
                'second' => "Seconds",
                'hour' => "Hours",
                'day' => "Days",
                'week' => "Weeks",
                'month' => "Months"
            ]
            ?>
            <?= form_dropdown('estimated_type', $estimated_type, $current_recipe['estimated_type'] ,
                              ['class' => "custom-select", 'id' => 'estimated_type_create']) ?>
          </div>
        </div>
        <div class="form-group">
        <label for="order"><strong>Preparations:</strong></label>
        <?= form_textarea(
            [
            'name' => 'order',
            'id' => 'preparation',
            'class' => 'form-control',
            'value' => $current_recipe['preparation']
            ]
        ) ?>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary btn-lg">Send</button>
            <a href="<?= base_url() ?>/panel" class="btn btn-secondary btn-lg">Back</a>
        </div>
        <?= form_close() ?>
    </div>
  </div>
</main>
