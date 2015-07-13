<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spider Web Dev Task 3</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}"/>
    <script src="{{ asset('js/menu.js') }}"></script>
    @yield('header')
    <script>
        $(document).ready(function(){
            $('#myModal').modal();
            @yield('jquery')
        });
    </script>
</head>
<body>

    @if(Session::has('message'))
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">{{ Session::pull('heading') }}</h4>
                </div>
                <div class="modal-body">
                    <p>{{ Session::pull('message') }}.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif

@yield('content')
</body>
</html>