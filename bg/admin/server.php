<?php
/*
 * Pterodactyl Panel 0.7.19  Bulgarian translation
 * Author: Kaloian Penchev (admin@kaloianpenchev.eu)
 * License: Free to use
 * Donate:
 *      PayPal: https://paypal.me/kalchobratme
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Опитвате се да изтриете разпределението по подразбиране за този сървър, но няма резервно разпределение, което да бъде използвано.',
        'marked_as_failed' => 'Този сървър бе маркиран като неуспешен при предишна инсталация. Текущото състояние не може да се превключва в това състояние.',
        'bad_variable' => 'Имаше грешка с валидацията на променливата :name .',
        'daemon_exception' => 'Имаше проблем при опит за комуникация с даемона, водещ до HTTP/:code код на грешка. Тази грешка беше записана.',
        'default_allocation_not_found' => 'Исканото разпределение по подразбиране не е намерено в разпределенията на този сървър.',
    ],
    'alerts' => [
        'startup_changed' => 'Конфигурацията за стартиране на този сървър е актуализирана. Ако гиг-а на този сървър е бил променен, сега ще се извърши преинсталиране.',
        'server_deleted' => 'Сървърът беше успешно изтрит от системата.',
        'server_created' => 'Сървърът бе създаден успешно на панела. Моля, оставете даемона няколко минути, за да инсталира напълно този сървър.',
        'build_updated' => 'Подробностите за компилация за този сървър са актуализирани. Някои промени може да изискват рестартиране, за да влязат в сила.',
        'suspension_toggled' => 'Състоянието на спиране на сървъра е променено на :status.',
        'rebuild_on_boot' => 'Този сървър е маркиран като изискващ възстановяване на Docker контейнера. Това ще стане при следващото пускане на сървъра.',
        'install_toggled' => 'Състоянието на инсталация за този сървър е променено.',
        'server_reinstalled' => 'Този сървър е на опашка за преинсталиране, започващо сега.',
        'details_updated' => 'Подробностите за сървъра са актуализирани успешно.',
        'docker_image_updated' => 'Успешно е променен Docker по подразбиране, който да се използва за този сървър. За прилагане на тази промяна е необходимо рестартиране.',
        'node_required' => 'Трябва да имате конфигуриран поне един възел, преди да можете да добавите сървър към този панел.',
    ],
];
