<div class="sidebar">
        <div class="searchform">
            <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
                <input name="button_search" src="assets/front/images/search.gif" class="button_search" type="image" />
            </form>
        </div>
        <div class="gadget">
            <h2 class="star"><span>Популярные</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
                @foreach($popular_posts as $popular_post)
                    <li><a href="{{ route('posts.single', ['slug' => $post->slug]) }}">{{ $popular_post->title }} | {{
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
