<?php
/********************************************************
	JobExpert v1.0
	powered by Script Developers Group (SD-Group)
	email: info@sd-group.org.ua
	url: http://sd-group.org.ua/
	Copyright 2010-2015 (c) SD-Group
	All rights reserved
=========================================================
	Модуль оплаты - WebMoney - Админка
********************************************************/
/**
* @package
* @todo
*/

(!defined('SDG')) ? die ('Triple protection!') : null;

require_once 'core/mods/payments/webmoney/lang/' . CONF_LANGUAGE . '/adm.webmoney.lang.php';
require_once 'core/mods/payments/webmoney/lang/' . CONF_LANGUAGE . '/webmoney.lang.php';
require_once 'core/mods/payments/webmoney/lang/' . CONF_LANGUAGE . '/lang._custom.php';


$modMenu[] = array('id' => 'webmoney', 'action' => 'config', 'icon' => 'config.png', 'text' => MENU_CONFIG);
$modMenu[] = array('id' => 'webmoney', 'action' => 'lt', 'icon' => 'langManager.png', 'text' => MENU_LANGUAGE_MANAGER);
