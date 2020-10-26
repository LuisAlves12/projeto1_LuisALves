<doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('Titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}"> 
    </head>
    <body>
        <h1>@yield('Cabecalho')</h1>
        @yield('Corpo')
        <div style="text-align:center">
            <br><br><br>
            <a href="{{route('view.index')}}"><button>Pagina Inicial</button></a>
            <a href="{{route('view.noticias')}}"><button>Noticias</button></a>
            <a href="{{route('view.empresa')}}"><button>Empresas</button></a>
            <a href="{{route('view.ondeestamos')}}"><button>Onde Estamos</button></a>
            <a href="{{route('view.contactos')}}"><button>Contactos</button></a>
        </div>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>