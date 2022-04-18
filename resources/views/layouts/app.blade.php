<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>たすくりすと</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
    {{--@includeで別途定義したBladeファイルの内容をそのまま取り込む--}}
    @include('commons.navbar')
    <body>
        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')
            {{--@yield('content')には、@extends('')で継承した先の@section('content') ... @endsectionの中に書かれた内容が埋め込まれる--}}
            {{--つまり、各Viewファイルにある@section('content') ... @endsectionの内容がここで表示される--}}
            @yield('content')
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>