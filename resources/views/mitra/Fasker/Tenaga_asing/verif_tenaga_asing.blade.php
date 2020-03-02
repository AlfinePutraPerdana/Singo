@extends('layouts.menufasker')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekomendasi Tenaga Kerja Asing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Verifikasi Tenaga Kerja Asing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rekomendasi Tenaga Asing</h3>

                        <div class="card-tools">
                            <form action="/verif-tenaga-asing" method="GET">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 350px;">
                        <form action="">
                            <table class="table table-head-fixed">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Asal Negara</th>
                                    <th>Mitra</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($tenagas as $tenaga)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$tenaga->nama}}</td>
                                    <td>{{$tenaga->kewarganegaraan}}</td>
                                    <td>{{$tenaga->instansi->nama}}</td>
                                    <td><a href="/verif-tenaga-asing/{{$tenaga->id}}/verifikasi" class="btn btn-sm btn-primary"><i class="far fa-check-circle"></i> <b>Verifikasi</b></a>
                                    @endforeach
                                </tr>
                                        <div class="modal fade" id="pratinjau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Pengajuan Tamu Asing</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="nama">Nama</label>
                                                                    <p>Andy Woods</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama">Tempat Lahir</label>
                                                                    <p>Bogor</p>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="">Tanggal Lahir</label>
                                                                        <p>31-10-1967</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="negara">Asal Negara</label>
                                                                    <p>Canada</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Passport">Nomor Passport</label>
                                                                    <p>12345689</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Masa Berlaku Passport</label>
                                                                    <div class="input-group">
                                                                        <p>30-12-2020  s/d 30-12-2022</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Instansi</label>
                                                                    <p>UNESCO</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Tujuan Kegiatan</label>
                                                                    <p>Mengawasi Pembangunan Jembatan Kampung</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jabatan">Jabatan</label>
                                                                    <p>Supervisor Lapangan</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="file">Lampirkan Foto</label>
                                                                    <br />

                                                                        <img src="{{asset('assets_fas/dist/img/user8-128x128.jpg')}}">

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="file">Lampirkan Passport</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <p>Passport.PDF</p><button><i class="fas fa-file-download"></i>  Unduh</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="file">Lampirkan CV</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <p>CV.PDF</p><button><i class="fas fa-file-download"></i>  Unduh</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="file">Lampirkan Jobdesc</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <p>Jobdesc.PDF</p><button><i class="fas fa-file-download"></i>  Unduh</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Lama Kegiatan</label>
                                                                    <div class="input-group">
                                                                        <p>01-01-2021 s/d 01-01-2022</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Keterangan Koreksi :</label>
                                                                    <br />
                                                                    <textarea placeholder="Tuliskan Hal Yang Perlu Dikoreksi" style="width:100%; resize: none;">

                                                                    </textarea>
                                                                </div>
                                                            <!-- /.card-body -->
                                                            <div class="card-footer">
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal"data-toggle="tooltip" title="Ajukan Perbaikan Data"><i class="fas fa-ban"></i>  Revisi</button>
                                                                <button type="submit" class="btn btn-success"  data-toggle="tooltip" title="Verifikasi Tamu"><i class="far fa-check-square"></i>  Verifikasi</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </tbody>
                            </table>
                        </form>
                    </div>
                        <div class="card-footer clearfix">
                            <div class="col-md-4 float-left">
                                {{-- <a href="/master-tamu" role="button" class="btn btn-block btn-primary"><i class="far fa-check-square"></i>   Verifikasi</a> --}}
                            </div>
                            {{ $tenagas->links() }}
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
