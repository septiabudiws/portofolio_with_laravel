@extends('layout.yoda')

@section('content')
  <div class="hp-main-layout-content">
    <div class="row mb-32 g-32">
      <div class="col flex-grow-1 overflow-hidden">
        <div class="row g-32">
          <div class="col-12">
            <h1 class="hp-mb-0">Kategori Edit</h1>
          </div>

          <div class="col-12">
            <form method="POST" action="">
              @csrf
              <div class="form-group mb-4">
                <label class="label">Nama Kategori</label>
                <div class="form-group">
                  <input value="{{ old('nama_kategori') ?? $detail->nama_kategori }}" type="text" class="form-control text-dark h-58" placeholder="Enter Name" name="nama_kategori">
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
      </div>
    </div>
  </div>
@endsection
