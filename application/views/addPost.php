<!-- Add Post -->
<div class="col-12 add-post-container">
  <form action="<?= base_url() ?>home/addPost" method="POST">
    <div class="form-group row">
      <label for="title" class="col-3 col-sm-1 col-form-label"> Title: </label>
      <div class="col-8 col-sm-6">
        <input type="text" class="form-control" name="title" id="titleNewPost">
      </div>
      
      <!-- Open preview modal -->
      <span class="btn btn-primary" data-toggle="modal" data-target="#previewModal" onclick="showPostPreview()">
        <i class="fas fa-search preview"></i>
      </span>
    </div>

    <div class="form-group row">
      <label for="state" class="col-3 col-sm-1 col-form-label"> State: </label>
      <div class="col-9 col-sm-3">
        <select class="form-control" name="state" id="state">
          <?php foreach($states as $state): ?>
            <option value="<?=  $state->idState ?>"> <?= $state->description ?> </option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <textarea name="content" id="contentNewPost"></textarea> 
    </div>

    <button type="submit" class="btn btn-primary"> Create Post </button>
  </form>
</div>
