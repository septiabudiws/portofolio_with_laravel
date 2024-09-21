@extends('layout.yoda')

@section('content')
  <div class="hp-main-layout-content">
    <div class="row mb-32 g-32">
      <div class="col flex-grow-1 overflow-hidden">
        <div class="row g-32">
          <div class="col-12">
            <h1 class="hp-mb-0">Portofolio</h1>
          </div>

          <div class="col-12">
            <div class="card-body p-4">
              <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-0">Data Portofolio</h4>
                <div class="d-sm-flex align-items-center">
                  <a href="/porto_tambah"
                    class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                    <span class="py-sm-1 d-block">
                      <i class="ri-add-line text-white"></i>
                      <span>Tambah Portofolio</span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="default-table-area members-list">
                <div class="table-responsive">
                  <table class="table align-middle table-bordered" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col-3">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Project</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($portofolio as $get)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $get->nama_kategori }}</td>
                          <td>
                            {{ $get->nama_project }}
                            {{-- <a href="/porto/{{ $get->token_porto }}">{{ Str::substr($get->nama_project, 0, 70) }} Lihat</a> --}}
                            <br>
                            <a target="blank" href="{{ asset('portofolio/'. $get->foto_project) }}">
                              <small>Lihat Foto &raquo;</small>
                            </a>
                          </td>
                          <td>

                            <a class="btn btn-info" href="/porto/{{ $get->token_porto }}/detail" data-bs-toggle="modal"
                              data-bs-target="#portfolioModal{{ $get->token_porto }}">
                              <i data-feather="share-2"></i>
                              Detail
                            </a>
                            <a class="btn btn-primary" href="/porto/{{ $get->token_porto }}/edit">
                              <i data-feather="edit"></i>
                              Edit
                            </a>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                              data-bs-target="#modal_del_{{ $get->token_porto }}">
                              <i data-feather="trash-2"></i>
                              Hapus
                            </button>

                </div>
                </td>
                </tr>


                {{-- modal hapus --}}
                <div class="modal fade" id="modal_del_{{ $get->token_porto }}" data-bs-backdrop="static"
                  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="ri-error-warning-line"></i>
                          Peringatan!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Yakin ingin menghapus portofolio <b>{{ $get->nama_project }}</b>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Batal</button>
                        <a href="/porto/{{ $get->token_porto }}/hapus" class="btn btn-danger text-white">Ya! Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>


                {{-- modal detail --}}
                <div class="modal fade" id="portfolioModal{{ $get->token_porto }}" tabindex="-1"
                  aria-labelledby="porotofolioModal6" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <i class="bi bi-x"></i>
                        </button>
                        <div class="row item-content">
                          <div class="col-xl-12">
                            <img src="{{ asset('thumbnail/'. $get->thumbnail) }}" alt="portfolio image" />
                          </div>
                          <div class="col-xl-8">
                            <div class="content-wrapper">
                              <h2 class="item-title">{{ $get->nama_project }}</h2>
                              <p>
                                {!! $get->deskripsi !!}
                              </p>
                            </div>
                          </div>
                          <div class="col-xl-4">
                            <div class="meta-wrapper">
                              <ul class="item-meta">
                                <li>
                                  Project Type:
                                  <span class="meta-value">{{ $get->nama_kategori }}</span>
                                </li>
                                <li>
                                  Client:
                                  <span class="meta-value">{{ $get->nama_client }}</span>
                                </li>
                                <li>
                                  Date:
                                  <span class="meta-value">{{ $get->date }}</span>
                                </li>
                                <li>
                                  Link:
                                  <span class="meta-value"><a href="{{ $get->link }}" target="_blank">Klik
                                      Disini</a></span>
                                </li>
                              </ul>
                            </div>
                            <!-- .meta-wrapper -->
                          </div>
                        </div>
                        <!-- .row -->
                      </div>
                    </div>
                    @endforeach
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
