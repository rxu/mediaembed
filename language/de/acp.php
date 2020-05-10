<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang,[
	// Settings
	'ACP_MEDIA_SETTINGS'				=> 'Media Embed Einstellungen',
	'ACP_MEDIA_SETTINGS_EXPLAIN'		=> 'Hier kannst du die Einstellungen für das Media Embed PlugIn anpassen.',
	'ACP_MEDIA_DISPLAY_BBCODE'			=> 'Zeige <samp>[MEDIA]</samp> BBCode auf der Posting Seite',
	'ACP_MEDIA_DISPLAY_BBCODE_EXPLAIN'	=> 'Wenn nicht erlaubt, wird der BBCode Button nicht angezeigt, dennoch können die User das <samp>[media]</samp> in ihren Posts verwenden.',
	'ACP_MEDIA_ALLOW_SIG'				=> 'Erlaubt in den Benutzer Signaturen',
	'ACP_MEDIA_ALLOW_SIG_EXPLAIN'		=> 'Erlaube in den Usersignaturen Embedded Media Inhalte.',
	'ACP_MEDIA_ENABLE_CACHE'			=> 'Enable Media Embed cache',
	'ACP_MEDIA_ENABLE_CACHE_EXPLAIN'	=> 'In some cases, a simple URL does not provide all the information needed to embed a resource and the external content has to be downloaded, inspected and the information extracted. This only happens once at parsing time, but if the same text is parsed multiple times (e.g. when editing a text) a local copy of the external content can be saved in the cache for performance.',
	'ACP_MEDIA_PARSE_URLS'				=> 'Konvertiere reine URLs',
	'ACP_MEDIA_PARSE_URLS_EXPLAIN'		=> 'Aktiviere diese Einstellung, um reine URLs (nicht eingeschlossen durch <samp>[media]</samp> oder <samp>[url]</samp> Tags) in Embedded Media Inhalte zu konvertieren. Beachte dass Änderungen sich nur auf neue Posts auswirken, da existierende Posts bereits geparsed wurden.',
	'ACP_MEDIA_PURGE_CACHE'				=> 'Purge Media Embed cache',
	'ACP_MEDIA_PURGE_CACHE_EXPLAIN'		=> 'Media Embed cache is being purged by cron once per day (if enabled above). The cache can be manially purged here.',
	'ACP_MEDIA_SITE_TITLE'				=> 'Seiten id: %s',
	'ACP_MEDIA_SITE_DISABLED'			=> 'Diese Seite hat einen konflickt mit einem ebreits existierenden BBCode: [%s]',

	// Manage sites
	'ACP_MEDIA_MANAGE'					=> 'Verwaltung der Media Embed Seiten',
	'ACP_MEDIA_MANAGE_EXPLAIN'			=> 'Hier kannst du die Seiten verwalten welche durch das Media Embed PlugIn angezeigt werden dürfen.',
	'ACP_MEDIA_SITES_ERROR'				=> 'Es gibt keine Media Seiten zum anzeigen.',
	'ACP_MEDIA_SITES_MISSING'			=> 'The following sites are no longer supported or working. Please re-submit this page to remove them.',
]);
