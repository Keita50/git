<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-j-:%%?C7s;^s^9)DGX7g{_Qh86S}*,5r-8Q:A^cPV#B1gIPRZSAiYz ,Ss2RB~~' );
define( 'SECURE_AUTH_KEY',  '[I5]xV65A[iQ]Gn+i<t>?|D&wZ+dE%$FczW@[;Bd=qqx6 0hYm0 _{K%7lZu$9^J' );
define( 'LOGGED_IN_KEY',    '90);1!+`xy|eK[~V*fsk@!1AwoWjRB7~(nta&inQ?k0*[jda}.F;RgBJ}z+QYv1I' );
define( 'NONCE_KEY',        '%Ms_>59c6.:roy6|U$>iYtwwu6Pj%w^BoDgkoW{b6w*k]y?D1YLK{u%cTMtY.+HC' );
define( 'AUTH_SALT',        'qS%kpAz`N:GFM{ 1zF1V!T_NNk)J*={:bpwf&rb3[{:r1o$fAU5NX:p7L+`lLQ5J' );
define( 'SECURE_AUTH_SALT', '(C%D6_GW,z!M7m&t&0(Po=7Up@NE6PEJ6Ys@m-4yH?.zyQ:jE4IKFj7|8+HWjWQd' );
define( 'LOGGED_IN_SALT',   '6VtE,Wh83JI`OL_?b?sHlvvkL <:dQ!LaIEC`wpk9_K6j2;O]<Gvg<sWS5c4,3@=' );
define( 'NONCE_SALT',       '5)5BmMXh)cgug<MVPzk~mg~2A.p<_DLxi.U-*Rf%)PRn$_}JJC83+A.Tyc#u,#FV' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
