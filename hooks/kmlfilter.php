<?php defined('SYSPATH') or die('No direct script access.');

class kmlfilter {

	public function __construct()
	{
		// Hook into routing
		Event::add('system.pre_controller', array($this, 'add'));
	}
	
	public function add()
	{
		if (Router::$controller == 'reports' AND Router::$method == 'index') {
			Event::add('ushahidi_action.report_filters_ui', array($this, '_filter_ui'));
			Event::add('ushahidi_action.report_js_filterReportsAction', array($this, '_filter_js'));
			Event::add('ushahidi_filter.fetch_incidents_set_params', array($this,'_add_kml_filter'));
			//plugin::add_stylesheet('downloadreports/views/css/download_reports');
		} else {
			Event::add('ushahidi_action.report_js_filterReportsAction', array($this, '_filter_js'));
			Event::add('ushahidi_filter.fetch_incidents_set_params', array($this,'_add_kml_filter'));
		}
	}

	public function _filter_js() {
		$view = new View('kmlfilter/report_filter_js');
		$view->render(true);
	}
	
	public function _filter_ui() {
		$view = new View('kmlfilter/report_filter_ui');
		$view->render(true);
	}
	
	public function _add_kml_filter() {
		$params = Event::$data;
		Event::$data = kmlfilter_helper::addkmlfilter($params);
	}

}

new kmlfilter();
