<?php

require_once "./settings.php";
require_once "./Item.php";
require_once "./Feed.php";
require_once "./ATOM.php";

use \FeedWriter\ATOM;

$feed = new ATOM;


$feed->setTitle($sitename);        // チャンネル名
$feed->setLink((empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST']);    // URLアドレス
$feed->setDate(new DateTime());

// アイテム(1つだけ登録)
$item = $feed->createNewItem();
$item->setTitle("PHPでRSS、AtomのFeedを作成する方法");  // title
$item->setLink("https://syncer.jp/how-to-make-feed-by-php");  // page-llink
$item->setDate(strtotime("2014-11-23 18:30"));  // updated-date
$item->setAuthor("あらゆ");  // author
$item->setDescription("PHPを使って、RSS、Atomのフィード・ファイルを作成する方法を解説します。");  // description
$feed->addItem($item);

// コードの生成
$xml = $feed->generateFeed();

// ファイルの保存場所
$file = "./atom.xml";

// ファイルの保存を実行
@file_put_contents($file, $xml);
