<?php


//    function getLog() : array{
//        $str = file_get_contents("logs-visits/logs-visits.txt");
//    }
//
//    function getId(){
//        $id = (int)($_GET['id'] ?? '');
//        $link = $_GET[''] ?? '';
//        echo $id, $link;
//    }

    function checkVisitName(string $name) : bool{
        return !!preg_match('/^\d{4}\-\d{2}\-\d{2}\.txt$/', $name);
    }

    function hasVisitsDay(string $dt) : bool{
        return checkVisitName($dt) && file_exists("log-visits/$dt");
    }

    function getVisitsDay() : array{
        $files = scandir("logs-visits/");
        return array_filter($files, function ($file){
            return is_file("logs-visits/$file") && checkVisitName($file);
        });
    }

    function isValidUrl(string $url) : bool{
        return !!preg_match('/^[aA-zZ0-9-_\/\?\.=&]*$/', $url);
    }

    function getVisits(string $dt) : array {
        $lines = file("logs-visits/$dt");
        return array_map(function ($line) {
            $log = json_decode(rtrim($line), true);
            $log['isDanger'] = !isValidUrl($log['uri']);
            return $log;
        }, $lines);
    }

    function addVisitLog() : bool{
        $logName = date("Y-m-d" );
        $info = [
            'dt' => date('H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'uri' => $_SERVER['REQUEST_URI'],
            'referer' => $_SERVER['HTTP_REFERER'] ?? ''
        ];
        $log = json_encode($info) . "\n";
        file_put_contents("logs-visits/$logName.txt", $log, FILE_APPEND);
        return true;
    }
