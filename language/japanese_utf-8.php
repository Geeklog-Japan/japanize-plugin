<?php

// +---------------------------------------------------------------------------+
// | Japanize Plugin for Geeklog - The Ultimate Weblog                         |
// +---------------------------------------------------------------------------+
// | geeklog/plugins/japanize/language/japanese_utf-8.php                      |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2009-2012 by the following authors:                         |
// |                                                                           |
// | Authors: Tsuchi           - tsuchi AT geeklog DOT jp                      |
// |          mystral-kk       - geeklog AT mystral-kk DOT net                 |
// +---------------------------------------------------------------------------|
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software               |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA|
// |                                                                           |
// +---------------------------------------------------------------------------|

if (strpos(strtolower($_SERVER['PHP_SELF']), strtolower(basename(__FILE__))) !== FALSE) {
	die('This file cannot be used on its own!');
}

$LANG_JPN = array(
	'piname'       => '日本語化',
	'pinameadmin'  => 'Geeklogを日本語化する',
	'keisyo'       => ' さん',
	'execute'      => '実行',
	'japanize_all' => '全部まとめて日本語化実行',
	'restore_all'  => '全部まとめて英語版に戻す',
	'cancel'       => 'キャンセル',
);

$LANG_configsections['japanize'] = array(
	'label' => 'Japanize',
	'title' => 'Japanizeの設定',
);

$LANG_confignames['japanize'] = array();

$LANG_configsubgroups['japanize'] = array(
	'sg_main' => 'メイン',
);

$LANG_fs['japanize'] = array(
	'fs_main' => 'デフォルトの設定',
);

$LANG_configselects['japanize'] = array(
	0 => array('はい' => 1, 'いいえ' => 0),
	1 => array('はい' => TRUE, 'いいえ' => FALSE)
);
