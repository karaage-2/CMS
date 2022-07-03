<?php require 'settings.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="format-detection" content="email=no,telephone=no,address=no" />
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>" />
	<meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:type" content="article">
	<!--トップページならwebsite -->
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta property="og:locale" content="ja_JP" />
	<meta property="og:image" content="<?php echo $thumbnailurl; ?>" />
	<meta name="twitter:card" content="<?php echo $ogsummary; ?>" />
	<!-- このしたのやつはsettings.php的なの作ってそこの変数に中身入れてからincludeして設定する。 -->
	<!-- 全スタイルシートをまとめたの作ってそれをすべてのページで読ませる。 -->
	<link rel="stylesheet" href="./style.css" />
	<link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
	<link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
	<link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
	<link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
	<link rel="apple-touch-icon-precomposed" href="画像のURL" />
	<meta name="msapplication-TileImage" content="画像のURL" />
	<meta name="msapplication-TileColor" content="サイトテーマカラー" />
	<meta name="theme-color" content="サイトテーマカラー">
	<meta property="og:site_name" content="サイト名" />
	<meta name="twitter:site" content="@Twitterユーザー名" />
	<meta property="fb:app_id" content="appIDを入力" />
</head>
<!-- この上のは/articles/article-name/index.phpみたいなの作ってその中に入れてそのファイルにこのファイルをincludeさせる。 -->