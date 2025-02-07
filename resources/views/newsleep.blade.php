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
        <form  class="form" action="/sleep/store" method="post">
            <h2>睡眠を記録する</h2>
            <div>
                <label for="day">日付</label>
                <input type="date" name="day">
            </div>
            <div>
                <label for="sleeptime">睡眠時間<label>
                <input type="time" name="sleeptime">
            </div>
            <div>
                <label for="getuptime">起床時間</label>
                <input type="time" name="getuptime">
            </div>
            @csrf
            <button type="submit" class="btn btn-outline-primary">保存する</button>
            <a href='/'>キャンセル</a>
        </form> 
    </body>
</html>