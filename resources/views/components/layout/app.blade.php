<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Store' }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
</head>
<body>
{{-- Navbar --}}
@if (!in_array(Route::currentRouteName(), ['auth.login.form', 'auth.register.form']))
    <x-navbar/>
@endif

{{--display success messages--}}
@if (session()->has('success'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050">
        <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
<div class="container">
    {{ $slot }}
</div>

{{-- Footer --}}
@if (!in_array(Route::currentRouteName(), ['auth.login.form', 'auth.register.form']))
    <x-footer/>
@endif

<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let successToast = document.getElementById('successToast');
        if (successToast) {
            let toast = new bootstrap.Toast(successToast);
            toast.show();
            setTimeout(() => {
                toast.hide();
            }, 3000); // يختفي بعد 3 ثوانٍ
        }
    });
</script>
</body>
</html>
