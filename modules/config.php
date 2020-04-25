<?php
/**
 * Author  : Wahyu Arif Purnomo
 * Name    : Facebook Toolkit++
 * Update  : 02 November 2019
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */

$version        = "3.0";
$build          = "13 January 2020";
$name           = "Facebook Hacking Toolkit";
$author         = "ITALIA CYBER ARMY";
$update         = "12 April 2020 12:47";
$url_based      = "https://graph.facebook.com";
$url_token      = "config/token.txt";
$cek_connection = "graph.facebook.com";
$progress;
$url_valid = "http://widhitools.000webhostapp.com/api/yahoo.php";
$url_brute = "https://m.facebook.com";
$token = file_get_contents($url_token);
$banner    = "

┏━━━┓╋╋╋╋╋╋╋╋┏┓╋╋╋╋╋╋╋┏┓ $name
┃┏━━┛╋╋╋╋╋╋╋╋┃┃╋╋╋╋╋╋╋┃┃
┃┗━━┳━━┳━━┳━━┫┗━┳━━┳━━┫┃┏┓
┃┏━━┫┏┓┃┏━┫┃━┫┏┓┃┏┓┃┏┓┃┗┛┛
┃┃╋╋┃┏┓┃┗━┫┃━┫┗┛┃┗┛┃┗┛┃┏┓┓
┗┛╋╋┗┛┗┻━━┻━━┻━━┻━━┻━━┻┛┗┛
┏┓╋┏┓╋╋╋╋╋┏┓ $author
┃┃╋┃┃╋╋╋╋╋┃┃
┃┗━┛┣━━┳━━┫┃┏┳┳━┓┏━━┓
┃┏━┓┃┏┓┃┏━┫┗┛╋┫┏┓┫┏┓┃ $build
┃┃╋┃┃┏┓┃┗━┫┏┓┫┃┃┃┃┗┛┃
┗┛╋┗┻┛┗┻━━┻┛┗┻┻┛┗┻━┓┃
╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋┏━┛┃
╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋┗━━┛ $update
┏━━━━┓╋╋╋╋┏┓┏┓╋╋┏┓
┃┏┓┏┓┃╋╋╋╋┃┃┃┃╋┏┛┗┓
┗┛┃┃┣┻━┳━━┫┃┃┃┏╋┓┏┛
╋╋┃┃┃┏┓┃┏┓┃┃┃┗┛╋┫┃ $version
╋╋┃┃┃┗┛┃┗┛┃┗┫┏┓┫┃┗┓
╋╋┗┛┗━━┻━━┻━┻┛┗┻┻━┛

[!] A Tool to Get Facebook Data, Some Facebook Bots, And Extra Tools Found on Facebook Hacking Toolkit

";

$data_socialmedia = [
    [
        "Facebook", "https://www.facebook.com/termuxxhacking", 
    ], 
    [
        "Instagram", "https://www.instagram.com/termux_hacking/?hl=it", 
    ], 
    [
        "Team",           "ITALIA CYBER ARMY", 
    ], 
    [
        "Telegram", "https://t.me/termuxxhacking", 
    ], 
    [
        "Github", "https://www.github.com/Err0r-ICA", 
    ], 
];

$climate->arguments->add([
    "menu" => [
        "prefix" => "m", 
        "longPrefix" => "menu", 
        "description" => "tool menu", 
        "noValue" => true, 
    ], 
    "version" => [
        "prefix" => "v", 
        "longPrefix" => "version", 
        "description" => "version", 
        "noValue" => true, 
    ], 
    "author" => [
        "prefix" => "a", 
        "longPrefix" => "author", 
        "description" => "owner", 
        "noValue" => true, 
    ], 
    "update" => [
        "prefix" => "u", 
        "longPrefix" => "update", 
        "description" => "update version", 
        "noValue" => true, 
    ], "help" => [
        "prefix" => "h", 
        "longPrefix" => "help", 
        "description" => "help", 
        "noValue" => true, 
    ], 
]);
$climate->arguments->parse();

