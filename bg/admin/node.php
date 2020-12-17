<?php
/*
 * Pterodactyl Panel 0.7.19  Bulgarian translation
 * Author: Kaloian Penchev (admin@kaloianpenchev.eu)
 * License: Free to use
 * Donate:
 *      PayPal: https://paypal.me/kalchobratme
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'FQDN или IP адрес-а, който е предоставен не води до валиден IP адрес.',
        'fqdn_required_for_ssl' => 'Нужно е използването на FQDN (домейн), за да използвате SSL връзка с този Node.',
    ],
    'notices' => [
        'allocations_added' => 'Успешно бяха добавен разпределения към този Node.',
        'node_deleted' => 'Успешно премахнахте този Node от системата.',
        'location_required' => 'Трябва да имате поне една зададена локация, преди да създадете нов Node.',
        'node_created' => 'Успешно създадохте нов Node. Можете автоматично да настроите даемона, като отидете на раздела \'Конфигурация\'. <strong>Преди да добавите първият сървър към този Node, трябва да имате разпределение от поне един IP адрес и един порт.</strong>',
        'node_updated' => 'Информацията за Node-а беше обновена. Ако са променяни настройки по даемона, ще се наложи го рестартирате, за да могат промените да влязат в сила.',
        'unallocated_deleted' => 'Изтрити са всички неразпределени портове за <code>:ip</code>.',
    ],
];
