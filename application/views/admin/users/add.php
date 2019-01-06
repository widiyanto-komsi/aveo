<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
		<?php endif; ?>

		<form action="<?php base_url('admin/user/add') ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <label class="control-label col-sm-2" for="name">Name*:</label>
			  <div class="col-sm-10">
			    <input type="text" name="name" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" id="name" placeholder="Enter name">
			  </div>
			  <div class="invalid-feedback">
				<?php echo form_error('name') ?>
			  </div>

			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="email">Email*:</label>
			  <div class="col-sm-10">
			    <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="Enter email">
			  </div>
			  <div class="invalid-feedback">
				<?php echo form_error('email') ?>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="no_wa">No. Wa:</label>
			  <div class="col-sm-10">          
			    <input type="text" name="no_wa" class="form-control <?php echo form_error('no_wa') ? 'is-invalid':'' ?>" id="no_wa" placeholder="Enter No. Wa">
			  </div>
			  <div class="invalid-feedback">
				<?php echo form_error('no_wa') ?>
			  </div>
			</div>
			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-10">
			    <button type="submit" class="btn btn-success">Save</button>
			  </div>
			</div>
		</form>
		
		</div>
		<!-- /.container-fluid -->

		<div class="card-footer small text-muted">
			* required fields
		</div>

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
