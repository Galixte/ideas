<?php
/**
 *
 * Ideas extension for the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbb\ideas\tests\ui;

use Facebook\WebDriver\WebDriverKeys;

/**
 * @group ui
 */
class ideas_test extends \phpbb_ui_test_case
{
	/**
	 * {@inheritdoc}
	 */
	public static function setUpBeforeClass()
	{
		// Set these properties to true so we can use the same board created for functional tests
		// instead of having to create and set up a whole new board.
		self::$already_installed = true;
		self::$install_success = true;
		parent::setUpBeforeClass();
	}

	/**
	 * Test JavaScript user interactions
	 *
	 * @throws \Facebook\WebDriver\Exception\NoSuchElementException
	 * @throws \Facebook\WebDriver\Exception\TimeOutException
	 */
	public function test_js_actions()
	{
		$this->login();
		$this->admin_login();

		$this->visit('app.php/idea/1');

		// test showing the list of voters
		$votes = $this->find_element('className', 'voteslist');
		$this->assertEquals('none', $votes->getCSSValue('display'));
		$this->find_element('className', 'votes')->click();
		$this->assertEquals('block', $votes->getCSSValue('display'));

		// test voting
		$votedown = $this->find_element('className', 'minivotedown');
		$this->assertEquals('0', $votedown->getText());
		$votedown->click();
		$this->waitForAjax();
		$this->assertEquals('1', $this->find_element('className', 'minivotedown')->getText());

		// test changing the status
		$this->assertEquals('New', $this->find_element('className', 'status-badge')->getText());
		$elements = $this->find_element('cssSelector', 'select#status')
			->findElements(\Facebook\WebDriver\WebDriverBy::tagName('option'));
		foreach ($elements as $element)
		{
			if ($element->getText() === 'In Progress')
			{
				$element->click();
			}
		}
		$this->waitForAjax();
		$this->assertEquals('In Progress', $this->find_element('className', 'status-badge')->getText());

		// test showing the edit ticket input and entering text into it
		$test = 'PHPBB3-123';
		$input = $this->find_element('cssSelector', '#ticketeditinput');
		$this->assertFalse($input->isDisplayed());
		$this->find_element('cssSelector', '#ticketedit')->click();
		$this->assertTrue($input->isDisplayed());
		$input->sendKeys([$test, WebDriverKeys::ENTER]);
		$this->waitForAjax();
		$this->assertEquals($test, $this->find_element('cssSelector', '#ticketlink')->getText());
	}

	/**
	 * Wait for AJAX, this should be added to the framework.
	 *
	 * @param string $framework javascript frameworks jquery|prototype|dojo
	 * @throws \Facebook\WebDriver\Exception\NoSuchElementException
	 * @throws \Facebook\WebDriver\Exception\TimeOutException
	 */
	public function waitForAjax($framework = 'jquery')
	{
		switch ($framework)
		{
			case 'jquery':
				$code = 'return jQuery.active;';
			break;
			case 'prototype':
				$code = 'return Ajax.activeRequestCount;';
			break;
			case 'dojo':
				$code = 'return dojo.io.XMLHTTPTransport.inFlight.length;';
			break;
			default:
				throw new \RuntimeException('Unsupported framework');
			break;
		}
		// wait for at most 30s, retry every 2000ms (2s)
		$driver = $this->getDriver();
		$driver->wait(30, 2000)->until(
			function () use ($driver, $code) {
				return !$driver->executeScript($code);
			}
		);
	}
}
