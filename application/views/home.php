<body>
	<div class="container mt-5">
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
				<?php $this->load->view('searchPosts', $states); ?>

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

						<tbody id="tablePosts">
							<?php $this->load->view('common/tablePosts', $posts); ?>
						</tbody>

					</table>
				</div>
			</div>
		</div>

		<!-- Tab ADD POSTS -->
		<div class="tab-pane fade" id="addPost" role="tabpanel">
			<?php $this->load->view('addPost', $states); ?>
		</div>

	</div>
</div>

</body>
</html>