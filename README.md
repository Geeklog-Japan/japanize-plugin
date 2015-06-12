Geeklog 日本語化(Japanize)プラグイン
=====================================

更新履歴
--------

* tsuchi AT geeklog DOT jp
* 2008/09/27
* 2011/02/07 update
* 2012/12/31 modified & updated by mystral-kk (geeklog AT mystral-kk DOT net)
* 2013/01/02 modified & updated by mystral-kk (geeklog AT mystral-kk DOT net)
* 2015/06/10 added README.md
* 2015/06/13 changed $_CONF['url_rewrite'] setting to true

概要
----

Geeklog-1.6.x - 2.0.0 を日本人流にするプラグインです。詳細については管理画面をご参照ください。

ファイル構成
------------

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
      ├ japanize_data.php
      ├ functions.inc
      ├ install_defaults.php
      ├ readme_ja.txt
      └ version.php

インストール方法
----------------

1. データベースおよびファイルのバックアップをとります。
2. 標準的なプラグインのファイル配置に従い、ファイルをアップロードします。
  * plugins/ 以下に japanize以下をアップロードします。
  * admin/plugins/japanize/以下に admin以下のファイルを移動します。
  * public_html/japanize/以下に public_html以下のファイルを移動します。
3. Rootユーザーとしてログインし、プラグイン管理の画面でインストールを実行します

アンインストール方法
--------------------

1. データベースおよびファイルのバックアップをとります。
2. Rootユーザーとしてログインし、プラグイン管理の画面で削除を実行します。
3. アップしたファイルを削除します。

通常のアップグレード方法
------------------------
1. データベースおよびファイルのバックアップをとります。
2. 標準的なプラグインのファイル配置に従い、ファイルをアップロードします。
  * plugins/ 以下に japanize以下をアップロードします。
  * admin/plugins/japanize/以下に admin以下のファイルを移動します。
  * public_html/japanize/以下に public_html以下のファイルを移動します。
3. Rootユーザーとしてログインし、プラグイン管理の画面で更新を実行します。
