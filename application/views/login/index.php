<?php $this->view('layouts/header') ?>
<?php $this->view('layouts/navbar-default') ?>

	<br /><br />
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel panel-heading dropdown">
						<strong>MEMBERS AREA</strong>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-triangle-bottom pull-right" style="font-size:18px;"></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="#"><i class="glyphicon glyphicon-refresh"></i> Forgot Password</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="#"><i class="glyphicon glyphicon-plus"></i> User Registration</a></li>
						</ul>
					</div>
					<div class="panel-body">
					<?= form_open() ?>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Your Username">
						</div>
						<br/>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Your Password">
						</div>
						<br/>
						<!--
							<div class="form-group">
								<label for="username">USERNAME</label> 
								<input type="text" name="username" placeholder="Your ID" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">PASSWORD</label>
								<input type="password" name="password" placeholder="Your Password" class="form-control">
							</div>
						-->
						<div class="form-group">
							<button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Login</button>
						</div>
					<?= form_close() ?>
				</div>
				</div>

				

				{message}

			</div>
		</div>
	</div>
<?php $this->view('layouts/footer') ?>
