<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ config('app.name', 'Laravel') }} </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]);
      ?>
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="app">

    <header>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Marcos - Consultoria contabíl </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul id="menu-princiapal" class="nav navbar-nav navbar-right">
              <li class="active"><a href="#cadastrar"> Cadastrar </a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <section>
      <div class="container">
        <img src="{{asset('images/topo.jpg')}}" width="100%" alt="">
      </div>
    </section>
    <h1 class="text-center"> Faça seu cadastro e ganhe a primeira consultoria grátis! </h1>
    <section id="cadastrar">
      <div class="container">

        <div class="row">
          <div class="col-md-3">
            <div class="well well-sm">
              <p> Faça seu cadastro ao lado, receba um Ebook e ganhe a primeira consultoria grátis! </p>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> Faça seu cadastro </h3>
              </div>
              <form class="" action="{{url('cadastro')}}" method="post" data-toggle="validator" role="form">
                <div class="panel-body">
                  @if (isset($_GET['msg']) && $_GET['msg'] == 'ok')
                    <div class="alert alert-success"> Cadastro efetuado com sucesso! </div>
                  @endif

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nome"> Nome </label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="" required>
                        <div class="help-block with-errors"></div>
                        {{csrf_field()}}
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="cel"> Celular </label>
                        <input type="text" class="form-control telefone" name="cel" id="cel" placeholder="">
                        @foreach ($errors->all() as $error)
                            {{$error}}<br>
                        @endforeach
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="dataNasc"> Data Nascimento </label>
                        <input type="text" class="form-control data" name="dataNasc" id="dataNasc" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="cep"> CEP </label>
                        <input type="text" class="form-control" name="cep" id="cep" placeholder="" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="rua"> Rua </label>
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="bairro"> Bairro </label>
                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="cidade"> Cidade </label>
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="estado"> Estado </label>
                        <input type="text" class="form-control" name="estado" id="uf" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                      <button type="submit" name="button" class="btn btn-info btn-block"> Cadastrar </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <p class="text-center">
          &copy; @php
            date('Y')
          @endphp Todos os direitos reservados.
        </p>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('js/validator.min.js')}}"></script>
    <script type="text/javascript">
    // normalmente coloco dentro do app.js
    jQuery(document).ready(function($) {
      $(".data").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
      $("#cep").mask('99999-999');
      $('.telefone').mask("(99) 99999-999?9").ready(function(event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();
        if(phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 99999-999?9");
        }
      });
    });
    </script>
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
