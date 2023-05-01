<!-- Modal -->
<div class="modal fade" id="detailSpasialModal{{$data->id}}" tabindex="-1" aria-labelledby="detailSpasialModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="detailSpasialModal">{{$data->nama_objek}} ({{$data->nomor_objek}})</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col"><b>Nomor Objek</b></div>
                <div class="col">{{$data->nomor_objek}}</div>
            </div>
            <div class="row">
                <div class="col"><b>Nama Objek</b></div>
                <div class="col">{{$data->nama_objek}}</div>
            </div>
            <div class="row">
                <div class="col"><b>Alamat</b></div>
                <div class="col">{{$data->alamat}}</div>
            </div>
            <div class="row">
                <div class="col"><b>Kelurahan/Desa</b></div>
                <div class="col">{{$data->id_desa}}</div>
            </div>
            <div class="row">
                <div class="col"><b>Kecamatan</b></div>
                <div class="col">{{$data->id_kecamatan}}</div>
            </div>
            <div class="row">
                <div class="col"><b>Kota/Kabupaten</b></div>
                <div class="col">{{$data->id_kabupaten}}</div>
            </div>
            <div class="row">
                <div class="col"><b>Provinsi</b></div>
                <div class="col">{{$data->id_provinsi}}</div>
            </div>
            <div class="row">
                <div class="col"><b>Koordinat</b></div>
                <div class="col">{{$data->koordinat}}</div>
            </div>
            @php
            $lainnya = json_decode($data->lainnya);
            @endphp
            @foreach($lainnya as $key => $value)
            <div class="row">
                <div class="col"><b>{{$key}}</b></div>
                <div class="col">{{$value}}</div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>