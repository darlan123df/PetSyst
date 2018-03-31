    <!DOCTYPE html>
    <html>
      <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        @yield('css')
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <meta charset="utf-8">
        @yield('js')

        <title>PetSyst |  @yield('titulo')</title>
      </head>
      <body>
        @yield('conteudo')
      </body>
    </html>
