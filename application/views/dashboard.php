<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<button type="button" class="btn btn-primary" data-toggle='modal' data-target='#modal_create_data'>Add Project</button>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Project</th>
            <th>Deskripsi</th>
            <th>Batas Pengerjaan</th>
            <th>Budget</th>
            <th>Status</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($data as $d ) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $d->nama_project ?></td>
                <td><?= $d->deskripsi ?></td>
                <td><?= $d->batas_pengerjaan ?></td>
                <td><?= $d->budget ?></td>
                <td><?= $d->status ?></td>
            </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>


<div id="modal_edit_data" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Create Project</h4>
			</div>
            <form action="<?php echo base_url(); ?>index.php/Project/store" method="post" enctype="multipart/form-data"
				class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern">
				<div class="modal-body">
                    <input type="hidden" name="id_costumer">
					<div class="form-group">
						<input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" placeholder="Nama project"
							name="nama_project">
					</div>
					<div class="form-group">
                    <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
					</div>
                    <div class="form-group">
						<input type="date" class="form-control1 ng-invalid ng-invalid-required ng-touched" placeholder="Batas Pengerjaan"
							name="batas_pengerjaan">
					</div>
                    <div class="form-group">
						<input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched" placeholder="budget"
							name="budget">
					</div>
					<!-- <div class="form-group">
						<select name="status" class="form-control1 ng-invalid ng-invalid-required ng-touched">
						</select>
					</div> -->
				</div>
                <input type="hidden" name="status">
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="submit" value="SIMPAN">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>

