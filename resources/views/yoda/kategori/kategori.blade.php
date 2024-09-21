@extends('layout.yoda')

@section('content')
  <div class="hp-main-layout-content">
    <div class="row mb-32 g-32">
      <div class="col flex-grow-1 overflow-hidden">
        <div class="row g-32">
          <div class="col-12">
            <h1 class="hp-mb-0">Kategori</h1>
          </div>

          <div class="col-12">

            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">Kategori List</h4>
                <a class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3" href="/kategori_tambah">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line text-white"></i>
                        <span>Tambah Kategori</span>
                    </span>
                </a>
            </div>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
                        <tbody>
                            @foreach ($kategori as $item)
                                <tr class="text-center">
                                    <td>
                                        {{ $no++ }}
                                    </td>
                                    <td class="text-start">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">

                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-16 mb-0">{{ $item->nama_kategori }}</h4>
                                                    <span>{{ $item->created_at }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- </td>
                                    <td>
                                        <span>{{ $item->jumlah_berita }}</span>
                                    </td> --}}
                                    <td>
                                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight{{ $item->id }}"
                                            aria-controls="offcanvasRight">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </button>
                                        <div class="offcanvas offcanvas-end" tabindex="-1"
                                            id="offcanvasRight{{ $item->id }}" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <form method="POST" action="/kategori/{{ $item ->id }}/edit">
                                                    @csrf
                                                    <div class="form-group mb-4">
                                                        <label class="label">Nama Kategori</label>
                                                        <div class="form-group">
                                                            <input
                                                                value="{{ $item ->nama_kategori }}"
                                                                type="text" class="form-control text-dark h-58"
                                                                placeholder="Enter Name" name="nama_kategori">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2">
                                                        <button type="submit"
                                                            class="btn btn-primary bg-primary bg-opacity-10 text-primary border-0 fw-semibold py-2 px-4">Submit</button>
                                                        <a type="submit" href="/kategori"
                                                            class="btn btn-danger bg-danger bg-opacity-10 text-danger border-0 fw-semibold py-2 px-4">Cancel</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <a type="button" class="btn btn-danger btn-sm"
                                            href="/kategori/{{ $item->id }}/hapus">
                                            <i class="bi bi-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
