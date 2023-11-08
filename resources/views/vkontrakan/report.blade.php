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
                    <div class="card mb-4" id="printableArea">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Laporan Keuangan
                        </div>
                        <div class="card-body">
                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <tr class="text-center " id="table-header">
                                    <th scope="col" class="js-sort-date">Tanggal</th>
                                    <th scope="col" class="js-sort-asc">Keterangan</th>
                                    <th scope="col" class="js-sort-number">Pemasukan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan_arr as $vr)
                                <tr class="text-center align-middle">
                                    <td>{{ $vr->tgl }}</td>
                                    <td>{{ $vr->ket}}</td>
                                    <td>@currency($vr->terbayar)</td>
                            @endforeach
                            </tbody>
                            </table>
                            <table style="width:100% ; margin-left: auto;margin-right: auto; margin-top:10px" class="table table-striped table-bordered table-sm">
                                <tr>
                                    <th style="color: white; width: 75%" id="green">Pembayaran (Pemasukan)</th>
                                    <td style="width: 16%; text-align:center">@currency($total_pembayaran)</td>
                                </tr> 
                            </table>
                            <table style="width:100% ; margin-left: auto;margin-right: auto; margin-top:10px" class="table table-striped table-bordered table-sm">
                                <tr>
                                    <th style="color: white; width: 75%" id="green">Pemeliharaan (Pengeluaran)</th>
                                    <td style="width: 16%; text-align:center">@currency($total_pemeliharaan)</td>
                                </tr> 
                            </table>
                            <table style="width:100% ; margin-left: auto;margin-right: auto; margin-top:10px" class="table table-striped table-bordered table-sm">
                                <tr>
                                    <th style="color: white; width: 75%" id="green">Total Keuangan</th>
                                    <td style="width: 16%; text-align:center">@currency($total_keuangan)</td>
                                </tr> 
                            </table>
                        </div>
                    </div>
                    <div style="text-align: center">
                        <button style="color:white; width:5cm" class="btn d-print-none" id="green" onclick="printDiv('printableArea')"><strong>Print</strong></button>
                    </div>
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