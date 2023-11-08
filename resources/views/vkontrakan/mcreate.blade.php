@extends('layouts.master')
@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <br>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fab fa-wpforms me-1"></i>
                            Form Pemeliharaan
                        </div>
                        <div class="card-body">
                            <form action="/vkontrakan/mstore" style="width: 30%" class="container" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Pintu</label>
                                    <br>
                                    <select name="no_pintu" style="width: 75px; height:35px;" >
                                      @for ($i=1; $i<=20; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                      @endfor
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                  <label>Tanggal</label>
                                  <input type="date" name="tgl" class="form-control" id="" aria-describedby="" placeholder="" required oninvalid="this.setCustomValidity('Silahkan masukan tanggal')" oninput="setCustomValidity('')">
                                </div>
                                <br>
                                <div class="form-group">
                                  <label>Nama Barang</label>
                                  <input type="text" name="nama_brg" class="form-control" id="" aria-describedby="" placeholder="Gagang Pintu" required oninvalid="this.setCustomValidity('Silahkan masukan nama barang')" oninput="setCustomValidity('')">
                                </div>
                                <br>
                                <div class="form-group">
                                  <label>Jumlah</label>
                                  <input type="number" name="jmlh_brg" class="form-control" id="" placeholder="5" required oninvalid="this.setCustomValidity('Silahkan masukan jumlah barang dengan benar dan berupa angka')" oninput="setCustomValidity('')">
                                </div>
                                <br>
                                <div class="form-group">
                                  <div>
                                    <label>Harga Satuan</label>
                                    <div style="width:105%; display:inline-flex">
                                      <span class="input-group-text" style="width: 10%; justify-content:center">Rp</span>
                                      <input style="text-align: right; width:85%" type="number" name="hrg_brg" class="form-control" id="" aria-describedby="" placeholder="5xxx" style="text-align: right" required oninvalid="this.setCustomValidity('Silahkan masukan harga barang per pcs dengan benar dan berupa angka')" oninput="setCustomValidity('')">
                                    </div>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
@endsection
