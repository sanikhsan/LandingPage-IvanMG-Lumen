<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IvanMG</title>
    
    <!-- Asset CSS -->
        @include('admin.asset.css')
    <!-- End of Asset CSS -->

</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="{{ route('auth') }}"><img src="{{ url('asset_admin/images/logo/logo.png') }}" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-5">Log in terlebih dahulu untuk mengakses Dashboard Admin.</p>

            <form action="{{ url('/admin/login') }}" method="POST">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" name="email" class="form-control form-control-xl" placeholder="email" required>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" class="form-control form-control-xl" placeholder="Password" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>Belum Punya Akun? <a href="{{ route('auth') }}" class='font-bold'>Ga Mungkin</a>.</p>
                <p class='text-gray-600'>Lupa Password? <a class='font-bold' href="{{ route('auth') }}">Mana Ada</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
            
        </div>
    </div>
</div>

    </div>
</body>

</html>
