<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
        <title>pokemon sleep アプリ</title>
        <style>
        </style>
    </head>
    <body>
        <h4>ポケモンスリープへようこそ</h4>
        <h6>食材:{{$nut->num}}/{{$nut->limitnum}}</h6>
        <div>
            カビゴンパワー:{{$cavigon->power}}
            ランク:{{$rank->ranknow}}
            <progress value=""{{($cavigon->power/$rank->minpower)*100}}></progress>
        </div>

        <p></p>
        ポケモン1<button class="btn btn-primary" onclick="location.href='/collect/1'">あげる</button>
        <p></p>
        ポケモン2<button class="btn btn-primary" onclick="location.href='/collect/2'">あげる</button>
        <p></p>
        ポケモン3<button class="btn btn-primary" onclick="location.href='/collect/3'">あげる</button>
        <p></p>
        ポケモン4<button class="btn btn-primary" onclick="location.href='/collect/4'">あげる</button>
        <p></p>
        ポケモン5<button class="btn btn-primary" onclick="location.href='/collect/5'">あげる</button>
        <p></p>
        <button class="btn btn-primary" onclick="location.href='/sleep/create'">眠る</button>
        <p></p>
        <button class="btn btn-primary" onclick="location.href='/cooking'">食事する</button>
        <button class="btn btn-primary" onclick="location.href='/cquan'">材料の容量を増やす</button>
        <button class="btn btn-primary" onclick="location.href='/reset'">リセットする</button>
    </body>
</html>