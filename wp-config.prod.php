<?php
define( 'COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// https://api.wordpress.org/secret-key/1.1/salt/
define( 'AUTH_KEY',          'Knw3]s`gAE9%A$q_4qr!::tz3LvF/l5U[Dj4`Lqh~O[$Mv2;mz2{<n [:C1+IJ@[' );
define( 'SECURE_AUTH_KEY',   '^^c/Sq2@~Ye6=:z,XNy+%yNHdWlzUj[>TB_:3r2ai/W0-aZ6y~=DMSL=hP(:H;Aq' );
define( 'LOGGED_IN_KEY',     'CS,>G4?|@5>10&dD:q_J!Luqc[5NN(F6YV%b[47tF]q]ehC7Z~Nz@>US|!E+J b8' );
define( 'NONCE_KEY',         'f?/|]:*%spB.otJ+1z#U9W3RoBjG9)A76c6~`62+p:g.D$)ukhbYvEi0dRuk~SJy' );
define( 'AUTH_SALT',         '42ye&ov6nJ#~5y1rAS!RzBa&qr3#wKnk<Ai(d})_]0^~rGBQm2F-PKhac0K.c,bb' );
define( 'SECURE_AUTH_SALT',  '=v**/VH:I@u-vp,gxBn-?v>_w3Iw<~u0ct14k[<|i#EY_wTYZYC]GmD8D2JRjSZ.' );
define( 'LOGGED_IN_SALT',    '~f{wr&u4Zs4VB#L)!1e1_2kpif;U`*I/wp]o0=2qH(^)?y)O.VhirY^W}D@KP6s8' );
define( 'NONCE_SALT',        'crbGIX^9#$J:x[[+C/d~*tvdc0DVdXLOl_W9PzxN<jyaJ~Bv{D%GGa}HSMou[c#Z' );
define( 'WP_CACHE_KEY_SALT', '>{iY}~!M]|@>WIK@mwUV`s2 b?vonq_2vvr{EVi,C[_=1VeX]GUvh7-$XIo_~zmx' );

$table_prefix = 'gnb_';

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php');
