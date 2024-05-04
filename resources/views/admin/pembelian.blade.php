<!DOCTYPE html>
<html lang="en">

@include('partials.header')
<title>Pembelian</title>

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
                            <h3>Pembelian</h3>
                            <p class="text-subtitle text-muted">
                                Ini adalah page tentang pembelian.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Pembelian
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                {{-- Page Content --}}
                <br>

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h4>Input Pembelian</h4>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                        </div>
                    </div>
                    <section id="basic-vertical-layouts">
                        <div class="col-md-6 col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="post" action="{{ route('profile.update') }}"
                                            class="form form-vertical">
                                            @csrf
                                            @method('patch')

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Name</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    name="name" placeholder="Name"
                                                                    id="first-name-icon" value="" required>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Email</label>
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control"
                                                                    name="email" placeholder="Email"
                                                                    id="email-id-icon" value="">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">{{ __('Save') }}</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center gap-4">

                                                @if (session('status') === 'profile')
                                                    <p x-data="{ show: true }" x-show="show" x-transition
                                                        x-init="setTimeout(() => show = false, 2000)"
                                                        class="text-sm text-gray-600 dark:text-gray-400">
                                                        {{ __('Saved.') }}
                                                    </p>
                                                @endif
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Striped rows</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Use <code class="highlighter-rouge">.table-striped</code>
                                            to
                                            add
                                            zebra-striping to any
                                            table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.
                                            This
                                            styling
                                            doesn't work in IE8
                                            and below as <code>:nth-child</code> CSS selector isn't supported.</p>
                                    </div>
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <div class=" table table-lg">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>NAME</th>
                                                        <th>RATE</th>
                                                        <th>SKILL</th>
                                                        <th>TYPE</th>
                                                        <th>LOCATION</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold-500">Michael Right</td>
                                                        <td>$15/hr</td>
                                                        <td class="text-bold-500">UI/UX</td>
                                                        <td>Remote</td>
                                                        <td>Austin,Taxes</td>
                                                        <td><a href="#"><i
                                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                    data-feather="mail"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500">Michael Right</td>
                                                        <td>$15/hr</td>
                                                        <td class="text-bold-500">UI/UX</td>
                                                        <td>Remote</td>
                                                        <td>Austin,Taxes</td>
                                                        <td><a href="#"><i
                                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                    data-feather="mail"></i></a></td>
                                                    </tr>
                                                    <!-- Add other rows here -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Page Content --}}

                @include('partials.footer')
            </div>
        </div>
        @include('partials.script')

</body>

</html>
