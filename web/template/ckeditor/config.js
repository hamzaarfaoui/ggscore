/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';


    config.filebrowserBrowseUrl = '/uploads/template/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/uploads/template/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/uploads/template/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/uploads/template/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/uploads/template/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/uploads/template/kcfinder/upload.php?opener=ckeditor&type=flash';
    config.filebrowserUploadMethod = 'form';

    config.extraPlugins='html5video';

    config.extraPlugins = 'html5video,widget,widgetselection,clipboard,lineutils, embed,embedbase';


};
