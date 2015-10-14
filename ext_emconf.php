<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "focuspoint".
 *
 * Auto generated 02-04-2015 06:34
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title'            => 'Focuspoint',
	'description'      => 'Focuspoint integrate the focal point method to crop images in the frontend of the web page. Use the jQuery-focuspoint plugin (https://github.com/jonom/jquery-focuspoint example http://jonom.github.io/jquery-focuspoint/demos/helper/index.html) to crop the images. Use the function as wizard in the file list view and directly in the content element.',
	'category'         => 'be',
	'version'          => '1.4.1',
	'state'            => 'stable',
	'clearcacheonload' => TRUE,
	'author'           => 'Tim Lochmüller',
	'author_email'     => 'tim.lochmueller@hdnet.de',
	'author_company'   => 'hdnet.de',
	'constraints'      => array(
		'depends' => array(
			'typo3'      => '6.2.0-7.99.99',
			'autoloader' => '1.5.6-1.9.9',
		),
	),
);

