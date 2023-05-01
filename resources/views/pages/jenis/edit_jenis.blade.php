<!-- Modal -->
<div class="modal fade" id="editJenisModal{{$data->id}}" tabindex="-1" aria-labelledby="editJenisModal" aria-hidden="true">
    <div class="modal-dialog">
      <form action="{{ url('/jenis/spasial/update/'.$data->id) }}" method="POST">
        @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editJenisModal">Tambah Kategori</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" class="form-control" id="id_spasial" name="id_spasial" value="{{$id_spasial}}">
            <div class="mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <input type="text" class="form-control" id="jenis" name="jenis" value="{{$data->jenis}}">
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label">Tampilkan ke halaman depan?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tampilkan" id="tampilkan1" value="1" {{$data->tampilkan == '1' ? 'checked' : ''}}>
                <label class="form-check-label" for="tampilkan1">
                  Ya
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tampilkan" id="tampilkan2" value="0" {{$data->tampilkan == '0' ? 'checked' : ''}}>
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