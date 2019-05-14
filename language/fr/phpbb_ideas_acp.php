<?php
/**
 *
 * Ideas. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	// ACP module
	'ACP_IDEAS_FORUM_ID'			=> 'Forum des idées',
	'ACP_IDEAS_FORUM_ID_EXPLAIN'	=> 'Permet de sélectionner le forum dans lequel les sujets des idées seront publiés. Une fois appliqué, démarrer la configuration du forum des idées en cliquant sur le bouton approprié ci-dessous.',
	'ACP_IDEAS_FORUM_SETUP'			=> 'Configurer le forum des idées',
	'ACP_IDEAS_FORUM_SETUP_CONFIRM'	=> 'Configuration du forum des idées.',
	'ACP_IDEAS_FORUM_SETUP_EXPLAIN'	=> 'Permet de configurer le forum des idées. Les utilisateurs ne seront pas autorisés à publier de nouveaux sujets. Qui plus est, le délestage automatique pour ce forum sera désactivé. Information : il est nécessaire de définir le forum des idées en premier.',
	'ACP_IDEAS_FORUM_SETUP_UPDATED'	=> 'Les paramètres du forum des idées ont été mis à jour avec succès.',
	'ACP_IDEAS_NO_FORUM'			=> 'Aucun forum sélectionné',
	'ACP_IDEAS_SETTINGS_UPDATED'	=> 'Les paramètres de l’extension « phpBB Ideas » ont été mis à jour.',
	'ACP_IDEAS_UTILITIES'			=> 'Utilitaires d’idées',
	'ACP_IDEAS_BASE_URL'			=> 'Adresse URL de base des idées (facultatif)',
	'ACP_IDEAS_BASE_URL_EXPLAIN'	=> 'Permet de saisir l’adresse URL complète de la page dédiée aux idées, telle que : <samp>http://www.phpbb.com/ideas</samp>. Ce paramètre devrait être renseigné uniquement si le forum possède une configuration personnalisée des redirections empêchant l’extension « phpBB Ideas » de fonctionner correctement.',
	'ACP_PHPBB_IDEAS_EXPLAIN'		=> 'Sur cette page, il est possible de configurer l’extension « phpBB Ideas ». Cette dernière fonctionne telle une boite à idée où les utilisateurs sont autorisés à suggérer et voter des idées qui pourraient aider à améliorer le forum phpBB.',
));
