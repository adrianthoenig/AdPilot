<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdPilot | Dashboard</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="{{ asset('js/app.js') }}"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <x-dashboard.navbar.navbar />
    <div class="flex min-h-screen">
        <x-dashboard.sidebar.sidebar />
        {{ $slot }}
    </div>
    @if(session('success'))
    <x-dashboard.flash.toast type="success" message="{{ session('success') }}" />
    @endif
    @if(session('error'))
    <x-dashboard.flash.toast type="error" message="{{ session('error') }}" />
    @endif
    @if(session('warning'))
    <x-dashboard.flash.toast type="warning" message="{{ session('warning') }}" />
    @endif
    @if(session('info'))
    <x-dashboard.flash.toast type="info" message="{{ session('info') }}" />
    @endif
</body>
</html>