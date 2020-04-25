<?php
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
$n=1; 
function getName($n) { 
    $characters = '123456789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

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
