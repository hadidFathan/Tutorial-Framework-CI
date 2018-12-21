<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Edit Anggota</h3>
				</div>
				<!-- box header -->
				<div class="box-body">
					<form action="<?=site_url('anggota/update');?>" method="post" accept-charset="utf-8">
						<input type="hidden" name="id_anggota" value="<?=$show->id_anggota;?>">
						<div class="box-body">
							<div class="form-group">
								<label>Nama Anggota</label>
								<input type="text" name="nama anggota" class="form-control" value="<?=$show->nama_anggota;?>"
								placeholder="Masukan Nama Anggota" required="required">
							</div>
							<div class="form-group">
								<label>No Telepon</label>
								<input type="number" class="form-control" value="<?=$show->no_telp;?>" name="no_telp" min="0">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" value="<?=$show->alamat;?>" placeholder="Masukan alamat" required="required">
								
							</div>
							<div class="form-group">
								<label for="exampleinputtext1">Email</label>
								<input type="text" name="email" class="form-control" value="<?=$show->email;?>" placeholder="Masukan email" required="required">
							</div>
							<div class="form-group">
								<label for="exampleinputtext1">Password</label>
								<input type="text" name="password" class="form-control" value="<?=$show->password;?>" placeholder="Masukan password" required="required">
							</div>
						</div>
						<div class="box-footer">
							<button type="button" class="btn btn-default"> <i class="fa fa-arrow-circle-left"></i>Batal</button>
							<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-repeat"></i>Update </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>