if ($climate->arguments->defined("menu")) {
    $climate->br()->info("please wait, load the list menu");
    sleep(7);
    progress($progress);
    $climate->bold()->backgroundRed()->Table($data_menu);
    exit;
} else if ($climate->arguments->defined("version")) {
    echo $version;
    exit;
} else if ($climate->arguments->defined("author")) {
    echo $author;
    exit;
} else if ($climate->arguments->defined("update")) {
    system("git fetch --all");
    system("git reset --hard origin/master");
    system("git pull origin master");
    exit;
} else if ($climate->arguments->defined("help")) {
    $climate->usage();
    exit;
} else {
}

$climate->br()->info("Oops, Additional Programs Are Needed to Run This Tool.");
sleep(5);
$climate->br()->info("Start a Check For Needs..");
progress($progress);
if (!fsockopen("$cek_connection", 80)) {
    die("" . $climate->br()->backgroundRed()->out("Could NOT Open The Server, Connection Issues?"));
}
if (phpversion() < "7.0.0") {
    die("" . $climate->br()->backgroundRed()->out("Your PHP Version is " . phpversion() . ", this PHP Version no support, please update to PHP Version 7."));
}
if (!function_exists("curl_init")) {
    die("" . $climate->br()->backgroundRed()->out("cURL NOT Found! Please Install cURL"));
}

$climate->br()->backgroundGreen()->out("Congratulations, The Requirements For The Program Have Been Fulfilled.");

sleep(3);
print $banner;
sleep(2);
$climate->table($data_socialmedia);
sleep(2);

/** Token Validation Function */

function tokenvalidation($url_based, $token){
    require_once('vendor/autoload.php');
    $climate = new League\CLImate\CLImate;

    $curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_based . "/me/?access_token=" . $token);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$wahyuarifpurnomo = curl_exec($curl);
    curl_close($curl);
    
    $decode = json_decode($wahyuarifpurnomo);

    if($decode->error->message === "Malformed Access Token"){
        $climate->br()->backgroundRed()->out('Sorry, ' .$decode->error->message. ', Please Correct it!');
        $type = "tools/getAccessToken/getAccessToken";
        require_once($type.".php");
        exit;
    }else if($decode->error->message == 'The Access Token Could NOT be Decrypted') {
        $climate->br()->backgroundRed()->out('Sorry, ' .$decode->error->message. ', Please Correct it!');
        $type = "tools/getAccessToken/getAccessToken";
        require_once($type.".php");
        exit;
    }else if($decode->error->message == 'Error Validating Access Token: The session has been invalidated because the user changed their password or Facebook has changed the session for security reasons.') {
        $climate->br()->backgroundRed()->out('Sorry, ' .$decode->error->message. ', Please Correct it!');
        $type = "tools/getAccessToken/getAccessToken";
        require_once($type.".php");
        exit;
    }else if($decode->error->message == 'An Active Access Token Must be Used to Query Information About The Current User') {
        $climate->br()->backgroundRed()->out('Sorry, ' .$decode->error->message. ', please correct it!');
        $type = "tools/getAccessToken/getAccessToken";
        require_once($type.".php");
        exit;
    }else{
        $climate->br()->backgroundGreen()->out('Oooh Yeah, The Token Was Successfully Verified!');
        sleep(3);
        $climate->br()->info('Hello, Welcome ' .$decode->name);
        sleep(7);
    }
/** End check token */

/** Story */
$input = $climate->shout()->confirm('I Have a Story For You, do You Want to Hear it??');
$location = $decode->location->name;
$education = $decode->education[0]->school->name;
if ($input->confirmed()) {
    $climate->br()->info('Based on The Data I Have About You, Your Name Must be ' . $decode->name .', You Were Born on ' . $decode->birthday . ', your sex is ' . $decode->gender .', I Know, You Must Live in ' . $location . ', Hmmm.. I Know, You`re ' . $decode->relationship_status . ', And You Are Still in School at ' . $education);
    sleep(3);
    $warifp = $climate->br()->shout()->input('Yes? [Press Enter to Continue]');
    $response = $warifp->prompt();
} else {

}}
/** End Token Validation Function */
/**
 * Author  : ERR0R
 * Name    : Facebook Hacking Toolkit
 * Version : 2.0
 * Update  : 13 November 2020
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */
