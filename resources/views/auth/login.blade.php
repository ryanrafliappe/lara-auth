@extends('layouts.guest', ['title' => 'Halaman Masuk'])

@section('guest.content')
<div class="auth-wrapper auth-basic px-2">
    <div class="auth-inner my-2">
        <div class="card mb-0">
            <div class="card-body">
                <a href="#" class="brand-logo">
                    <h2 class="brand-text text-primary">{{ config('app.name') }}</h2>
                </a>

                <h4 class="card-title mb-1">Selamat Datang! 👋</h4>
                <p class="card-text mb-2">Masukkan Nama Pengguna dan kata sandi Anda.</p>

                <form class="auth-login-form mt-2" action="" method="POST">
                    @csrf
                    <div class="mb-1">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna Anda" aria-describedby="username" tabindex="1" autofocus />
                    </div>

                    <div class="mb-2">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Kata Sandi</label>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control form-control-merge" id="password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary w-100" tabindex="4">Masuk ke Panel</button>
                    </div>
                </form>

                <div class="mt-3">
                    <p class="mb-0 text-center"><small class="text-muted">versi {{ config('app.version') }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
