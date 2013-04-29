KML Filter
=================
About
-----
* website: https://github.com/HTSolution/Ushahidi-plugin-kmlfilter
* description: Adds filter for the report by KML layers
* author: HTSolution Pvt. Ltd.
* author website: http://himalayantechies.com

Description
-----------------
*Adds layer filter to reports index filter page 


Installation
----------------
*Copy the entire /kmlfilter/ directory into your /plugins/ directory.
*Activate the plugin.


__NOTE: If activating plugin does not show location filter on main page then search for__

	`if (layerType !== Ushahidi.KML) {`
	
	code in media/js/ushahidi.js and comment it and its closing braces