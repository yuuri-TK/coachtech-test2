#アプリケーション名
お問い合わせフォーム
##環境構築
$cd coachtech/laravel
$ git clone git@github.com:Estra-Coachtech/laravel-docker-template.git
$ mv laravel-docker-template coachtech-test2
$ cd coachtech-test2
$ git remote set-url origin git@github.com:yuuri-TK/coachtech-test2.git
$ git remote -v
$ git add .
$ git commit -m"リモートリポジトリの変更"
$ git push origin main
$ docker-compose up -d --build
$ docker-compose exec php bash

##URL
開発環境
お問い合わせフォーム：http://localhost/
確認画面：http://localhost/confirm
サンクスページ：http://localhost/thanks
会員登録画面：
http://localhost/register
ログイン画面：
http://localhost/login
管理画面：
http://localhost/admin
##ER図

┌──────────────┐
│ categories   │
├──────────────┤
│ id           │
│ name         │
└──────────────┘
        │
        │ 1対多
        │
        ▼
┌──────────────┐
│ contacts     │
├──────────────┤
│ id           │
│ category_id  │
│ first_name   │
│ last_name    │
│ gender       │
│ email        │
│ tel          │
│ address      │
│ building     │
│ detail       │
└──────────────┘