<?php

/**
 *
 * @package phpBB3 Ideas
 * @author Callum Macrae (callumacrae) <callum@lynxphp.com>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace phpbb\ideas\controller;

// @todo: refactor out
define('IDEAS_FORUM_ID', 1);
define('IDEAS_POSTER_ID', 1);

class main
{
	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/* @var \phpbb\ideas\factory\Ideas */
	protected $ideas;

	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user, \phpbb\ideas\factory\Ideas $ideas)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
		$this->ideas = $ideas;

		$this->user->add_lang_ext('phpbb/ideas', 'common');
	}

	/**
	 * Controller for /ideas
	 *
	 * @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
	 */
	public function index()
	{
		$rows = $this->ideas->get_ideas(10, 'date', 'DESC');
		foreach ($rows as $row)
		{
			$this->template->assign_block_vars('latest_ideas', array(
				'ID'		=> $row['idea_id'],
				'LINK'		=> append_sid('./idea.php', 'id=' . $row['idea_id']),
				'TITLE'		=> $row['idea_title'],
				'AUTHOR'	=> ideas_get_user_link($row['idea_author']),
				'DATE'		=> $this->user->format_date($row['idea_date']),
				'READ'      => $row['read'],
				'VOTES_UP'	=> $row['idea_votes_up'],
				'VOTES_DOWN'=> $row['idea_votes_down'],
				'POINTS'    => $row['idea_votes_up'] - $row['idea_votes_down'],
			));
		}

		$rows = $this->ideas->get_ideas(10, 'top', 'DESC');
		foreach ($rows as $row)
		{
			$this->template->assign_block_vars('top_ideas', array(
				'ID'		=> $row['idea_id'],
				'LINK'		=> append_sid('./idea.php', 'id=' . $row['idea_id']),
				'TITLE'		=> $row['idea_title'],
				'AUTHOR'	=> ideas_get_user_link($row['idea_author']),
				'DATE'		=> $this->user->format_date($row['idea_date']),
				'READ'      => $row['read'],
				'VOTES_UP'	=> $row['idea_votes_up'],
				'VOTES_DOWN'=> $row['idea_votes_down'],
				'POINTS'    => $row['idea_votes_up'] - $row['idea_votes_down'],
			));
		}

		$rows = $this->ideas->get_ideas(5, 'date', 'DESC', 'idea_status = 3');
		foreach ($rows as $row)
		{
			$this->template->assign_block_vars('implemented_ideas', array(
				'ID'		=> $row['idea_id'],
				'LINK'		=> append_sid('./idea.php', 'id=' . $row['idea_id']),
				'TITLE'		=> $row['idea_title'],
				'AUTHOR'	=> ideas_get_user_link($row['idea_author']),
				'DATE'		=> $this->user->format_date($row['idea_date']),
				'READ'      => $row['read'],
				'VOTES_UP'	=> $row['idea_votes_up'],
				'VOTES_DOWN'=> $row['idea_votes_down'],
				'POINTS'    => $row['idea_votes_up'] - $row['idea_votes_down'],
			));
		}

		return $this->helper->render('index_body.html', $this->user->lang['IDEAS_HOME']);
	}

	/**
	 * Controller for /idea/{idea_id}
	 *
	 * @param $idea_id int The ID of the requested idea, maybe?
	 */
	public function idea($idea_id)
	{
		$idea = $this->ideas->get_idea($idea_id);
		var_dump($idea);
	}
}

/**
 * Returns a link to the users profile, complete with colour.
 *
 * Is there a function that already does this? This seems fairly database heavy.
 *
 * @todo: kill kill kill
 *
 * @param int $id The ID of the user.
 * @return string An HTML link to the users profile.
 */
function ideas_get_user_link($id)
{
	global $db;
	$sql = 'SELECT username, user_colour
		FROM ' . USERS_TABLE . '
		WHERE user_id = ' . $id;
	$result = $db->sql_query_limit($sql, 1);
	$author = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	return get_username_string('full', $id, $author['username'], $author['user_colour']);
}