<?php

/**
* Latest Extensions
* @package Joomla.Plugin
* @subpackage Content.latestextensions
* @since 3.0
*/

//Restrict Access to this file
defined('_JEXEC') or die;
//Run helper.php for database queries
require_once __DIR__ . '/helper.php';
//Load data from helper.php and put it in an array
$list = mod_latestextensionsHelper::getList($params);
//Load the params onto module class sfx for use in view
$modclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
//Load the default layou for view
require JModuleHelper::getLayoutPath('mod_latestextensions',$params->get('layout', 'default'));
