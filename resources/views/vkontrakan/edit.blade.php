@extends('layouts.master')
@section('content')
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<br>
					<div class="card mb-4">
						<div class="card-header">
							<i class="fab fa-wpforms me-1"></i>
							Edit Data Penghuni
						</div>
						<div class="card-body">
							<form action="/vkontrakan/{{ $primary_key_penghuni->no_pintu }}" style="width: 30%" class="container" method="POST" enctype="multipart/form-data">
								@method('put')
								@csrf
								<div class="form-group">
									<label for="exampleInputEmail1">No. Pintu</label>
									<br>
									<select name="no_pintu" >
										<option value="{{$primary_key_penghuni->no_pintu}}">{{$primary_key_penghuni->no_pintu}}</option>
										@for ($i=1; $i<=20; $i++)
										@if (in_array($i,$nopintu_arr ))
										  @continue;
										@else
										<option value="{{ $i }}">{{ $i }}</option>   
										@endif
									  @endfor
									</select>
								</div>
								<br>
								<div class="form-group">
								<label for="exampleInputEmail1">Nama</label>
								<input type="text" name="nama" class="form-control" id="" aria-describedby="" placeholder="Nama" value="{{$primary_key_penghuni->nama}}">
								</div>
								<br>
								<div class="form-group">
								<label for="exampleInputPassword1">Nomor Handphone</label>
								<input type="text" name="no_hp" class="form-control" id="" placeholder="0812xxxxxxxxx" value="{{$primary_key_penghuni->no_hp}}">
								</div>
								<br>
								<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="text" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email" value="{{$primary_key_penghuni->email}}">
								</div>
								<br>
								<div class="mb-3">
								  <label for="image" class="form-label">Kartu Keluarga</label>
								  <input class="form-control" type="file" name="kk" id="" value="{{$primary_key_penghuni->kk}}">
								</div>
								<br>
								<div class="mb-3">
								  <label for="image" class="form-label">Kartu Tanda Penduduk</label>
								  <input class="form-control" type="file" name="ktp" id="" value="{{$primary_key_penghuni->ktp}}">
								</div>
								<br>
								<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Masuk</label>
								<input type="date" name="tgl_msk" class="form-control" id="" aria-describedby="" placeholder="dd/mm/yyyy" value="{{$primary_key_penghuni->tgl_msk}}">
								</div>
								<br>
								<div class="form-group">
								<label for="exampleInputEmail1">Tarif</label>
								<input type="text" name="tarif" class="form-control" id="" aria-describedby="" placeholder="5xxxxx" value="{{$primary_key_penghuni->tarif}}">
								</div>
								<br>
								<div class="form-group">
								<label for="exampleInputEmail1">Terbayar</label>
								<input type="text" name="terbayar" class="form-control" id="" aria-describedby="" placeholder="5xxxxx" value="{{$primary_key_penghuni->terbayar}}">
								</div>
								<br>
								<div class="form-group">
									<label for="exampleInputEmail1">Kekurangan</label>
									<input type="text" name="kekurangan" class="form-control" id="" aria-describedby="" placeholder="5xxxxx" value="{{$primary_key_penghuni->kekurangan}}">
									</div>
									<br>
								<div class="form-group">
								<label for="exampleInputEmail1">Status Pembayaran</label>
									<div>
										<select name="stat_pembayaran" style="width:100%; height: 35px">
										<option value="Belum Bayar" @if($primary_key_penghuni->stat_pembayaran == "Belum Bayar") selected @endif>Belum Bayar</option>
										<option value="Terhutang"@if($primary_key_penghuni->stat_pembayaran == "Terhutang") selected @endif>Terhutang</option>
										<option value="Lunas"@if($primary_key_penghuni->stat_pembayaran == "Lunas") selected @endif>Lunas</option>
										</select>
									</div>
								</div>
								<br>
								<div class="" style="text-align: right">
								<button type="submit" class="btn" style="background: #2cc185; color:white; width:100%">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</main>
		</div>
@endsection
