<!-- Search Post -->
<div class="col-lg-3 col-md-4 search-box-container">
  <h3 class="text-center"> Search </h3>
  <hr>

  <form id="formSearch" action="<?= base_url() ?>home/searchPosts" method="POST">
    <div class="form-group">
      <label for="title"> Title </label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
      <label for="date"> Date </label>
      <input type="date" class="form-control" name="date" id="date">
    </div>

    <!-- Options -->
    <div class="form-group">
      <label for="state"> State </label>
      <select class="form-control" name="state" id="state">
        <option></option>
        <?php foreach($states as $state): ?>
          <option value="<?= $state->idState ?>"> <?= $state->description ?> </option>
        <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary btn-block"> Search </button>
  </form>
</div>