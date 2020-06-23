<div class="col-md-3 left_sidebar" id="postsDiv" style="overflow: hidden; padding-bottom:2vh;">
    <div class="panel panel-default panel-flush panel-left">
        <div class="panel-heading">
            <h2 class="panel-title"> {{ $category->title }} </h2>
        </div>
        <div class="panel-body" id="postsTitles">
            @if($posts)
            <?php $i=1; ?>
            @foreach($posts as $post)
            <h4 style="font-weight: bold;" class="postHeading">
                <span class="numberToEnter"> {{$i++}} </span>  {{ $post->title }}
            </h4>
            @endforeach
            @endif
        </div>
    </div>
</div>
