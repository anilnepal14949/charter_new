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
      table.main-table{
        width:90vw;
        border:1px solid #ccc;
      }
      table th{
        text-align: center;
      }
    </style>
    <!-- Font Awesome -->
    <link href="{{ asset('/public/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
</head>
<body style="background:#fff !important; color:#000">
    <div id="app">
      <h3> सबै सेवाहरुको विस्तृत विवरण: </h3>
      <?php $i = 1; ?>
      @foreach($categories as $category)
      <h3> {{$i++}}. {!! html_entity_decode($category->title) !!} </h3>
      <?php $posts = App\Post::whereCategoryId($category->id)->get(); ?>

      @foreach($posts as $post)
      <div style="page-break-after:always;">
        <table class="table main-table">
          <thead>
            <tr>
              <th> {!! html_entity_decode($post->title) !!} </th>
              <th> आवश्यक कागजात </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-md-4">
                <table class="table inner-table">
                  <tbody>
                    <tr>
                      <th>क्र.सं.</th>
                      <td> {{$category->id}} => {{$post->id}} </td>
                    </tr>
                    <tr>
                      <th>सम्वन्धित कर्मचारी</th>
                      <td> {{$post->responsible_person}} </td>
                    </tr>
                    <tr>
                      <th>दस्तुर -राजश्व</th>
                      <td> {{$post->amount}} </td>
                    </tr>
                    <tr>
                      <th>समय अवधि</th>
                      <td> {{$post->duration}} </td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td class="col-md-8">
                {!! html_entity_decode($post->description) !!}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      @endforeach
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
