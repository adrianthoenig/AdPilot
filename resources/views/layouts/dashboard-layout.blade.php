<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdPilot | Dashboard</title>
    <link rel="stylesheet" href="">
    @vite('resources/css/app.css')
</head>
<body>
    <x-dashboard.navbar />
    {{ $slot }}
</body>
</html>