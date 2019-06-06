<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BNHA') }}</title>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <!-- Scripts -->

    <script type="text/javascript" src="{{ asset('js/creative.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/creative.min.js') }}"></script>

    <script>
            var botmanWidget = {
                introMessage: 'Olá, você está com algum problema?', 
                title: 'All Might chatbot', 
                mainColor: '#FFD700',
                aboutText: '',
                bubbleAvatarUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSraGPpR4vk6WWEluek1zPNjs2oUMxKNy6OcrOXKeBAMVwgVs_xZg',
            }; 
        </script>
        
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/clean-blog.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/clean-blog.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bootstrap core CSS
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
     <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/clean-blog.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
</head>

<body>
    
    <div id="app">
         <main class="py-4">
                @yield('content')
        </main>
    </div>
 @guest

 @else
</body>

  <!-- Modal -->
    <form action="{{ route( "publicar") }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalLongoExemplo">Nova Postagem <i class="fas fa-align-justify"></i></h5>

                        <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Título</label>
                            <input class="form-control" type="text" name="titulo" placeholder="Digite um Titulo">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Conteúdo</label>
                            <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3" placeholder="Digite algo"></textarea>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="arquivo" name="arquivo">
                          <label class="custom-file-label" for="arquivo">Escolha um arquivo</label>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="nusuario" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Publicar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @endguest
</html>
