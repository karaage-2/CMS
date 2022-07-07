<?php

// ライブラリの読み込み
require_once "./Item.php";
require_once "./Feed.php";
require_once "./RSS1.php";

// エイリアスの作成
use \FeedWriter\RSS1;

// インスタンスの作成
$feed = new RSS1;

//チャンネル情報
$feed->setTitle("SYNCER");				// チャンネル名
$feed->setLink("https://syncer.jp/");		// URLアドレス
$feed->setDescription("知識と感動を同期(Sync)するブログ");	// チャンネル紹介テキスト
$feed->setChannelAbout("https://syncer.jp/about");	// ブログのアバウト・ページ

// アイテム(1つだけ登録)
$item = $feed->createNewItem();
$item->setTitle("PHPでRSS、AtomのFeedを作成する方法");	// タイトル
$item->setLink("https://syncer.jp/how-to-make-feed-by-php");	// リンク
$item->setDate(strtotime("2014-11-23 18:30"));	// 更新日時
$item->setDescription("PHPを使って、RSS、Atomのフィード・ファイルを作成する方法を解説します。");	// 紹介テキスト
$item->addElement("dc:subject", "ここの値を指定");	// オプションとなる項目
$feed->addItem($item);

//コードの生成
$xml = $feed->generateFeed();

//ファイルの保存場所を設定
$file = "./rss1.xml";

//ファイルの保存を実行
@file_put_contents($file, $xml);
