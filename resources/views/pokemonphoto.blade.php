<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
        <title>pokemon sleep アプリ</title>
        <style>
            article{
                float: left;
                margin-left:5%;
                margin-right:2%;
                margin-bottom:20px;
                border:none;
                border-radius:3px;
                width:100px;
                height:200px;
                box-shadow:0 0 5px #999;
            }
        </style>
    </head>
    <body>
        <h2>ポケモンの寝顔</h2>
        <section>
            @foreach($cpokemons as $cpokemon)
                <article>
                    @if($cpokemon->collect!=0)
                        <header>
                            <h6>{{$cpokemon->pokemonname}}</h6>
                        </header>
                        <p>説明文はここに表示されます</p>
                        <button class="btn btn-inline-primary" onclick="location.href='/pokemonphoto/{{$cpokemon->id}}'">開く</button>
                    @else
                        <header>
                            <h6>?</h6>
                        </header>
                        <p>説明文は集まってから表示されます</p>
                    @endif
                </article>
            @endforeach
        </section>
    </body>
</html>