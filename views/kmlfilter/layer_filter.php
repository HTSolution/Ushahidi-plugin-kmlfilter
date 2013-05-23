<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!-- layer filters -->
<?php
foreach($layers as $layer) {
	echo "<li>";
	echo "<a href=\"#\" class=\"lyr_selected\" id=\"filter_link_lyr_".$layer->id."\" title=\"{$layer->layer_name}\">"
			. "<span>".strip_tags($layer->layer_name)."</span>"
		. "</a>";
		echo "<div id=\"filter_link_lyr_child_".$layer->id."\" class=\"hide\"><ul>";
			if(isset($layerChildrens[$layer->id])) {
				foreach($layerChildrens[$layer->id] as $placemark) {
					$layer_class = " class=\"report-listing-category-child\"";
					echo "<li".$layer_class.">"
					. "<a href=\"#\" class=\"lyr_selected\" id=\"filter_link_lyr_".$layer->id."_".str_replace('#', '', $placemark->styleUrl)."\" title=\"{$placemark->description}\">"
					. "<span>".strip_tags($placemark->name)."</span>"
					. "</a></li>";
				}
			}
		echo "</ul></div>";
	echo "</li>";
}
?>
<!-- / layer filters -->