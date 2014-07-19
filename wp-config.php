<?php
# Database Configuration
define( 'DB_NAME', 'wp_housedata' );
define( 'DB_USER', 'housedata' );
define( 'DB_PASSWORD', 'EPlwauN2Ns1ulF3QdHfR' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'hE0k?lm`%oQM`ni|B)UO:U)%&jczNiA6V|v%cy+]~m9KJ -Rl9G?YkEQID`EVtax');
define('SECURE_AUTH_KEY',  'gKTNp0F=_$092p[]yqN(9Ho$lzjNd$D_nj^]bRD}KD455&sJ@-A5}k6{9+-Ks}+b');
define('LOGGED_IN_KEY',    'RKP:2Oa<0NjKJR4m0$o{2o|z(1+u=#eH+7nze]+GdOO9ak`VTmk`d3&6/Wmz*F=C');
define('NONCE_KEY',        'og2h%17=7:VAzGe,D>|jIcrx!+Ta74iu!fC7mxzu?R>zmQ3#3r<k?.Xn*Uj|A@U ');
define('AUTH_SALT',        '0Sq9dqsxPx2sP>3i3)uqw](8XR#Ehd?DlBJ-sD|hX+/d7PR &F=72p;Dl+a9~6{g');
define('SECURE_AUTH_SALT', 'zh@Df|b}Wpb%^s5ZVaEG0&6CKKRN;dqa4|>{:(e1z?B]+$B-k5I18Y)h_R|:|G%Y');
define('LOGGED_IN_SALT',   'c-9  aCe:8|i,6UdzNgZ|Sy)N%J<0Ah@4uYnsg+/}W*Ml7!SRe2}U-9Cv-*#>?.`');
define('NONCE_SALT',       '($mZg+B*o1K.V!B!$dz)8|]JX+;%] yMR;{m7t7YWhC-IZ[rFBo~vR4CNfY*:5v~');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'housedata' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'e556ff3effdefd551511f6adb6be7afd21e61a5b' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '2118' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '96.126.123.64' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'housedata.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-2118', );

$wpe_special_ips=array ( );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings




define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'housedata.wpengine.com' );
define( 'PATH_CURRENT_SITE','/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
