<?php

/********************
 * Constant declaration
 ********************/

define('G5_VERSION', '그누보드5');
define('G5_GNUBOARD_VER', '5.4.2.3');

// 이 상수가 정의되지 않으면 각각의 개별 페이지는 별도로 실행될 수 없음
define('_GNUBOARD_', true);

if (PHP_VERSION >= '5.1.0') {
  //if (function_exists("date_default_timezone_set")) date_default_timezone_set("Asia/Seoul");
  date_default_timezone_set("Asia/Seoul");
}

/********************
 * 경로 상수
 ********************/

/*
security server domain
It refers to the address that starts with https,
which is used for membership registration and writing.
If there is a port, enter :443 after the domain.
If there is no secure server address,
you can leave it blank and do not put / after the secure server address.
입력예) https://www.domain.com:443/gnuboard5
*/
define('G5_DOMAIN', '');
define('G5_HTTPS_DOMAIN', '');

// 디버깅 상수, 실제 서버운영시 false 로 설정해 주제요.
define('G5_DEBUG', false);

// Set Databse table default engine is Databse default_storage_engine, If you want to use MyISAM or InnoDB, change to MyISAM or InnoDB.
define('G5_DB_ENGINE', '');

// Set Databse table default Charset
// utf8, utf8mb4 The default value is utf8, and if you modify it to utf8mb4 before installation, you can input emojis in all tables. utf8mb4 requires mysql or mariadb version 5.5 or higher.
define('G5_DB_CHARSET', 'utf8');

/*
The www.sir.kr and sir.kr domains are recognized as different domains. To share cookies, enter something like .sir.kr.
If there is no input here, domains with www and domains without www do not share cookies, so login may be broken.
*/
define('G5_COOKIE_DOMAIN', '');

define('G5_DBCONFIG_FILE', 'dbconfig.php');

define('G5_ADMIN_DIR', 'adm');
define('G5_BBS_DIR', 'bbs');
define('G5_CSS_DIR', 'css');
define('G5_DATA_DIR', 'data');
define('G5_EXTEND_DIR', 'extend');
define('G5_IMG_DIR', 'img');
define('G5_JS_DIR', 'js');
define('G5_LIB_DIR', 'lib');
define('G5_PLUGIN_DIR', 'plugin');
define('G5_SKIN_DIR', 'skin');
define('G5_EDITOR_DIR', 'editor');
define('G5_MOBILE_DIR', 'mobile');
define('G5_OKNAME_DIR', 'okname');

define('G5_KCPCERT_DIR', 'kcpcert');
define('G5_LGXPAY_DIR', 'lgxpay');

define('G5_SNS_DIR', 'sns');
define('G5_SYNDI_DIR', 'syndi');
define('G5_PHPMAILER_DIR', 'PHPMailer');
define('G5_SESSION_DIR', 'session');
define('G5_THEME_DIR', 'theme');

define('G5_GROUP_DIR', 'group');
define('G5_CONTENT_DIR', 'content');

// The URL is the path in the browser (from the domain).
if (G5_DOMAIN) {
  define('G5_URL', G5_DOMAIN);
} else {
  if (isset($g5_path['url'])) {
    define('G5_URL', $g5_path['url']);
  } else {
    define('G5_URL', '');
  }
}

if (isset($g5_path['path'])) {
  define('G5_PATH', $g5_path['path']);
} else {
  define('G5_PATH', '');
}

define('G5_ADMIN_URL', G5_URL . '/' . G5_ADMIN_DIR);
define('G5_BBS_URL', G5_URL . '/' . G5_BBS_DIR);
define('G5_CSS_URL', G5_URL . '/' . G5_CSS_DIR);
define('G5_DATA_URL', G5_URL . '/' . G5_DATA_DIR);
define('G5_IMG_URL', G5_URL . '/' . G5_IMG_DIR);
define('G5_JS_URL', G5_URL . '/' . G5_JS_DIR);
define('G5_SKIN_URL', G5_URL . '/' . G5_SKIN_DIR);
define('G5_PLUGIN_URL', G5_URL . '/' . G5_PLUGIN_DIR);
define('G5_EDITOR_URL', G5_PLUGIN_URL . '/' . G5_EDITOR_DIR);
define('G5_OKNAME_URL', G5_PLUGIN_URL . '/' . G5_OKNAME_DIR);
define('G5_KCPCERT_URL', G5_PLUGIN_URL . '/' . G5_KCPCERT_DIR);
define('G5_LGXPAY_URL', G5_PLUGIN_URL . '/' . G5_LGXPAY_DIR);
define('G5_SNS_URL', G5_PLUGIN_URL . '/' . G5_SNS_DIR);
define('G5_SYNDI_URL', G5_PLUGIN_URL . '/' . G5_SYNDI_DIR);
define('G5_MOBILE_URL', G5_URL . '/' . G5_MOBILE_DIR);

// PATH is the absolute path on the server
define('G5_ADMIN_PATH', G5_PATH . '/' . G5_ADMIN_DIR);
define('G5_BBS_PATH', G5_PATH . '/' . G5_BBS_DIR);
define('G5_DATA_PATH', G5_PATH . '/' . G5_DATA_DIR);
define('G5_EXTEND_PATH', G5_PATH . '/' . G5_EXTEND_DIR);
define('G5_LIB_PATH', G5_PATH . '/' . G5_LIB_DIR);
define('G5_PLUGIN_PATH', G5_PATH . '/' . G5_PLUGIN_DIR);
define('G5_SKIN_PATH', G5_PATH . '/' . G5_SKIN_DIR);
define('G5_MOBILE_PATH', G5_PATH . '/' . G5_MOBILE_DIR);
define('G5_SESSION_PATH', G5_DATA_PATH . '/' . G5_SESSION_DIR);
define('G5_EDITOR_PATH', G5_PLUGIN_PATH . '/' . G5_EDITOR_DIR);
define('G5_OKNAME_PATH', G5_PLUGIN_PATH . '/' . G5_OKNAME_DIR);

