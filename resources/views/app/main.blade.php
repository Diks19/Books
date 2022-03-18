<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('/js/trix.js') }}"> </script>

    <title>BOOKS</title>

    <style>
        body{
            background-color: blanchedalmond
        }
        trix-toolbar [data-trix-button-group="file-tools"] {
          display: none;
        }
        .img-pre{
          width: 120px;                                         
          height: 120px;
          border-block: 10px;
        }
    </style>
  </head>
  <body>
    
    @yield('container')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
    <script>
      document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
      })
    </script>
  </body>
</html>