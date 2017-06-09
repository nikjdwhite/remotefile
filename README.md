# remotefile
Small Omeka plugin that allows user to add a media file from a server via url.

This plugin adds a field to the item uploading form that allows you to add files that are too large to upload, such as audio recordings.  The files must already be on a server for this plugin to work.

Designed to work with Omeka 2.0, not tested with earlier versions.

##How to use:



1. Install and enable RemoteFile.
2. Add and save your item without a file.
3. Go back to the editing form after saving.  Under the Files tab there will be a field for RemoteFile.
4. Put the full address of your file in the form and save.  EG:  http://someservername.org/media/file.mp3   Files on the local hard drive won't work.


