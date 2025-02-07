<html lang="ja">
    <head>
        <title>pokemon sleep</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
        <style>
            
        </style>
    </head>
    <body>
        <h2>睡眠記録</h2>
        <p>睡眠時刻:{{ $newsleep->sleeptime }}</p>
        <p>起床時刻:{{ $newsleep->getuptime }}</p>
        <p>睡眠時間:{{ $timediff }}分</p>
        <p>睡眠スコア:{{$sleepscore}}点</p>
        <p>睡眠パワー:{{$sleeppower}}</p>
        <p>獲得したポケモン</p>
        @for ($i=0;$i < count($collects);$i++ )
            {{$collects[$i]}}.
        @endfor
        <button class="btn btn-primary" onclick="location.href='/main'">戻る</button> 
    </body>
</html>