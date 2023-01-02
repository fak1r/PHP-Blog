<?php


        $showDay = URL_PARAMS['dt'] ?? 0;
        if ($showDay){
            $name = URL_PARAMS['dt'] ?? '';
            $e404 = hasVisitsDay($name); // существует ли файл и соответствует ли файл формату?
            $visits = getVisits($name); // получает логи из файла
        }
        else {
            $visitsDays = getVisitsDay(); // получает все файлы логов в папке logs-visits
        }

$pageTitle = 'Логи';

$pageContent = template('logs/v_logs', [
    'visits' => $visits ?? 0,
    'visitsDays' => $visitsDays ?? 0,
    'name' => $name ?? 0,
    'showDay' => $showDay ?? 0,
    'e404' => $e404 ?? 0
]);


