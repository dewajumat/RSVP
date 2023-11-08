@extends('layouts.master')
@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4" id="printableArea">
                    <br>
                    <div class="row">
                        <div class="col-lg-2 col-md-6">
                            <div class="card text-white mb-4" style="background:#2cc185; border-color:rgb(255, 255, 255)">
                                <div class="card-body" style="font-size: 16px; font-weight:bold">{{ $date = date('F Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4" style="width: 95%;margin-left: auto;margin-right: auto; margin-top:20px">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pemeliharaan
                        </div>
                        <div class="card-body">
                            <table style="width:100% ; margin-left: auto;margin-right: auto; margin-top:10px" id="" class="table table-striped table-bordered table-sm " cellspacing="0" >
                            <thead>
                                <tr>
                                <tr class="text-center " id="table-header">
									<th scope="col">No. Pintu</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pemeliharaan_arr as $vm)
                                <tr class="text-center align-middle">
                                    <td>{{ $vm->no_pintu }}</td>
                                    <td>{{ $vm->tgl }}</td>
                                    <td>{{ $vm->nama_brg}}</td>
                                    <td>{{ $vm->jmlh_brg }}</td>
                                    <td>@currency($vm->hrg_brg)</td>
                                    <td>@currency($vm->total_hrg)</td>
                            @endforeach
                            </tbody>
                            </table>
                            <table style="width:100% ; margin-left: auto;margin-right: auto; margin-top:10px" class="table table-striped table-bordered table-sm">
                                <tr>
                                    <th style="color: white; width: 75%" id="green">Total Pemeliharaan</th>
                                    <td style="width: 16.5%; text-align:center">@currency($total_pemeliharaan)</td>
                                </tr> 
                            </table>
                            <div style="float: right;">
                            <button class="btn d-print-none" style="background: #2cc185">
                                <a href="/vkontrakan/mcreate" style="color: white">Tambah Data</a>
                            </button>
                            </div>
                            
                        </div>
                    </div>
                    <div style="text-align: center">
                        <button style="color:white; width:5cm" class="btn d-print-none" id="green" onclick="printDiv('printableArea')"><strong>Print</strong></button>
                    </div>
            </main>
        </div>
        <script>
            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
        </script>
@endsection