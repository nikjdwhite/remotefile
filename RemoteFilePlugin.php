<?php

/**
*	Remote File
*	@copyright The University of Iowa
*	@author Nikki JD White
**/

/** 
*	Remote File plugin
*/

define('REMOTE_FILE_PLUGIN_DIR', PLUGIN_DIR . '/RemoteFile');


class RemoteFilePlugin extends Omeka_Plugin_AbstractPlugin {

	protected $_hooks = array('admin_items_form_files', 'before_save_record');
	
	public function hookAdminItemsFormFiles($args){
	
		include REMOTE_FILE_PLUGIN_DIR . '/views/admin/remote-file-url-form.php';
	
	}
	
	public function hookBeforeSaveRecord($args) {
		if ($args['insert']!==1){ //if this is not a new file
			$record = $args['record'];
			$itemId = $record->getProperty('id');
			$remoteFileUrl = $args['post']['remote-file-url'];
			if (!empty($remoteFileUrl)) insert_files_for_item($itemId, 'Url', $remoteFileUrl);
		}
	}
	
}

/*
To-do list for 1.1: 
validation for files 
*/
