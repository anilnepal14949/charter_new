<div class="col-md-3 left_sidebar">
    <div class="panel panel-default panel-flush panel-left">
        <div class="panel-body">
            <div class="list-group">
                <a href="{{ route('slider.index') }}" class="list-group-item @if($activeMenu == 'slider') activeMenu @endif">स्लाईडर व्यवस्थापन</a>
                <a href="{{ route('info.index') }}" class="list-group-item @if($activeMenu == 'info') activeMenu @endif">सूचना तथा गतिविधि व्यवस्थापन</a>
                <a href="{{ route('category.index') }}" class="list-group-item @if($activeMenu == 'category') activeMenu @endif">
                    क्याटोगोरी व्यवस्थापन
                </a>
                @if($categories)
                    @foreach($categories as $category)
                        <a href="{{ route('posts.new',$category->id) }}" class="list-group-item @if($activeMenu == $category->id) activeMenu @endif" style="margin-left:2vh; border-radius:10px 0 0 10px;">{{ $category->title }}</a>
                    @endforeach
                @endif
                <a href="{{ route('home.print') }}" class="list-group-item @if($activeMenu == 'print') activeMenu @endif">प्रिनट व्यवस्थापन</a>
                <a href="{{ route('admin.logout') }}" class="list-group-item">लग आउट</a>    
            </div>
        </div>
    </div>
</div>
