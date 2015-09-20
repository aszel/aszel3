---
layout: post
title:  "PHP basic authentication"
date:   2015-07-08 15:00:00
categories: martin
tags: [php, basicauth, nerdstuff]
permalink: blog/:title
---
Sometimes I just want to find things easy. And sometimes the internet drives me nuts. That's what happened this time again. Here is a little example for a script which sends data via POST to another script using basic auth. If there is only one person out there which it helps it's all good.

## Client

    <?php
    require "../config/preferences.php";
    
    // http basic auth credentials
    $user = $PREFS['HTTPUser'];
    $password = $PREFS['HTTPPassword'];
    $ip = $PREFS['IpInternalMachine'];
    $encAuthCredentials = base64_encode($user.":".$password);
    $url = 'https://'.$ip.'/write_to_mongo.php';
    
    // data which will be transfered
    $data = array('key1' => 'value1', 'key2' => 'value2');
    
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\nAuthorization: Basic $encAuthCredentials\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context  = stream_context_create($options);
    
    // send data to reciever
    $result = file_get_contents($url, false, $context);
    
    // print for info
    var_dump($result)


## Server

    <?PHP
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'The authentication failed because of missing PHP_AUTH_USER variable.';
        exit;
    } else {
        echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}</p>";
        echo "<p>Your password is {$_SERVER['PHP_AUTH_PW']}</p>";
    }