@extends('backend.backend_master')

@section('main_backend')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Edit Surat</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin_akta-kelahiran.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')

                <p><b>Data Pemohon</b></p>

                <div class="form-group">
                    <label for="no_surat">No Surat</label>
                    <input type="text" name="no_surat" id="no_surat" class="form-control" value="{{ $data->no_surat }}">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $data->no_hp }}" required>
                </div>

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="{{ $data->nik }}" required>
                </div>

                <div class="form-group">
                    <label for="tempat_tanggal_lahir">Tempat/Tanggal Lahir</label>
                    <input type="text" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" class="form-control" value="{{ $data->tempat_tanggal_lahir }}" required>
                </div>

                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{ $data->pekerjaan }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $data->alamat }}" required>
                </div>

                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" name="agama" id="agama" class="form-control" value="{{ $data->agama }}" required>
                </div>

                <p><b>Data Usaha</b></p>

                <div class="form-group">
                    <label for="nama_anak">Nama Anak</label>
                    <input type="text" name="nama_anak" id="nama_anak" class="form-control" value="{{ $data->nama_anak }}" required>
                </div>

                <div class="form-group">
                    <label for="ttl_anak">Tempat Tanggal Lahir Anak</label>
                    <input type="text" name="ttl_anak" id="ttl_anak" class="form-control" value="{{ $data->ttl_anak }}" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                    <input type="text" name="jenis_kelamin_anak" id="jenis_kelamin_anak" class="form-control" value="{{ $data->jenis_kelamin_anak }}" required>
                </div>

                <div class="form-group">
                    <label for="keterangan_lain">Keterangan Lain</label>
                    <input type="text" name="keterangan_lain" id="keterangan_lain" class="form-control" value="{{ $data->keterangan_lain }}" required>
                </div>
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea name="catatan" id="catatan" class="form-control">{{ $data->catatan }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
