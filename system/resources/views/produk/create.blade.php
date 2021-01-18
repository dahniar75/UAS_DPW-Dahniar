@extends('base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data Produk
					</div>
					<div class="card-body">
						<form action="{{url('produk')}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama">
							</div>
							<div class="row no-gutters">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Harga</label>
										<input type="text" class="form-control" name="harga">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Berat</label>
										<input type="text" class="form-control" name="berat">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Stok</label>
										<input type="text" class="form-control" name="stok">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Gambar</label>
								<input type="file" class="form-control" name="gambar">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Deskripsi</label>
								<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
							</div>
							<button class="btn btn-dark float-right">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection