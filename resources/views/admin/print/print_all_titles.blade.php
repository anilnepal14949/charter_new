<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'हेटौडा उपमहानगरपालिका, मकवानपुर') }}</title>

    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/style.css') }}" rel="stylesheet">
    <style rel="stylesheet">
      table{
        width:70vw !important;
        margin:1vh;
      }
      table th{
        text-align: center;
      }
      table tr th,td{
        border:1px solid #000 !important;
      }
    </style>
    <!-- Font Awesome -->
    <link href="{{ asset('/public/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
</head>
<body style="background:#fff !important">
    <div id="app">
      <?php $i = 1; ?>
      @foreach($categories as $category)
      <h3 style="color:#000;"> {{$i++}}) {!! html_entity_decode($category->title) !!} </h3>
      <?php $posts = App\Post::whereCategoryId($category->id)->get(); ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> सि. नं. </th>
            <th> प्रदान गरिने सेवा </th>
            <th> अङ्क </th>
          </tr>
        </thead>
        <tbody>
          @foreach($posts as $post)
            <tr>
              <td> {{ $post->sub_id }} </td>
              <td> {!! html_entity_decode($post->title) !!} </td>
              <td> 1.{{ $post->id }} </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @endforeach
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/public/js/app.js') }}"></script>

    @include('sweet::alert')
    @yield('footerContent')
    <script src="{{ asset('/public/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('/public/js/myjava.js') }}"></script>
</body>
</html>
