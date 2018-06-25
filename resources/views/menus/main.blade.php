<ul class="navbar-nav ml-auto">
    @foreach($items as $menu_item)
        <li class="nav-item"><a class="nav-link" href="{{ route('posts.show',$loop->index+1) }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>