<!-- Modal -->
<div class="modal fade" id="addDataSpasialModal" tabindex="-1" aria-labelledby="addDataSpasialModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ url('/data/spasial/store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addDataSpasialModal">Tambah Data Spasial - {{$jenis->jenis}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="id_jenis_spasial" name="id_jenis_spasial"
                        value="{{$id_jenis_spasial}}">
                    <div class="mb-3">
                        <label for="nomor_objek" class="form-label">Nomor Objek</label>
                        <input type="text" class="form-control" id="nomor_objek" name="nomor_objek">
                    </div>
                    <div class="mb-3">
                        <label for="nama_objek" class="form-label">Nama Objek</label>
                        <input type="text" class="form-control" id="nama_objek" name="nama_objek">
                    </div>
                    <div class="mb-3">
                        <label for="id_provinsi" class="form-label">Provinsi</label>
                        <select class="form-control" id="id_provinsi" name="id_provinsi">
                            <option value="32">JAWA BARAT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_kabupaten" class="form-label">Kota/Kabupaten</label>
                        <select class="form-control" id="id_kabupaten" name="id_kabupaten">
                            <option value="3201">KABUPATEN BOGOR</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_kecamatan" class="form-label">Kecamatan</label>
                        <select class="form-control" id="id_kecamatan" name="id_kecamatan">
                            <option value="3201010">NANGGUNG</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_desa" class="form-label">Desa/Kelurahan</label>
                        <select class="form-control" id="id_desa" name="id_desa">
                            <option value="3201010001">MALASARI</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="koordinat" class="form-label">Koordinat</label>
                        <input type="text" class="form-control" id="koordinat" name="koordinat"
                            value='[{"latitude":-6.604337782510214,"longitude":106.79662471923827,"altitude":0,"altitudeReference":-1}]'>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                    @foreach($kolom as $col)
                    @if($col->tipe_input == 'OPTION')
                    <div class="mb-3">
                        <label for="{{$col->slug}}" class="form-label">{{$col->nama_kolom}}</label>
                        <select class="form-control" id="{{$col->slug}}" name="{{$col->slug}}" {{$col->required
                            == '1' ? 'required' : ''}}>
                            <option value="">-- Pilih --</option>
                            @php
                            $acuan = explode(',',$col->acuan);
                            @endphp
                            @foreach ($acuan as $item)
                            <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                    @else
                    <div class="mb-3">
                        <label for="{{$col->slug}}" class="form-label">{{$col->nama_kolom}}</label>
                        <input type="{{$col->tipe_input}}" class="form-control" id="{{$col->slug}}"
                            name="{{$col->slug}}" {{$col->required == '1' ? 'required' : ''}}>
                    </div>
                    @endif
                    @endforeach
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Tampilkan ke halaman depan?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tampilkan" id="tampilkan1" value="1">
                            <label class="form-check-label" for="tampilkan1">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tampilkan" id="tampilkan2" value="0">
                            <label class="form-check-label" for="tampilkan2">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </form>
    </div>
</div>
</div>