<!DOCTYPE html>
<html lang="en">

@include('partials.header')
<title>Profile Settings</title>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        @include('partials.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h2>Profile</h3>
                                <p class="text-subtitle text-muted"></p>
                        </div>
                    </div>
                </div>
                <section id="basic-vertical-layouts">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Edit Profile</h4>
                            </div>

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
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Name" id="first-name-icon"
                                                                value="{{ old('name', $user->name) }}" required
                                                                autofocus autocomplete="name">
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
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Email" id="email-id-icon"
                                                                value="{{ old('email', $user->email) }}" required
                                                                autocomplete="username">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-envelope"></i>
                                                            </div>
                                                        </div>
                                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                            <div>
                                                                <p
                                                                    class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                                    {{ __('Your email address is unverified.') }}
                                                                    <button form="send-verification"
                                                                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                                        {{ __('Click here to re-send the verification email.') }}
                                                                    </button>
                                                                </p>
                                                                @if (session('status') === 'verification-link-sent')
                                                                    <p
                                                                        class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">{{ __('Save') }}</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-4">

                                            @if (session('status') === 'profile-updated')
                                                <p x-data="{ show: true }" x-show="show" x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}
                                                </p>
                                            @endif
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="basic-vertical-layouts">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Update Password</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form method="post" action="{{ route('password.update') }}"
                                        class="form form-vertical">
                                        @csrf
                                        @method('put')
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="update_password_current_password">Current
                                                            Password</label>
                                                        <div class="position-relative">
                                                            <input type="password" class="form-control"
                                                                name="current_password"
                                                                id="update_password_current_password"
                                                                autocomplete="current-password">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-key-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="update_password_new_password">New Password</label>
                                                        <div class="position-relative">
                                                            <input type="password" class="form-control" name="password"
                                                                id="update_password_new_password"
                                                                autocomplete="new-password">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-key"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="update_password_confirm_password">Confirm
                                                            Password</label>
                                                        <div class="position-relative">
                                                            <input type="password" class="form-control"
                                                                name="password_confirmation"
                                                                id="update_password_confirm_password"
                                                                autocomplete="new-password">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-key"></i>
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
                                    </form>
                                    <div class="flex items-center gap-4">
                                        @if (session('status') === 'password-updated')
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ __('Saved.') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            @include('partials.footer')
        </div>
    </div>
    @include('partials.script')




</body>

</html>
