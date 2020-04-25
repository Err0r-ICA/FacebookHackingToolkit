<?php
/**
/**
 * Author  : *ERR0R*
 * Name    : Facebook Hackking Toolkit
 * Version : 2.0
 * Update  : 17 January 2020
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */ 
//The name of the folder.
$folder = 'result';

//Get a list of all of the file names in the folder.
$files = glob($folder . '/*');

//Loop through the file list.
foreach($files as $file){

    if(is_file($file)){
        //Use the unlink function to delete the file.
        unlink($file);
    }
}

echo "\n";
$climate->info('Start Cleaning Folder "' . $folder . '"');
sleep(3);
echo "\n";
$climate->info('Cleaning "' . $folder . '"');
progress($progress);
echo "\n";
$climate->info('Done Cleaning "' . $folder . '"');

/**
 * Author  : *ERR0R*
 * Name    : Facebook Hackking Toolkit
 * Version : 2.0
 * Update  : 17 January 2020
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */
