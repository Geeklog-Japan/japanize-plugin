--------------------------------------------------------------------------------
Geeklog 日本語化（Japanize)プラグイン
tsuchi AT geeklog DOT jp
2008/09/27
2011/02/07 update
2012/12/31 modified & update by mystral-kk (geeklog AT mystral-kk DOT net)

--------------------------------------------------------------------------------
概要: Geeklog-1.6.x - 2.0.0 を日本人流にするプラグインです
       詳細については管理画面をご参照ください
--------------------------------------------------------------------------------
ファイル構成
-japanize
  ├ admin
  │ └ index.php
  ├ custom
  │ └ custom_mail_japanize.php
  ├ language
  │ └ japanese_utf-8.php
  ├ public_html
  │ ├ images
  │ │ └ japanize.png
  │ ├ disabledmsg.html
  │ └ index.html
  │ templates
  │ └ admin
  │    ├ index.thtml
  ├ autoinstall.php
  ├ data.php
  ├ functions.inc
  ├ install_defaults.php
  ├ readme_ja.txt
  └ version.php

--------------------------------------------------------------------------------
インストール方法
1. データベースおよびファイルのバックアップをとります。
2. 標準的なプラグインのファイル配置に従い、ファイルをアップします。
   plugins/ 以下に japanize以下をアップ
   admin/plugins/japanize/以下に admin以下のファイルを移動
   public_html/japanize/以下に public_html以下のファイルを移動
3. Rootユーザーとしてログインし、プラグイン管理の画面でインストールを実行します

--------------------------------------------------------------------------------
アンインストール方法
1. データベースおよびファイルのバックアップをとります。
2. Rootユーザーとしてログインし、プラグイン管理の画面で削除を実行します。
3. アップしたファイルを削除します。

--------------------------------------------------------------------------------
通常のアップグレード方法
1. データベースおよびファイルのバックアップをとります。
2. 標準的なプラグインのファイル配置に従い、ファイルをアップします。
    plugins/ 以下に japanize以下をアップ
    admin/plugins/japanize/以下に admin以下のファイルを移動
    public_html/japanize/以下に public_html以下のファイルを移動
3. Rootユーザーとしてログインし、プラグイン管理の画面で更新を実行します
