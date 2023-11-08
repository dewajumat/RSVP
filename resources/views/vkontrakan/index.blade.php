@extends('layouts.master')
@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <br>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card text-white mb-4" style="background:#2cc185">
                                <div class="card-body">Pintu Tersedia</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ 20-$total_data }} Pintu</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Penghuni Rumah Sewa
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-sm js-sort-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <tr class="text-center " id="table-header">
                                    <th scope="col" class="js-sort-number">No. Pintu</th>
                                    <th scope="col" class="js-sort-asc">Nama Penghuni</th>
                                    <th scope="col" style="vertical-align: middle">Tarif</th>
                                    <th scope="col" class="js-sort-date">Bulan Masuk</th>
                                    <th scope="col" class="js-sort-asc">Status Pembayaran</th>
                                    <th scope="col" style="vertical-align: middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_penghuni as $dp)   
                                <tr class="text-center align-middle">
                                <td>{{ $dp->no_pintu }}</td>
                                <td>{{ $dp->nama }}</td>
                                <td>@currency($dp->tarif)</td>
                                <td >{{date("d M Y",strtotime($dp->tgl_msk))}}</td>
                                <td>{{ $dp->stat_pembayaran }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $dp->no_pintu }}">
                                            Detail
                                          </button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button class="btn" style="background-color: #34be76; width:60px; height:35px; padding: 0 0 1px">
                                            <a href="/vkontrakan/{{ $dp->no_pintu }}/edit" style="color: white; text-decoration: none">Edit</a>
                                            </button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button class="btn btn-warning" style="width:80px; height:35px; padding: 0 0 1px">
                                            <a href="https://api.whatsapp.com/send/?phone={{ $dp->no_hp }}&text=Halo+penghuni%2C+tenggat+waktu+pembayaran+anda+jatuh+pada+hari+ini.%0ASilahkan+lakukan+pembayaran%0ATerima+Kasih.&app_absent=0" style="color: white; text-decoration: none">Notify</a>
                                            </button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="/{{ $dp->no_pintu }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger" style="width:80px; height:35px; padding:0 10px 1px" type="submit" value="Delete" onclick="return confirm('sure ?')">
                                        </form>
                                    </div>
                                </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $dp->no_pintu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Data Penghuni</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            Nama 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;{{ $dp->nama }}
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            No. Handphone 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;{{ $dp->no_hp }}
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            Email 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;{{ $dp->email }}
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            KK 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;<?php 
                                                            $chck = $dp->kk;
                                                            if(!empty($chck)) {
                                                                echo 'Sudah diupload';
                                                            }
                                                            else {
                                                                echo 'Belum diupload';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            KTP 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;<?php 
                                                            $chck = $dp->ktp;
                                                            if(!empty($chck)) {
                                                                echo 'Sudah diupload';
                                                            }
                                                            else {
                                                                echo 'Belum diupload';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            Tanggal Masuk 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;{{ $dp->tgl_msk }}
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            Tarif 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;@currency($dp->tarif)
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            Terbayar 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;@currency($dp->terbayar)
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom: 5px">
                                                        <div style="float: left;"> 
                                                            Tertunggak 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;@currency($dp->kekurangan)
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div style="float: left;"> 
                                                            Status Pembayaran 
                                                        </div>
                                                        <div style="margin-left: 35%;"> 
                                                            :&ensp;{{ $dp->stat_pembayaran }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn" style="background-color: #34be76; color:white" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>  
                                    </div>
                                </div> 
                            @endforeach
                            </tbody>
                            </table>
                            <div style="text-align: right">
                            <button class="btn" style="background: #2cc185; text-align:right">
                                <a href="/vkontrakan/create" style="color: white">Tambah Penghuni</a>
                            </button>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
@endsection