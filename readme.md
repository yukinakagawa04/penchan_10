# AQUALAND 会員ログインとプロフィール変更

## DEMO

## 紹介と使い方

- Web アプリ『AQUALAND』のログイン画面と登録内容変更画面です。

## 工夫した点

- login_act.php にある session() からメールアドレスと PW を引っ張ってきました。

## 苦戦した点

- 解約実装がうまく行かなかったです (withdraw.php と delete.php)

## 参考にした web サイトなど

- 後で見返せるように

- 【コピペで使える】ログイン機能の簡単実装サンプル（PHP／MySQL）
  - https://tadworks.jp/archives/1147
- PHP ログイン機能
  - https://qiita.com/ryo-futebol/items/5fb635199acc2fcbd3ff
- php でのログイン機能の実装方法について詳しく解説します
  - https://webukatu.com/wordpress/blog/27673/#php-2
- PHP と MySQL を使った会員登録システムの作り方
  - https://www.tomotaku.com/programing-join-system/
- 【コピペで簡単】css で画面いっぱいに画像を魅せる方法。スマホも PC も大きな画像を見せたい！(今回は使わなかったけど学んだ)

  - https://rui-log.com/css-cover-image/#:~:text=1%E3%81%A4%E7%9B%AE%E3%81%AF%E3%80%8Cbackground,%E3%82%92100%25%E3%81%A7%E8%A6%8B%E3%81%9B%E3%81%BE%E3%81%99%E3%80%82

- 質問「画像って SQL で保存できますか？」
  - SQL 使って DB に保存するのは基本的に画像のパスです。画像自体は DB に入れるというよりは別のところにアップロードして、DB にはその画像にアクセスするための情報を入れておくイメージです。(マキさん)
