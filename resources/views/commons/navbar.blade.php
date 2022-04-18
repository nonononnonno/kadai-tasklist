<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">たすくりすと</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <ul class="navbar-nav">
                    {{-- ユーザ登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get', 'とうろく', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                </ul>
                {{--<li class="nav-item">{!! link_to_route('tasks.create', 'あたらしいたすく', [], ['class' => 'nav-link']) !!}</li>--}}
            </ul>
        </div>
    </nav>
</header>