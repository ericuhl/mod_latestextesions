<?php

/**
* Latest Extensions
* @package Joomla.Plugin
* @subpackage Content.latestextensions
* @since 3.0
*/

//Restrict Access to this file
defined('_JEXEC') or die;

//Create module helper class
abstract class mod_latestextensionsHelper
{
	//Query the database for the data
	public static function getList(&$params)
	{	
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		//Get the data params and sort them by id in decending order, only get 5
		$query->select('name, extension_id, type');
		$query->from('#__extensions');
		$query->order('extension_id DESC');
		$db->setQuery($query, 0, $params->get('count', 5));

		//Check for any errors
		try
		{
			$results = $db->loadObjectList();
		}
		catch (RuntimeException $e)
		{
			JError::raiseError(500, $e->getMessage());
			return false;
		}
		//Cycle through the variables and prepare data for view
		foreach ($results as $k => $result)
		{
			$results[$k] = new stdClass;
			$results[$k]->name = htmlspecialchars( $result->name );
			$results[$k]->id = (int)$result->extension_id;
			$results[$k ]->type = htmlspecialchars( $result->type );
		}
		//return the results
		return $results;
	}
}