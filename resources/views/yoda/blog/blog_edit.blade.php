@extends('layout.yoda')

@section('content')
  <div class="hp-main-layout-content">
    <div class="row mb-32 g-32">
      <div class="col flex-grow-1 overflow-hidden">
        <div class="row g-32">
          <div class="col-12">
            <h1 class="hp-mb-0">Edit Blog</h1>
          </div>

          <div class="col-12">
            <form class="row g-3 needs-validation" novalidate method="POST" enctype="multipart/form-data" action="">
              @csrf
              <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                    <h4 class="fw-semibold fs-18 mb-0">Form Edit Blog</h4>
                    <div class="d-sm-flex align-items-center">
                      <button type="submit"
                        class="border-0 mr-2 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                        <span class="d-block">
                          <i class="ri-check-line text-white"></i>
                          <span>Simpan</span>
                        </span>
                      </button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="validationCustom01" class="form-label label mb-0">Judul <small
                          class="text-danger">*</small></label>
                      <div class="position-relative">
                        <input type="text" class="form-control h-58 ps-5" id="validationCustom01"
                          required name="judul_blog" value="{{ $detail->judul_blog }}" placeholder="Masukkan judul Blog...">
                        <div class="invalid-feedback">
                          Judul Blog tidak boleh kosong
                        </div>
                        <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                          style="top: 13px !important;"></i>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label for="validationCustom01" class="form-label label mb-0">Kategori Blog <small
                          class="text-danger">*</small></label>
                      <div class="position-relative">
                        <input type="text" value="{{ $detail->kategori_blog }}" class="form-control h-58 ps-5" id="validationCustom01" value=""
                          name="kategori" placeholder="Masukkan nama client">
                        <div class="invalid-feedback">
                          Kategori Blog tidak boleh kosong
                        </div>
                        <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                          style="top: 13px !important;"></i>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label for="validationCustom01" class="form-label label mb-0">Tanggal Blog <small
                          class="text-danger">*</small></label>
                      <div class="position-relative">
                        <input type="date" value="{{ $detail->date }}" class="form-control h-58 ps-5" id="validationCustom01" value=""
                          name="tgl" placeholder="Masukkan nama client">
                        <div class="invalid-feedback">
                          Tanggal Blog tidak boleh kosong
                        </div>
                        <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                          style="top: 13px !important;"></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-12 mt-3">
                          <label for="validationCustom01" class="form-label label mb-0">Isi Deskripsi Singkat Blog Untuk
                            Ditampilkan <small class="text-danger">*</small></label>
                          <textarea name="deskripsi_singkat" class="form-control h-58 ps-5" required>{{ old('deskripsi_singkat') ?? $detail->deskripsi_singkat }}</textarea>
                        </div>
                        <div class="col-md-12 mt-3">
                          <label for="validationCustom01" class="form-label label mb-0">Isi Deskripsi Blog <small
                              class="text-danger">*</small></label>
                          <textarea name="deskripsi_blog" class="form-control h-58 ps-5"  style="width: 495px; height: 270px;"" required>{{ old('deskripsi') ?? $detail->deskripsi }}</textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mt-3">
                          <label for="thumbnail" class="label">Foto Thumbnail (350x205)</label>
                          <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                            <div class="product-upload">
                              <label for="file-unduh" class="file-unduh mb-0">
                                <span class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                  <img id="blahi" src="{{ asset('thumbnail_blog/' . $detail->thumbnail_blog) }}"
                                    alt="your image" />
                                </span>
                              </label>
                              <input id="file-unduh" name="thumbnail_blog" onchange="viewURL(this);" type="file"
                                hidden>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mt-3">
                          <label for="foto_project" class="label">Foto Konten Blog (825x550)</label>
                          <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                            <div class="product-upload">
                              <label for="file-upload" class="file-upload mb-0">
                                <span class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                  <img id="blah" src="{{ asset('foto_blog/' . $detail->foto_blog) }}"
                                    alt="your image" />
                                </span>
                              </label>
                              <input id="file-upload" name="foto_blog" onchange="readURL(this);" type="file" hidden>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah')
            .attr('src', e.target.result);
        };


        reader.readAsDataURL(input.files[0]);
      }
    }

    function viewURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blahi')
            .attr('src', e.target.result);
        };


        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
@endsection
