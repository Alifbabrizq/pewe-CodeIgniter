<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<div class="container-fluid mt--7">
	<!-- Table -->
	<div class="row">
		<div class="col">
			<div class="card shadow">
				<div class="card-header border-0">
        <h3 class="mb-0">My Project</h3>
        <button style="margin-left:90%;" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_tambah">Create Project</button>
				</div>
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Project</th>
								<th scope="col">Deskripsi</th>
								<th scope="col">Deadline</th>
								<th scope="col">Budget</th>
								<th scope="col">Status</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($project as $d ) : ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $d->nama_project ?></td>
								<td style="white-space: nowrap; width: 10px; overflow: hidden; text-overflow: ellipsis;"><?= $d->deskripsi ?></td>
								<td><?= $d->batas_pengerjaan ?></td>
								<td><?= $d->budget ?></td>
								<td><?= $d->status ?></td>
								<td>
									<a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_ubah"
										onclick="prepare_ubah_produk(<?= $d->id_project ?>)">Ubah</a>
									<a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus"
										onclick="prepare_hapus_produk(<?= $d->id_project ?>)">hapus</a>
								</td>
							</tr>
							<?php $no++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="card-footer py-4">
					<nav aria-label="...">
						<ul class="pagination justify-content-end mb-0"></ul>
					</nav>
				</div>
			</div>
		</div>
	</div>



  <div id="modal_tambah" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Create Project</h4>
			</div>
			<form action="<?php echo base_url(); ?>index.php/Project/store" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<input type="text" class="form-control" placeholder="Nama Project" name="nama_project">
					<br>
					<textarea placeholder="Deskripsi" name="deskripsi" class="form-control"
					style="height: 100px;"></textarea>
					<br>
					<input type="date" class="form-control" placeholder="Deadline" name="batas_pengerjaan">
					<br>
					<input type="text" class="form-control" placeholder="Budget" name="budget">
					<br>
					<!-- <input type="date" class="form-control" placeholder="Status" name="status"> -->
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="submit" value="SIMPAN">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>

	</div>
</div>
