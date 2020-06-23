<div class="col-md-3 left_sidebar" id="postsDiv">
    <div class="panel panel-default panel-flush panel-left">
        <div class="panel-heading">
            <h2 class="panel-title"> List of Titles </h2>
        </div>
        <div class="panel-body">
            @foreach($categories as $category)
            <h4 class="categoryHeading">
                <span class="numberToEnter">{{$category->id}}</span> {{ $category->title }}
            </h4>
            @endforeach
        </div>
    </div>
</div>
