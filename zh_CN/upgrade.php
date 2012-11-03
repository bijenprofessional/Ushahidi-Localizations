<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-11-03 12:10+0000
// PO revision date:  2012-08-20 03:03+0000
$lang = array(
	'upgrade' => array(
		'between' => '无效的输入数据。0表示否，1表示是。',
	) ,
	'upgrade_automatic' => '自动升级',
	'upgrade_available' => '可用的更新',
	'upgrade_continue_btn_text' => '继续',
	'upgrade_db_btn_text' => '升级',
	'upgrade_db_text_1' => '我们将把您的数据库自',
	'upgrade_db_text_2' => '版本升级至新的版本',
	'upgrade_db_text_3' => '点击“升级”按钮，在我们升级的过程中您可以放松一下。',
	'upgrade_db_text_4' => '如果您希望我们为您备份数据库，只需要点击下面的按钮，就可以轻松备份了',
	'upgrade_db_text_5' => '在升级时是否备份数据库？（强烈推荐您如此做）',
	'upgrade_db_title' => 'Ushahidi 数据库升级',
	'upgrade_failed' => '升级失败',
	'upgrade_manual' => '手动升级',
	'upgrade_status' => 'Ushahidi 升级情况',
	'upgrade_text_1' => '下面的说明细节如何手动升级你 Ushahidi',
	'upgrade_text_2' => '<dl><dt><strong>下载</strong></dt>',
	'upgrade_text_3' => '<dd>- 下载最新的 Ushahidi',
	'upgrade_text_4' => '<dt><strong>备份</strong></dt><dd>- .htaccess, ./applications/config/config.php, ./applications/config/database.php and ./applications/config/auth.php files. </dd><dd>- 只是以防万一, 建议，整个备份 Ushahidi 当前的配置。</dd><dt><strong>复制文件</strong></dt><dd>- 解压缩下载的文件</dd><dd>- 依赖于不同的服务器系统，使用您的首选工具/模式 (e.g. Telnet, FTP, SSH) 登录到服务器和更换内容的所有文件夹与最新的新构建。</dd><dt><strong>升级数据库</strong></dt><dd>- 首先确定你的数据库架构版本 <strong>db_version</strong> 在配置表中的值或在本页面最上面查看Ushahidi升级信息。 </dd><dd>- 如果你的版本是 version 25, 你需要从 25-26, 26-27, 27-28 依次更新到最新的 SQL <strong>/sql</strong> 目录.</dd><dd>- 同时，数据库客户端也要通过执行 upgradex-x.sql 文件更新.</dd></dl>',
	'upgrade_tables' => '<strong>Step 3:</strong> 查看 <strong>sql</strong> 文件夹. 手动运行 upgrade<xx>-<xx>.sql 文件开始从当前数据库版本更新',
	'upgrade_text_5' => '<strong>Step 4:</strong> 点击 <strong>"Continue"</strong> 按钮更新所需要的数据表',
	'upgrade_text_6' => '要自动更新，请点击下面的按钮',
	'upgrading' => '正在升级',
	'upgrade_ftp_text' => '继续简易升级，要求提供下列信息的服务器，您的网站上托管。',
	'upgrade_ftp_hostname' => 'FTP 主机名: <span>Example: "localhost"</span>',
	'upgrade_ftp_password' => 'FTP 密码:',
	'upgrade_ftp_username' => 'FTP 账户:',
	'upgrade_status_info' => '您已经更新到最新版本 Ushahidi.',
	'upgrade_db_version' => '数据库版本: ',
	'upgrade_warning_software_version' => '警告：version.php 和数据库软件版本不匹配。',
	'upgrade_warning_db_version' => '警告：在version.php 数据库版本与数据库不匹配。',
	'upgrade_database' => '数据库:',
);
