<?php
    /*
     * $target - одномерный, ассоциативный массив [a => 1, b =>2, ....]
     * $fields - обычный массив со списком строк [a, b, ....]
     * Берёт $target и извлекает из него все данные по ключам, записанным в $fields (должны совпадать ключи)
     */
    function extractFields(array $target, array $fields) : array {
        $res = [];
        foreach ($fields as $field){            // для примера перебираем ключи массива $_POST по каждому ключу
            $res[$field] = $target[$field];     // записываем в $res[ключ]=$_POST[ключ] из тех что были изначально в нём
        }                                       // перезаписываем $_POST с нужными ключами в $res
        return $res;                            // аналогичное действие вручную $res['title'] = $_POST['title'];
    }