<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="{{ route('categories.show',1) }}"> 个人简介 </a></li>
    @foreach($items as $menu_item)
        <li class="nav-item"><a class="nav-link" href="{{ route('categories.show',$loop->index+1) }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>
