<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindShelf</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-blue-100 p-4 flex justify-between items-center">
        <div class="text-white font-bold text-xl">
            <img src="{{ asset('logo.png') }}" alt="" width="105px">
        </div>
        <a href="{{ route('login') }}" class="text-white bg-sky-700 px-4 py-2 rounded-full hover:bg-sky-900"><i class="fa fa-sign-out"></i> Tizimga Kirish</a>
    </nav>

    <livewire:index-base/>
</body>
</html>