<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!--fonte do gogle -->
        <link href= "https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<!--css bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel ="stylesheet" href="/css/styles.css">
        <script src="js/scripts.js"></script>

<head>
</body>


<h1> Titulo  <h1>
<header>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
            <img src="/img/images.jpg" alt="images">
        </a>
        <ul class="navbar-nav"></ul>
        <li class="nav-item">
           <a href="/events/create" class="nav-link">professores</a>
        </li>
        <li class="nav-item">
           <a href="/" class="nav-link">alunos</a>
        </li>
        <li class="nav-item">
           <a href="/" class="nav-link">materias</a>
        </li>

    </div>
</nav>
<header>
@foreach($professores as $event)
<p> {{ $professores -> professor }} -- {{ $professores -> aluno }} <p>
@endforeach
                       
                        </body>
</html>                      

                        

      