define('G5_KCPCERT_PATH', G5_PLUGIN_PATH . '/' . G5_KCPCERT_DIR);
define('G5_LGXPAY_PATH', G5_PLUGIN_PATH . '/' . G5_LGXPAY_DIR);

define('G5_SNS_PATH', G5_PLUGIN_PATH . '/' . G5_SNS_DIR);
define('G5_SYNDI_PATH', G5_PLUGIN_PATH . '/' . G5_SYNDI_DIR);
define('G5_PHPMAILER_PATH', G5_PLUGIN_PATH . '/' . G5_PHPMAILER_DIR);
//==============================================================================


//==============================================================================
// set the device to be used
// When setting the PC, the PC screen is also displayed on the mobile device
// When mobile is set, the mobile screen is also displayed on the PC
// When both are set, the screen according to the connected device is displayed
//------------------------------------------------------------------------------
define('G5_SET_DEVICE', 'both');

define('G5_USE_MOBILE', true); // 모바일 홈페이지를 사용하지 않을 경우 false 로 설정
define('G5_USE_CACHE', true); // 최신글등에 cache 기능 사용 여부


/********************
* time constant
 ********************/
// If the server time and the actual time used are different, please correct it.
// A day is 86400 seconds. 1 hour equals 3600 seconds
// if 6 hours is earlier time() + (3600 * 6);
// if 6 hours is slow time() - (3600 * 6);
define('G5_SERVER_TIME', time());
define('G5_TIME_YMDHIS', date('Y-m-d H:i:s', G5_SERVER_TIME));
define('G5_TIME_YMD', substr(G5_TIME_YMDHIS, 0, 10));
define('G5_TIME_HIS', substr(G5_TIME_YMDHIS, 11, 8));

// Input value check constant (Never change the number.)
define('G5_ALPHAUPPER', 1); // 영대문자
define('G5_ALPHALOWER', 2); // 영소문자
define('G5_ALPHABETIC', 4); // 영대,소문자
define('G5_NUMERIC', 8); // 숫자
define('G5_HANGUL', 16); // 한글
define('G5_SPACE', 32); // 공백
define('G5_SPECIAL', 64); // 특수문자

// SEO TITLE 문단 길이
define('G5_SEO_TITEL_WORD_CUT', 8);        // SEO TITLE 문단 길이

// 퍼미션
define('G5_DIR_PERMISSION', 0755); // 디렉토리 생성시 퍼미션
define('G5_FILE_PERMISSION', 0644); // 파일 생성시 퍼미션

// 모바일 인지 결정 $_SERVER['HTTP_USER_AGENT']
define(
  'G5_MOBILE_AGENT',
  'phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|BB10|android|sony'
);

// SMTP
// lib/mailer.lib.php 에서 사용
define('G5_SMTP', '127.0.0.1');
define('G5_SMTP_PORT', '25');


/********************
  * Other constants
  ************************/

// Specify the encryption function
// If you change the settings while operating the site, problems such as login failure occur.
// sql_password is used before version 5.4, default is changed to create_hash from version 5.4
//define('G5_STRING_ENCRYPT_FUNCTION', 'sql_password');
define('G5_STRING_ENCRYPT_FUNCTION', 'create_hash');
define(
  'G5_MYSQL_PASSWORD_LENGTH', 41
);         // mysql password length 41, old_password 의 경우에는 16

// SQL 에러를 표시할 것인지 지정
// 에러를 표시하려면 TRUE 로 변경
define('G5_DISPLAY_SQL_ERROR', FALSE);

// escape string 처리 함수 지정
// addslashes 로 변경 가능
define('G5_ESCAPE_FUNCTION', 'sql_escape_string');

// sql_escape_string 함수에서 사용될 패턴
//define('G5_ESCAPE_PATTERN',  '/(and|or).*(union|select|insert|update|delete|from|where|limit|create|drop).*/i');
//define('G5_ESCAPE_REPLACE',  '');

// 게시판에서 링크의 기본개수를 말합니다.
// 필드를 추가하면 이 숫자를 필드수에 맞게 늘려주십시오.
define('G5_LINK_COUNT', 2);

// 썸네일 jpg Quality 설정
define('G5_THUMB_JPG_QUALITY', 90);

// 썸네일 png Compress 설정
define('G5_THUMB_PNG_COMPRESS', 5);

// 모바일 기기에서 DHTML 에디터 사용여부를 설정합니다.
define('G5_IS_MOBILE_DHTML_USE', false);

// MySQLi 사용여부를 설정합니다.
define('G5_MYSQLI_USE', true);

// Browscap 사용여부를 설정합니다.
define('G5_BROWSCAP_USE', true);

// 접속자 기록 때 Browscap 사용여부를 설정합니다.
define('G5_VISIT_BROWSCAP_USE', false);

// set ip hiding method
/* How to change the hiding method of 123.456.789.012 ip
\\1 corresponds to 123, \\2 to 456, \\3 to 789, \\4 to 012,
You can use \\1 for the displayed part, and ♡ for the hidden part.
Just write another letter.
*/
define('G5_IP_DISPLAY', '\\1.♡.\\3.\\4');

if (isset($_SERVER['HTTPS'])
  && $_SERVER['HTTPS'] == 'on'
) {   //https 통신일때 daum 주소 js
  define(
    'G5_POSTCODE_JS',
    '<script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>'
  );
} else {  //http 통신일때 daum 주소 js
  define(
    'G5_POSTCODE_JS',
    '<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>'
  );
}
?>