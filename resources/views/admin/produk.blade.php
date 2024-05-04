<!DOCTYPE html>
<html lang="en">

@include('partials.header')
<title>Produk</title>

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
                            <h3>Produk</h3>
                            <p class="text-subtitle text-muted">
                                Ini adalah page tentang produk.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Produk
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
                                <form method="POST" action="{{ route('produk.store') }}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>Input Data Produk</h4>
                                                <br>
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Nama Produk</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" name="nama_produk"
                                                            placeholder="Nama Produk" id="first-name-icon"
                                                            value="" required>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-box"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Deskripsi Produk</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            name="deskripsi_produk" placeholder="Deskripsi Produk"
                                                            id="email-id-icon" value="">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-info-square"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Harga Produk</label>
                                                    <div class="position-relative">
                                                        <input type="number" class="form-control" name="harga_produk"
                                                            placeholder="Harga Produk" id="email-id-icon"
                                                            value="">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-cash"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Kategori Produk</label>
                                                    <div class="position-relative">
                                                        <select type="number" class="form-control"
                                                            name="kategori_produk" id="email-id-icon" value="">
                                                            <option disabled selected>Kategori Produk
                                                            </option>
                                                            <option value="elektronik">Elektronik</option>
                                                            <option value="komputer">Komputer</option>
                                                        </select>
                                                        <div class="form-control-icon">
                                                            <i class="icon dripicons dripicons-network-3"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Berat Produk</label>
                                                    <div class="position-relative">
                                                        <input type="number" class="form-control" name="berat_produk"
                                                            placeholder="Berat Produk (gram)" id="email-id-icon"
                                                            value="">
                                                        <div class="form-control-icon">
                                                            <i class="icon dripicons dripicons-weight"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Stok Produk</label>
                                                    <div class="position-relative">
                                                        <input type="number" class="form-control" name="stok_produk"
                                                            placeholder="Stock Produk" id="email-id-icon"
                                                            value="">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-boxes"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        @if (session('success'))
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ __('Produk berhasil ditambahkan.') }}
                                            </p>
                                        @endif
                                        @if (session('error'))
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ __('Eror anj.') }}
                                            </p>
                                        @endif
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
                                        <th class="text-center">ID Produk</th>
                                        <th class="text-center">Nama Produk</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Berat(gram)</th>
                                        <th class="text-center">Stok</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produk as $produk)
                                        <tr>
                                            <td class="text-center">{{ $produk->id_produk }}</td>
                                            <td class="text-center">{{ $produk->nama_produk }}</td>
                                            <td class="text-center">{{ $produk->deskripsi_produk }}</td>
                                            <td class="text-center">{{ $produk->harga_produk }}</td>
                                            <td class="text-center">{{ $produk->kategori_produk }}</td>
                                            <td class="text-center">{{ $produk->berat_produk }}</td>
                                            <td class="text-center">{{ $produk->stok_produk }}</td>
                                            <td>
                                                <button type="button" class="btn icon btn-primary"
                                                    data-bs-toggle="modal"data-bs-toggle="modal"
                                                    data-bs-target="#inlineForm{{ $produk->id_produk }}">
                                                    <i class="bi bi-pencil" name="edit"></i>
                                                </button>
                                                <div class="modal fade text-left modal-borderless" id="editModal"
                                                    tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                    aria-hidden="true">
                                                </div>

                                                <button type="button" class="btn icon btn-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#danger{{ $produk->id_produk }}">
                                                    <i class="bi bi-trash" name="delete"></i>
                                                </button>

                                                <div class="modal fade text-left"
                                                    id="inlineForm{{ $produk->id_produk }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="myModalLabel33"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel33">Edit
                                                                    Produk
                                                                </h4>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                            </div>
                                                            <form
                                                                action="{{ route('produk.update', $produk->id_produk) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <label for="nama_produk">Nama Produk: </label>
                                                                    <div class="form-group">
                                                                        <input id="nama_produk" type="text"
                                                                            placeholder="Email Address"
                                                                            class="form-control" name="nama_produk"
                                                                            value="{{ $produk->nama_produk }}">
                                                                    </div>
                                                                    <label for="deskripsi_produk">Deskripsi: </label>
                                                                    <div class="form-group">
                                                                        <input id="deskripsi_produk" type="text"
                                                                            placeholder="deskripsi"
                                                                            class="form-control"
                                                                            name="deskripsi_produk"
                                                                            value="{{ $produk->deskripsi_produk }}">
                                                                    </div>
                                                                    <label for="harga_produk">Harga Produk: </label>
                                                                    <div class="form-group">
                                                                        <input id="harga_produk" type="number"
                                                                            name="harga_produk" placeholder="harga"
                                                                            class="form-control"
                                                                            value="{{ $produk->harga_produk }}">
                                                                    </div>
                                                                    <label for="harga_produk">Kategori Produk: </label>
                                                                    <div class="form-group">
                                                                        <select type="number" class="form-control"
                                                                            name="kategori_produk"
                                                                            id="kategori_produk" value="">
                                                                            <option disabled selected>Kategori Produk
                                                                            </option>
                                                                            <option value="elektronik"
                                                                                {{ $produk->kategori_produk == 'elektronik' ? 'selected' : '' }}>
                                                                                Elektronik
                                                                            </option>
                                                                            <option value="komputer"
                                                                                {{ $produk->kategori_produk == 'komputer' ? 'selected' : '' }}>
                                                                                Komputer</option>
                                                                        </select>
                                                                    </div>
                                                                    <label for="nama_produk">Berat Produk (berat):
                                                                    </label>
                                                                    <div class="form-group">
                                                                        <input id="berat_produk" type="number"
                                                                            name="berat_produk"
                                                                            placeholder="Berat Produk"
                                                                            class="form-control"
                                                                            value="{{ $produk->berat_produk }}">
                                                                    </div>
                                                                    <label for="nama_produk">Stok Produk :
                                                                    </label>
                                                                    <div class="form-group">
                                                                        <input id="stok_produk" type="number"
                                                                            name="stok_produk"
                                                                            placeholder="stok Produk"
                                                                            class="form-control"
                                                                            value="{{ $produk->stok_produk }}">
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
                                                <div class="modal fade text-left" id="danger{{ $produk->id_produk }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="myModalLabel120"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <form
                                                                action="{{ route('produk.destroy', $produk->id_produk) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')>
                                                                <div class="modal-header bg-danger">
                                                                    <h5 class="modal-title white"
                                                                        id="myModalLabel120">
                                                                        Apakah kamu yakin akan
                                                                        menghapus data?
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h2>Data {{ $produk->nama_produk }} akan dihapus
                                                                        secara permanen!</h2>
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
                                                                            Hapus!!</span>
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

            <!-- Edit Modal -->


            <!-- Delete Modal -->
            <div class="modal fade text-left modal-borderless" id="deleteModal" tabindex="-1" role="dialog"
                aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Product</h4>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this product?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="button" class="btn btn-danger ms-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Delete</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            @include('partials.footer')
        </div>
    </div>

    @include('partials.script')

</body>

</html>
