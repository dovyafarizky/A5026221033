@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <title>View Data Mahasiswa</title>


    {{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
    <h3>View Data Mahasiswa</h3>

    <a href="/mahasiswa" class="btn btn-secondary"> Kembali</a>
    <br/>
    <br/>

    @foreach ($mahasiswa as $p)
        <form action="/mahasiswa/storemahasiswa" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-4 border">

                </div>
                <div class="col-sm-8 ">
                    <div class="form-group row">
                        <label for="NRP" class="col-sm-2 control-label">NRP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nrp" name="nrp" value="{{ $p->NRP }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->Nama }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $p->Jurusan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ipk" class="col-sm-2 control-label">IPK</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="ipk" name="ipk" value="{{ $p->IPK }}">
                        </div>
                    </div>
                    <div class="col-sm-8 align-items-center mx-auto"><a href='/mahasiswa' class="btn btn-success">OK</a></div>
                </div>
            </div>

        </form>
    @endforeach


@endsection
