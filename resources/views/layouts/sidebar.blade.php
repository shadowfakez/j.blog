<div class="sidebar">
@auth
    @if(Auth::user()->is_admin)
        <div class="gadget" style="border: 2px solid #ebebeb;">
            <h2 class="star"><span>Привет, {{ Auth::user()->name }}!</span></h2>
            <div class="clr"></div>
            <h4 class="star"><span>Панель администратора</span></h4>
            <div class="clr"></div>
            <ul class="ex_menu">
                <li>
                    <a href="{{ route('admin.index') }}">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}">
                        Список категорий
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.create') }}">
                        Новая категория
                    </a>
                </li>
                <li>
                    <a href="{{ route('tags.index') }}">
                        Список тегов
                    </a>
                </li>
                <li>
                    <a href="{{ route('tags.create') }}">
                        Новый тег
                    </a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}">
                        Список статей
                    </a>
                </li>
                <li>
                    <a href="{{ route('posts.create') }}">
                        Новая статья
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <h3>Logout</h3>
                    </a>
                </li>
            </ul>
        </div>
    @endif
@endauth

@guest()
        <div class="gadget" style="border: 2px solid #ebebeb;">
            <ul class="ex_menu">
                <li>
                    <a href="{{ route('login') }}">
                        <h3>Login</h3>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register.store') }}">
                        <h3>Sign up</h3>
                    </a>
                </li>
            </ul>
        </div>

@endguest

    <div class="gadget">
        <h2 class="star"><span>Популярные</span></h2>
        <div class="clr"></div>
        <ul class="ex_menu">
            @foreach($popular_posts as $popular_post)
                <li><a href="{{ route('posts.single', ['slug' => $popular_post->slug]) }}">{{ $popular_post->title }} | {{
            $popular_post->views }}
                </a><br />
                {!! $popular_post->description !!} </li>
            @endforeach
        </ul>
    </div>
    <div class="gadget">
        <h2 class="star"><span>Категории</span></h2>
        <div class="clr"></div>
        <ul class="sb_menu">
            @foreach($sidebar_categories as $sidebar_category)
                <li><a href="{{ route('categories.single', ['slug' => $sidebar_category->slug]) }}">{{
                $sidebar_category->title }} | ({{ $sidebar_category->posts_count }})</a></li>
            @endforeach
        </ul>
    </div>
</div>
