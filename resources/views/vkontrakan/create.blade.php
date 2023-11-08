@extends('layouts.master')
@section('content')
      <div id="layoutSidenav_content">
          <main>
              <div class="container-fluid px-4">
                  <br>
                  <div class="card mb-4">
                      <div class="card-header">
                          <i class="fab fa-wpforms me-1"></i>
                          Form Tambah Penghuni
                      </div>
                      <div class="card-body">
                          <form action="/vkontrakan/store" style="width: 30%" class="container" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                  <label for="exampleInputEmail1">No. Pintu</label>
                                  <br>
                                  <select name="no_pintu" style="width: 75px; height:35px;" >
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
                                <label for="exampleInputEmail">Nama</label>
                                <input type="text" name="nama" class="form-control" id="" aria-describedby="" placeholder="Nama" required oninvalid="this.setCustomValidity('Silahkan masukan nama dengan benar')" oninput="setCustomValidity('')">
                              </div>
                              <br>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Handphone</label>
                                <input style="width: 100%" type="number" name="no_hp" class="form-control" id="" placeholder="62812xxxxxxxxx" required oninvalid="this.setCustomValidity('Silahkan masukan nomor handphone dengan benar dan berupa angka')" oninput="setCustomValidity('')">
                              </div>
                              <br>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email" required oninvalid="this.setCustomValidity('Silahkan masukan email dengan benar')" oninput="setCustomValidity('')">
                              </div>
                              <br>
                              <div class="mb-3">
                                <label for="image" class="form-label">Kartu Keluarga</label>
                                <input class="form-control" type="file" name="kk" id="">
                              </div>
                              <br>
                              <div class="mb-3">
                                <label for="image" class="form-label">Kartu Tanda Penduduk</label>
                                <input class="form-control" type="file" name="ktp" id="">
                              </div>
                              <br>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Masuk</label>
                                <input type="date" name="tgl_msk" class="form-control" id="" aria-describedby="" placeholder=""required oninvalid="this.setCustomValidity('Silahkan masukan tanggal')" oninput="setCustomValidity('')">
                              </div>
                              <br>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Tarif</label>
                                <input type="number" name="tarif" class="form-control" id="rupiah" aria-describedby="" placeholder="5xxxxx" required oninvalid="this.setCustomValidity('Silahkan masukan tarif dan pastikan masukan berupa angka')" oninput="setCustomValidity('')">
                              </div>
                              <br>
                              <div class="form-group">
                                <div>
                                  <label for="exampleInputEmail1">Terbayar</label>
                                  <div style="width:105%; display:inline-flex">
                                    <span class="input-group-text" style="width: 10%; justify-content:center">Rp</span>
                                    <input type="number" name="terbayar" class="form-control " id="angka" aria-describedby="" placeholder="" style="text-align: right; width:85%" required oninvalid="this.setCustomValidity('Silahkan masukan pembayaran dan pastikan masukan berupa angka')" oninput="setCustomValidity('')">
                                  </div>
                                </div>
                              </div>
                                <br>
                                <div class="form-group">
                                  <div>
                                    <label for="exampleInputEmail1">Kekurangan</label>
                                    <div style="width:105%; display:inline-flex">
                                      <span class="input-group-text" style="width: 10%; justify-content:center">Rp</span>
                                      <input type="number" name="kekurangan" class="form-control " id="angka" aria-describedby="" placeholder="" style="text-align: right; width:85%" required oninvalid="this.setCustomValidity('Silahkan masukan kekurangan dan pastikan masukan berupa angka')" oninput="setCustomValidity('')">
                                    </div>
                                  </div>
                                </div>
                                  <br>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Status Pembayaran</label>
                                <div>
                                  <select name="stat_pembayaran" style="width:100%; height: 35px">
                                    <option value="" selected="selected" hidden="hidden">Status Pembayaran</option>
                                    <option value="Belum Bayar">Belum Bayar</option>
                                    <option value="Terhutang">Terhutang</option>
                                    <option value="Lunas">Lunas</option>
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
