<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.eurekapi.com/IPGeolocationServiceDemo.do?ipaddress=".$ip."";
    
    $site = @file_get_contents($url);
    
    //Country
    $p1_country = explode('country_name</span><span style="color:#0000ff;font-weight:bold;">&#62;</span><span style="font-weight:bold;">', $site);
    $p2_country = explode('</span>',$p1_country[1]);
    
    $country = $p2_country[0];

    //City
    $p1_city = explode('city</span><span style="color:#0000ff;font-weight:bold;">"</span>&nbsp;:&nbsp;<span style="color:#0000ff;font-weight:bold;">"</span><span style="font-weight:bold;">', $site);
    $p2_city = explode('</span>',$p1_city[1]);

    $city = $p2_city[0];
    
    //Stat
    $p1_stat = explode('region_name</span><span style="color:#0000ff;font-weight:bold;">&#62;</span><span style="font-weight:bold;">', $site);
    $p2_stat = explode('</span>',$p1_stat[1]);

    $stat = $p2_stat[0];
    
    //ISP
    $p1_isp = explode('organization</span><span style="color:#0000ff;font-weight:bold;">"</span>&nbsp;:&nbsp;<span style="color:#0000ff;font-weight:bold;">"</span><span style="font-weight:bold;">', $site);
    $p2_isp = explode('</span>',$p1_isp[1]);

    $isp = $p2_isp[0];