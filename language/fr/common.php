<?php
/**
 *
 * Ideas. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'ADD'					=> 'Ajouter',
	'ALL_IDEAS'				=> 'Toutes les idées',
	'ALREADY_VOTED'			=> 'Un votre a déjà été soumis sur cette idée.',

	'CHANGE_STATUS'			=> 'Modifier le statut',
	'CLICK_TO_VIEW'			=> 'Cliquer pour voir les votes.',
	'CONFIRM_DELETE'		=> 'Suppression de cette idée.',

	'DATE'					=> 'Date',
	'DELETE_IDEA'			=> 'Supprimer cette idée',
	'DUPLICATE'				=> 'Doublon',

	'EDIT'					=> 'Modifier',
	'ENABLE_JS'             => 'Il est nécessaire d’activer le langage JavaScript sur son navigateur Web pour utiliser la boite à idées.',

	'IDEAS'					=> 'Idées',
	'IDEA_DELETED'			=> 'Idée supprimée avec succès.',
	'IDEA_ID'				=> 'ID de l’idée',
	'IDEA_LIST'				=> 'Liste des idées',
	'IDEA_NUM'				=> 'Idée n°',
	'IDEA_NOT_FOUND'		=> 'Idée non trouvée',
	'IDEAS_TITLE'			=> 'Boite à idées',
	'IDEAS_NOT_AVAILABLE'	=> 'Actuellement, les idées ne sont pas accessibles.',
	'IMPLEMENTED'           => 'Implémentée',
	'IMPLEMENTED_IDEAS'		=> 'Idées récemment implémentées',
	'IN_PROGRESS'           => 'En cours de progression',
	'INVALID'				=> 'Non valable',
	'INVALID_VOTE'			=> 'Vote incorrect; le nombre saisi	était incorrect.',

	'JS_DISABLED'           => 'Le langage JavaScript est désactivé',

	'LATEST_IDEAS'			=> 'Dernières idées',
	'LOGGED_OUT'			=> 'Il est nécessaire d’être connecté au forum pour réaliser cette action.',

	'NEW'					=> 'Nouvelle',
	'NEW_IDEA'				=> 'Nouvelle idée',
	'NO_IDEAS_DISPLAY'		=> 'Il n’y a aucune idée à afficher.',

	'OPEN_IDEAS'			=> 'Idées ouvertes',

	'POST_IDEA'				=> 'Soumettre une nouvelle idée',
	'POSTING_NEW_IDEA'		=> 'Publication d’une nouvelle idée',

	'RATING'                => 'Votes',
	'REMOVE_VOTE'			=> 'Retirer son vote',
	'RETURN_IDEAS'			=> '%sretourner aux idées%s',
	'RFC'					=> 'RFC (demande de commentaires)',
	'RFC_ERROR'				=> 'Un RFC doit être un sujet ouvert sur le forum Area51.',

	'SEARCH_IDEAS'			=> 'Rechercher des idées…',
	'SCORE'                 => 'Score',
	'SHOW_W_STATUS'			=> 'Afficher les idées avec leur statut',
	'STATUS'				=> 'Statut',

	'TICKET'				=> 'Ticket',
	'TICKET_ERROR'			=> 'L’ID du ticket doit être au format : « PHPBB3-##### ».',
	'TICKET_ERROR_DUP'		=> 'Merci d’utiliser le numéro de l’ID de l’idée.',
	'TITLE'					=> 'Titre',
	'TITLE_TOO_LONG'		=> 'Le sujet doit comporter moins de %d caractères.',
	'TITLE_TOO_SHORT'		=> 'Il est nécessaire d’indiquer un sujet lors de la publication d’une nouvelle idée.',
	'TOP'                   => 'Top',
	'TOP_IDEAS'				=> 'Top des idées',
	'TOTAL_IDEAS'			=> array(
		1	=> '%d idée',
		2	=> '%d idées',
	),
	'TOTAL_POINTS'			=> array(
		1	=> '%s point.',
		2	=> '%s points.',
	),

	'UPDATED_VOTE'			=> 'Le vote a été mis à jour avec succès !',

	'VIEW_IDEA'				=> 'Voir l’idée',
	'VIEW_IMPLEMENTED'		=> 'Voir toutes les idées implémentées',
	'VIEW_LATEST'			=> 'Voir toutes les idées ouvertes',
	'VIEW_TOP'				=> 'Voir les idées les mieux notées',
	'VIEWING_IDEAS'			=> 'Consulte les idées',
	'VOTE'					=> 'Voter',
	'VOTE_DOWN'				=> 'Voter contre',
	'VOTE_ERROR'			=> 'Une erreur s’est produite',
	'VOTE_FAIL'				=> 'Échec lors du vote; il est recommandé de vérifier sa connexion au forum.',
	'VOTE_SUCCESS'			=> 'Le vote pour cette idée a été réalisé avec succès.',
	'VOTE_UP'				=> 'Voter pour',
	'VOTES'					=> 'Votes',
));
