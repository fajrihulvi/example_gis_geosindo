<!-- Modal -->
<div class="modal fade" id="komponenModal{{$data->id}}" tabindex="-1" aria-labelledby="komponenModal"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="komponenModal">Komponen Inputan - {{$data->jenis}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @php
        $columns = [
        ["kolom" => "Nama Objek"],
        ["kolom" => "Nomor Objek"],
        ["kolom" => "Tanggal"],
        ["kolom" => "Provinsi"],
        ["kolom" => "Kota/Kabupaten"],
        ["kolom" => "Kecamatan"],
        ["kolom" => "Kelurahan/Desa"],
        ["kolom" => "Alamat"],
        ["kolom" => "Gambar"],
        ["kolom" => "Keterangan"],
        ["kolom" => "Koordinat"],
        ];
        @endphp
        <div class="alert alert-info">Komponen-komponen yang akan muncul ketika memasukkan data.</div>
        <p><span class="text-danger">*</span> (Required)</p>
        @foreach ($columns as $col)
        <div class="card mb-1">
          <h6 class="card-header">{{$col['kolom']}} <span class="text-danger">*</span></h6>
        </div>
        @endforeach
        <div class="alert alert-warning">Tambahkan komponen lainnya selain komponen diatas.</div>
        @foreach(App\Models\KolomLainnya::where('id_jenis_spasial',$data->id)->get() as $col)
        <div class="card mb-1">
          <h6 class="card-header">
            <div class="float-end">
              <a class="btn btn-warning btn-sm" href="#" role="button"><i class="bi bi-pencil"></i></a>
              <a class="btn btn-danger btn-sm" href="{{ url('/kolom/lainnya/delete/'.$col->id) }}" role="button"><i
                  class="bi bi-trash"></i></a>
            </div>
            {{$col->nama_kolom}} 
            <small>{{$col->tipe_input == 'OPTION' ? '('.$col->acuan.')' : ''}}</small>
            <span class="text-danger">{{$col->required =='1' ? '*' : ''}}</span> 
          </h6>
        </div>
        @endforeach
        <form action="{{ url('/kolom/lainnya/store') }}" method="POST">
          @csrf
          <input type="text" class="form-control" name="id_jenis_spasial" id="id_jenis_spasial" value="{{$kategori->id}}">
          <div class="row mb-2">
            <div class="col">
              <label for="kolom" class="form-label">Nama Kolom</label>
              <input type="text" class="form-control" name="kolom" id="kolom">
            </div>
            <div class="col">
              <label for="kolom" class="form-label">Tipe Inputan</label>
              <select class="form-control" name="tipe_input" id="tipe_input" onchange="chg_tipe_input()">
                <option value="">--Pilih--</option>
                <option value="TEXT">TEXT</option>
                <option value="OPTION">OPTION</option>
                <option value="FILE">FILE</option>
                <option value="DATE">DATE</option>
              </select>
            </div>
            <div class="col">
              <div><label for="kolom" class="form-label">Required?</label></div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="required_confirm" id="required_confirm1" value="1">
                <label class="form-check-label" for="required_confirm1">
                  Ya
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="required_confirm" id="required_confirm2" value="0">
                <label class="form-check-label" for="required_confirm2">
                  Tidak
                </label>
              </div>
            </div>
          </div>
          <div class="row d-none" id="formAcuan">
            @for ($i=0; $i < 3; $i++) <div class="col">
              <label for="kolom" class="form-label">Acuan {{$i+1}}</label>
              <input type="text" class="form-control" name="acuan[]" id="acuan">
          </div>
          @endfor
      </div>
      <div class="py-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<script>
  function chg_tipe_input() {
    tipe_input = document.getElementById("tipe_input").value;
    if (tipe_input == 'OPTION'){
      document.getElementById("formAcuan").classList.remove("d-none");
    } else {
      document.getElementById("formAcuan").classList.add("d-none");
    }
  }
</script>