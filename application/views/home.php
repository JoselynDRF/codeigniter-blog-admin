<body>
	<div class="container">
		<h1> <?= $description ?> </h1>

		<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#showPosts"> Posts </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#addPost"> Add Post </a>
			</li>
		</ul>

	<div class="tab-content">
		<!-- Tab SHOW POSTS -->
		<div class="tab-pane fade show active" id="showPosts" role="tabpanel">
			<div class="row m-4">

				<!-- Search Post -->
				<div class="col-lg-3 col-md-4 search-box-container">
					<h3 class="text-center"> Search </h3>
					<hr>

					<form action="<?= base_url() ?>home" method="POST">
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
									<option> <?= $state->description ?> </option>
								<?php endforeach; ?>
							</select>
						</div>

						<button type="submit" class="btn btn-primary btn-block"> Search </button>
					</form>
				</div>

				<!-- Posts table -->
				<div class="col-lg-9 col-md-8">
					<table class="table">
						<thead class="thead-light">
							<tr>
								<th> Title </th>
								<th> Date </th>
								<th> State </th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($posts as $post): ?>
								<tr>
									<td> <?= $post->title ?> </td>
									<td> <?= $post->date ?> </td>
									<td> <?= $post->state ?> </td>
									<td>
										<span class="mr-2"><i class="fas fa-pencil-alt"></i></span>
										<span><i class="fas fa-times"></i></span>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>

					</table>
				</div>
			</div>
		</div>

		<!-- Tab ADD POSTS -->
		<div class="tab-pane fade" id="addPost" role="tabpanel">
			<!-- Add Post -->
			<div class="col-12 add-post-container">
				<form action="<?= base_url() ?>home/addPost" method="POST">
					<div class="form-group row">
						<label for="title" class="col-3 col-sm-1 col-form-label"> Title: </label>
						<div class="col-8 col-sm-6">
							<input type="text" class="form-control" name="title" id="title">
						</div>
						<div>
							<span><i class="fas fa-search preview"></i></span>
						</div>
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
					<textarea name="content" id="content"></textarea> 
				</div>

					<button type="submit" class="btn btn-primary"> Create Post </button>
				</form>
			</div>
		</div>

	</div>
</div>

</body>

</html>