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
                    {{--Auth::check()はユーザがログインしているかどうかを調べるための関数--}}
                    @if (Auth::check())
                        <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                    @else
                        {{-- ユーザ登録ページへのリンク --}}
                        <li>{!! link_to_route('signup.get', 'とうろく', [], ['class' => 'nav-link']) !!}</li>
                        {{-- ログインページへのリンク --}}
                        <li>{!! link_to_route('login', 'ろぐいん', [], ['class' => 'nav-link']) !!}</li>
                    @endif
                </ul>
                {{--<li class="nav-item">{!! link_to_route('tasks.create', 'あたらしいたすく', [], ['class' => 'nav-link']) !!}</li>--}}
            </ul>
        </div>
    </nav>
</header>