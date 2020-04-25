<?php
/**
 * Author  : Italia Cyber Army 
 * Name    : Facebook Hacking Toolkit
 * Version : 2.0
 * Update  : 15 June 2020
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */
error_reporting(0);

/** Library */
require_once('vendor/autoload.php');
require_once('modules/color.php');
require_once('modules/random.php');

$climate = new League\CLImate\CLImate;

require_once('modules/progress.php');
require_once('modules/menu.php');
require_once('modules/config.php');
/** End Library */
sleep(2);

/** Check token */
$climate->br()->info('Wait a Minute, Checking and Validating Access to Facebook Tokens..');
$climate->br();
sleep(5);
progress($progress);

    if($token === ""){
        $climate->br()->backgroundRed()->out('Oops, Facebook Access Token is NOT Detected');
        $type = "tools/getAccessToken/getAccessToken";
        require_once($type.".php");
        exit;
    }else{
        $climate->br()->backgroundBlue()->out('Well, Access to Facebook Tokens Was Succesfully Detected');
        sleep(3);
    }

/** Token validation and story */
tokenvalidation($url_based, $token);
/** End Token validation and story */

/** Arguments Usage */
echo "\n";
$climate->usage();
/** End Arguments Usage */

/** Select */
$input_pilih = $climate->br()->shout()->input('-->>> Enter Your Choice (1-29) : ');

$pilih = $input_pilih->prompt();
/** End Select */

if($pilih>29 OR $pilih<1){
    $climate->br()->error('Options NOT Available, Please Choose Existing Ones!');

    /** Enter Select return */
    $input_pilih = $climate->br()->shout()->input('-->>> Enter Your Choice (1-29) : ');

    $pilih = $input_pilih->prompt();
    /** End Select return */

    if($pilih>29 OR $pilih<1) $type = "wahyuarifpurnomo";
}
if($pilih==1){
    $type = "tools/getAccessToken/getAccessToken";
    $namatools = "\e[1;32mGet Token\e[0m";
}elseif($pilih==2){
    $type = "tools/getInformation/getInformation";
    $namatools = "\e[1;32mAccount Information\e[0m";
}elseif($pilih==3){
    $type = "tools/getID/getID";
    $namatools = "\e[1;32mDump ID Your Friends\e[0m";
}elseif($pilih==4){
    $type = "tools/getEmail/getEmail";
    $namatools = "\e[1;32mDump E-mail Your Friends\e[0m";
}elseif($pilih==5){
    $type = "tools/getName/getName";
    $namatools = "\e[1;32mDump name Your friends\e[0m";
}elseif($pilih==6){
    $type = "tools/getBirthday/getBirthday";
    $namatools = "\e[1;32mDump Birthday Your Friends\e[0m";
}elseif($pilih==7){
    $type = "tools/getGender/getGender";
    $namatools = "\e[1;32mDump Gender Your Friends\e[0m";
}elseif($pilih==8){
    $type = "tools/getLocation/getLocation";
    $namatools = "\e[1;32mDump Location Your friends\e[0m";
}elseif($pilih==9){
    $type = "tools/getLink/getLink";
    $namatools = "\e[1;32mDump URL Profile Your Friends\e[0m";
}elseif($pilih==10){
    $type = "tools/getPhone/getPhone";
    $namatools = "\e[1;32mDump Mobile Number Your Friends\e[0m";
}elseif($pilih==11){
    $type = "tools/getReligion/getReligion";
    $namatools = "\e[1;32mDump Religion Your Friends\e[0m";
}elseif($pilih==12){
    $type = "tools/getRelationship/getRelationship";
    $namatools = "\e[1;32mDump Relationship Your Friends\e[0m";
}elseif($pilih==13){
    $type = "tools/getUsername/getUsername";
    $namatools = "\e[1;32mDump Username Your Friends\e[0m";
}elseif($pilih==14){
    $type = "tools/getBio/getBio";
    $namatools = "\e[1;32mDump BIO Your Friends\e[0m";
}elseif($pilih==15){
    $type = "tools/getAbout/getAbout";
    $namatools = "\e[1;32mDump About Your Friends\e[0m";
}elseif($pilih==16){
    $type = "tools/getYahooFilter/getYahooFilter";
    $namatools = "\e[1;32mFilter E-mail Your Friends\e[0m";
}elseif($pilih==17){
    $type = "tools/getYahooMailValidation/getYahooMailValidation";
    $namatools = "\e[1;32mValidation E-mail Your Friends\e[0m";
}elseif($pilih==18){
    $type = "tools/clean/clean";
    $namatools = "\e[1;32mClean Folder Result\e[0m";
}elseif($pilih==19){
    $type = "tools/getDeletePost/getDeletePost";
    $namatools = "\e[1;32mDelete Your All Post\e[0m";
}elseif($pilih==20){
    $type = "tools/getUnfriend/getUnfriend";
    $namatools = "\e[1;32mUnfriend All\e[0m";
}elseif($pilih==21){
    $type = "tools/getConfirmationFriends/getConfirmationFriends";
    $namatools = "\e[1;32mConfirmation All Friends\e[0m";
}elseif($pilih==22){
    $type = "tools/getConfirmationFriendsMale/getConfirmationFriendsMale";
    $namatools = "\e[1;32mConfirmation Your All Male Friends\e[0m";
}elseif($pilih==23){
    $type = "tools/getConfirmationFriendsFemale/getConfirmationFriendsFemale";
    $namatools = "\e[1;32mConfirmation Your All Male Friends\e[0m";
}elseif($pilih==24){
    $type = "tools/getDataFriends/getDataFriends";
    $namatools = "\e[1;32mView All Data Your Friends\e[0m";
}elseif($pilih==25){
    $type = "tools/getIDMemberGroup/getIDMemberGroup";
    $namatools = "\e[1;32mView All Data Member Group\e[0m";
}elseif($pilih==26){
    $type = "tools/getUsernameMemberGroup/getUsernameMemberGroup";
    $namatools = "\e[1;32mView All Data Username Member Group\e[0m";
}elseif($pilih==27){
    $type = "tools/getLinkMemberGroup/getLinkMemberGroup";
    $namatools = "\e[1;32mView All Data Link Member Group\e[0m";
}elseif($pilih==28){
    $type = "tools/getBruteID/getBruteID";
    $namatools = "\e[1;32mBrute Force Your Friends by ID\e[0m";
}elseif($pilih==29){
    $type = "tools/getBruteIDMemberGroup/getBruteIDMemberGroup";
    $namatools = "\e[1;32mBrute Force Member Group by ID\e[0m";
}
if($type=="wahyuarifpurnomo"){
    $climate->br()->error("You Didnn't Choose Anywhere Tools.");
}else{
    $climate->br()->info('You Have Selected Tools ' . $namatools);
    $climate->br()->info('Load The Tool You Requested');
    $climate->br();
    progress($progress);

    require_once($type.".php");
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
?>
