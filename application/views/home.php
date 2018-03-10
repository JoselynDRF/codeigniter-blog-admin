<body>
	<div class="container">
		<h1> <?= $description ?> </h1>

		<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" href="#"> Posts </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"> Add Post </a>
			</li>
		</ul>

		<div class="row m-4">
			<!-- Search Post -->
			<div class="col-lg-3 col-md-4 search-box-container">
				<h3 class="text-center"> Search </h3>
				<hr>
				<form>
					<div class="form-group">
						<label for="title"> Title </label>
						<input type="text" class="form-control" id="title">
					</div>
					<div class="form-group">
						<label for="date"> Date </label>
						<input type="date" class="form-control" id="date">
					</div>

					<!-- Options -->
					<div class="form-group">
						<label for="state"> State </label>
						<select class="form-control" id="state">
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
</body>

</html>