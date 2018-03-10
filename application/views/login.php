<body>
	<div class="container text-center mt-5">

		<!-- Login -->
		<div class="col-12 col-lg-6 login-form m-auto">
			<h3 class="text-center"> Login </h3> <hr>
			<form action="<?= base_url() ?>login/getUser" method="POST">
				<div class="form-group row">
					<label for="username" class="col-3 col-form-label"> Username: </label>
					<div class="col-9">
						<input type="text" class="form-control" name="username" id="username" placeholder="UserTest">
					</div>
				</div>

				<div class="form-group row">
					<label for="password" class="col-3 col-form-label"> Password: </label>
					<div class="col-9">
						<input type="password" class="form-control" name="password" id="password" placeholder="1234">
					</div>
				</div>

				<div class="form-group text-right">
					<a href="#"> Recover Password </a>
				</div>

			<div class="text-right">
				<button type="submit" class="btn btn-primary button-login"> Login </button> </div>
			</form>
		</div>
	</div>
	
</body>
</html>