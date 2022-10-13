<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!--fonte do gogle -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<!--css bootstrap -->
        <link rel= 

        <link rel ="stylesheet" href="/css/styles.css">
        <script src="js/scripts.js"></script>
    </head>
    <body>
<h1> Titulo  <h1>
    @if (10 > 5)
    <h1> a condicao e true <h1>

        @endif

        <p>{{ $nome }}  <p>

            @if($nome = "pedro")
            <p>  o nome e pedro <p>
                @elseif ($nome = "lipe")
                <p> o nome e lipe <P>
                @else
                <p> o nome e pedro <p>
                    @endif

                    @for ($i= 0 ; $i < count ($arr); $i++)
                    <P>{{ $arr[$i] }} <p>
                        @endfor

                        @php
                        $name ='joao'
                        echo $name;
                        @endphp
                        

        
    </body>
</html>
