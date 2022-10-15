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

<div id="search-container" class="col-md-12">
    <h1> Busque um aluno <h1>
        <form action= "" >
          <input type= "text" id ="search" class="form-control" placeholder ="procurar...">
        <form>
     <div>          
        <div id="events-container" class ="col-md-12">
          <h2> todos alunos <h2>  
            
                <div id= "cards-container" class = "row">
                    @foreach ($events as $event)
                    <div class = "cards col-md-3">
                      <img  src="/img/lipe.jpg" alt = "{{$event->aluno}}">
                      <h5  class= "card-title">{{$event->aluno}} <h5>
                    <div>

                    @endforeach
                <div>
        <div>
     


                        </body>
</html>                      

                        

      