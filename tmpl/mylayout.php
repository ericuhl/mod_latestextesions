<?php

/**
* Latest Extensions
* @package Joomla.Plugin
* @subpackage Content.latestextensions
* @since 3.0
*/

//Restrict Access to this file
defined('_JEXEC') or die;
?>

<div class="latestextensions<?php echo $moduleclass_sfx ?>">
	<div class="row-striped">
		<?php foreach ($list as $item) : ?>
			<div class="row-fluid">
				<div class="span4">
					<strong class="row-title">
						<?php echo $item->name; ?>
					</strong>
				</div>
				<div class="span4">
					<?php echo $item->type; ?>
				</div>
				<div class="span4">
					<?php echo $item->id; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

