# Zoom APIを使うために

## 開発者用サイト

[App Marketplace](https://marketplace.zoom.us/)

にてログイン

## アプリ作成

[App Marketplace](https://marketplace.zoom.us/)の画面右上

```Develop``` -> ```Build App``` と選択

保存ボタンはなく、自動的に保存されていく模様。

今回は、公開しないため

**Intend to publish this app on Zoom Marketplace**はOFF

**Choose app type**にて ``` Accout-level app ``` を選ぶ。

その下は ``` JWT API Credentials ```を選択。

## 公式
[公式API](https://marketplace.zoom.us/docs/guides/about-marketplace/zoom-developer-tools)

## JWT インストール

```  composer require tymon/jwt-auth v1.0.0-rc.4 ```

## Paizaはcurlできない

なのでまた自宅で。

https://marketplace.zoom.us/docs/api-reference/zoom-api/accounts/accounts

https://marketplace.zoom.us/docs/guides/authorization/jwt/generating-jwt

https://qiita.com/zaburo/items/176f907ea46767283785

http://kzkohashi.hatenablog.com/entry/2018/03/25/225343

https://qiita.com/nunulk/items/42ca709a91fddcba6e61

## AWSでやるか…

https://qiita.com/kidatti/items/2d6a4a24f89dc71eb66e

http://kota20.com/page-945/#PHPMySQL

## AWS で、PHP,mysqlの準備

http://kota20.com/page-945/

## jwt

Laravel-jwtに頼らない！！！！

[PHP-JWT](https://qiita.com/eku0331/items/c79395858d13ada89843)

``` composer require firebase/php-jwt ```

## curl やってやんぜ！！

[今時のPHP HTTPクライアントのGuzzleを使ってみた](https://qiita.com/yousan/items/2a4d9eac82c77be8ba8b)

``` composer require guzzlehttp/guzzle ```