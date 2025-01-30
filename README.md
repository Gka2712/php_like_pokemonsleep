# php_like_pokemonsleep
1.laravelの構築
1-1.composer create-project --prefer-dist laravel/laravel アプリ名
laravelアプリを作るためのプロジェクトができる。できるまでは時間が掛かる。
1-2.すると指定したアプリ名のプロジェクトができるので、フォルダを移動する。
cd アプリ名
2..envファイルの修正
アプリ名/.envから修正
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lunchmapdb
DB_USERNAME=root
用意してあるデータベースに修正する
3.モデルとコントロールの用意
php artisan make:model データベースのテーブル名
-m 　マイグレーションファイルの作成
-c 新しいコントローラーの作成
-r リソースコントローラにするかどうか_like_pokemonsleep
1.laravelの構築
1-1.composer create-project --prefer-dist laravel/laravel アプリ名
laravelアプリを作るためのプロジェクトができる。できるまでは時間が掛かる。
1-2.すると指定したアプリ名のプロジェクトができるので、フォルダを移動する。
cd アプリ名
2..envファイルの修正
アプリ名/.envから修正
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lunchmapdb
DB_USERNAME=root
用意してあるデータベースに修正する
3.モデルとコントロールの用意
3-1.php artisan make:model データベースのテーブル名
-m 　マイグレーションファイルの作成
-c 新しいコントローラーの作成
-r リソースコントローラにするかどうか
3-2.database/migrationの中のファイルを修正
public function up(){}の中にカラムを設定する。
3-3.マイグレーション実行
php artisan migrate
4.ルートの設定
4-1.ルートの設定
routes/web.php
Route::get('リンク',処理)
4-2.ビューの設定
resources/views/〇〇.blade.phpにビューを設定する。
