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

		<!-- DataTables -->
		<div class="card mb-3">
			<div class="card-header">
				<a href="<?php echo site_url('admin/users/add') ?>"><i class="fas fa-plus"></i> Add New</a>
			</div>
			<div class="card-body">

				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>No. Wa</th>
								<th>Created_at</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ((array) $subscribers as $d): ?>
							<tr>
								<td width="150">
									<?php echo $d->name; ?>
								</td>
								<td>
									<?php echo $d->email; ?>
								</td>
								<td>
									<?php echo $d->no_wa; ?>
								</td>
								<td>
									<?php echo $d->created_at; ?>
								</td>
								<td width="250">
									<a href="<?php echo site_url('admin/users/edit/'.$d->id) ?>"
									 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
									<a onclick="deleteConfirm('<?php echo site_url('admin/users/delete/'.$d->id) ?>')"
									 href="#" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
								</td>
							</tr>
							<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>

		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>

<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>
</html>
