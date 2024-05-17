<!DOCTYPE html>
<html lang="en">

@include('partials.header')
<title>{{ $title }}</title>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        @include('partials.sidebar')
        <div id="main">
            @include('partials.topbar')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>{{ $title }}</h3>
                            <p class="text-subtitle text-muted">
                                Ini adalah page tentang {{ $title }}.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $title }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <section id="basic-vertical-layouts">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form method="POST" action="{{ route('kategori-produk.store') }}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>Input Data Kategori Produk</h4>
                                                <br>
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Kategori Produk</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" name="nama_kategori"
                                                            placeholder="Nama Kategori" id="first-name-icon"
                                                            value="" required>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-box"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">

                                    </div>
                                    <button type="submit" class="btn btn-primary me-1 mb-1"
                                        id="btnWtoast">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Table Data</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive datatable-minimal">
                            <table class="table" id="table2">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID Kategori Produk</th>
                                        <th class="text-center">Nama Kategori</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_kategori as $data_kategori)
                                        <tr>
                                            <td class="text-center">{{ $data_kategori->id_kategori }}</td>
                                            <td class="text-center">{{ $data_kategori->nama_kategori }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn icon btn-primary"
                                                    data-bs-toggle="modal"data-bs-toggle="modal"
                                                    data-bs-target="#inlineForm{{ $data_kategori->id_kategori }}">
                                                    <i class="bi bi-pencil" name="edit"></i>
                                                </button>
                                                <div class="modal fade text-left modal-borderless" id="editModal"
                                                    tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                    aria-hidden="true">
                                                </div>

                                                <button type="button" class="btn icon btn-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#danger{{ $data_kategori->id_kategori }}">
                                                    <i class="bi bi-trash" name="delete"></i>
                                                </button>

                                                <div class="modal fade text-left"
                                                    id="inlineForm{{ $data_kategori->id_kategori }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel33">Edit
                                                                    Kategori Produk
                                                                </h4>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                            </div>
                                                            <form
                                                                action="{{ route('kategori-produk.update', $data_kategori->id_kategori) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <label for="nama_produk">Nama Produk: </label>
                                                                    <div class="form-group">
                                                                        <input id="nama_produk" type="text"
                                                                            placeholder="Email Address"
                                                                            class="form-control" name="nama_kategori"
                                                                            value="{{ $data_kategori->nama_kategori }}">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-secondary"
                                                                        data-dismiss="modal">Tutup</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary ms-1">Simpan</button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Danger theme Modal -->
                                                <div class="modal fade text-left"
                                                    id="danger{{ $data_kategori->id_kategori }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="myModalLabel120"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <form
                                                                action="{{ route('kategori-produk.destroy', $data_kategori->id_kategori) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-header bg-danger">
                                                                    <h5 class="modal-title white"
                                                                        id="myModalLabel120">
                                                                        Apakah kamu yakin akan menghapus data?
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h2>Data {{ $data_kategori->nama_kategori }} akan
                                                                        dihapus secara permanen!</h2>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Tutup</span>
                                                                    </button>
                                                                    <button type="submit" class="btn btn-danger ms-1"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Ya,
                                                                            Hapus!</span>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>


            @include('partials.footer')
        </div>
    </div>

    @include('partials.script')
    @if (session('success'))
        <script>
            const message = "{{ session('success') }}";
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: message,
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#4fbe87",
                }).showToast();
            });
        </script>
    @endif

</body>

</html>
