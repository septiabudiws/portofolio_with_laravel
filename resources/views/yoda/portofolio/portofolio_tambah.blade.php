@extends('layout.yoda')

@section('content')
  <div class="hp-main-layout-content">
    <div class="row mb-32 g-32">
      <div class="col flex-grow-1 overflow-hidden">
        <div class="row g-32">
          <div class="col-12">
            <h1 class="hp-mb-0">Tambah Portofolio</h1>
          </div>

          <div class="col-12">
            <form class="row g-3 needs-validation" novalidate method="POST" enctype="multipart/form-data" action="">
              @csrf
              <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                    <h4 class="fw-semibold fs-18 mb-0">Form Tambah Portofolio</h4>
                    <div class="d-sm-flex align-items-center">
                      <button type="submit"
                        class="border-0 mr-2 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                        <span class="d-block">
                          <i class="ri-check-line text-white"></i>
                          <span>Simpan</span>
                        </span>
                      </button>
                      &nbsp;
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="validationCustom01" class="form-label label">Judul <small
                          class="text-danger">*</small></label>
                      <div class="position-relative">
                        <input type="text" class="form-control h-58 ps-5" id="validationCustom01" value=""
                          required name="nama_project" placeholder="Masukkan nama/judul Project...">
                        <div class="invalid-feedback">
                          Judul Berita tidak boleh kosong
                        </div>
                        <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                          style="top: 13px !important;"></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label for="validationCustom01" class="form-label label">Nama Client <small
                            class="text-danger">*</small></label>
                        <div class="position-relative">
                          <input type="text" class="form-control h-58 ps-5" id="validationCustom01" value=""
                            name="nama_client" placeholder="Masukkan nama client">
                          <div class="invalid-feedback">
                            Nama client tidak boleh kosong
                          </div>
                          <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                            style="top: 13px !important;"></i>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 mt-3">
                              <label for="validationCustom06" class="form-label label">Date</label>
                              <div class="position-relative">
                                <input type="text" class="form-control h-58 ps-5" id="validationCustom01"
                                  value="" name="date" placeholder="Masukkan Tanggal">
                                <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                  style="top: 13px !important;"></i>
                              </div>
                            </div>
                            <div class="col-md-6 mt-3">
                              <label for="validationCustom06" class="form-label label">Kategori</label>
                              <div class="position-relative">
                                <select name="kategori_id" class="form-select form-control h-58 ps-5"
                                  id="validationCustom06" required>
                                  <option selected disabled value="">Pilih ...</option>
                                  @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">- {{ $item->nama_kategori }}</option>
                                  @endforeach
                                </select>
                                <div class="invalid-feedback">
                                  Kategori tidak boleh di kosongi.
                                </div>
                                <i class="ri-book-marked-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                  style="top: 13px !important;"></i>
                              </div>
                            </div>
                            <div class="col-md-12 mt-3">
                              <label for="validationCustom06" class="form-label label">Link</label>
                              <div class="position-relative">
                                <input type="text" class="form-control h-58 ps-5" id="validationCustom01"
                                  value="" name="Link" placeholder="Masukkan Link">
                                <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                  style="top: 13px !important;"></i>
                              </div>
                            </div>
                            <div class="col-md-12 mt-3">
                              <label for="validationCustom01" class="form-label label">Isi Deskripsi <small
                                  class="text-danger">*</small></label>
                              <textarea name="deskripsi" id="editor" class="form-control h-58 ps-5" required></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mt-3">
                            <label for="thumbnail" class="label">Foto Thumbnail (1920x1280)</label>
                            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                              <div class="product-upload">
                                <label for="file-unduh" class="file-unduh mb-0">
                                  <span class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                    <img id="blahi" src="{{ asset('yoda') }}/app-assets/img/upload.png"
                                      alt="your image" />
                                  </span>
                                </label>
                                <input id="file-unduh" name="thumbnail" onchange="viewURL(this);" type="file"
                                  hidden>
                              </div>
                            </div>
                          </div>
                          <div class="form-group mt-3">
                            <label for="foto_project" class="label">Foto Portofolio 1 (1920x1280)</label>
                            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                              <div class="product-upload">
                                <label for="file-upload" class="file-upload mb-0">
                                  <span class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                    <img id="blah" src="{{ asset('yoda') }}/app-assets/img/upload.png"
                                      alt="your image" />
                                  </span>
                                </label>
                                <input id="file-upload" name="foto_project" onchange="readURL(this);" type="file"
                                  hidden>
                              </div>
                            </div>
                          </div>
                          <div class="form-group mt-3">
                            <label for="foto_project2" class="label">Foto Portofolio 2 (1920x1280)</label>
                            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                              <div class="product-upload">
                                <label for="file-upload2" class="file-upload mb-0">
                                  <span class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                    <img id="blaha" src="{{ asset('yoda') }}/app-assets/img/upload.png"
                                      alt="your image" />
                                  </span>
                                </label>
                                <input id="file-upload2" name="foto_project2" onchange="ReadURL(this);" type="file"
                                  hidden>
                              </div>
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


  <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
  <script>

    ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
                }
            })
            .catch(error => {
                console.error(error);
            });

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

    function ReadURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blaha')
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
