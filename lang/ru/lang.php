<?php

return [
    'plugin' => [
        'name' => 'Меню',
        'description' => 'Плагин для редактирования меню в October CMS.'
    ],
    'menu' => [
        'name' => 'Меню',
        'description' => 'Отображает страницу с меню.',
        'editmenu' => 'Изменить меню',
        'reordermenu' => 'Порядок меню'
    ],
    'misc' => [
        'menu' => 'Меню',
        'newmenu' => 'Создать меню',
        'manageorder' => 'Редактировать порядок меню',
        'returntomenus' => 'Вернуться к меню'
    ],
    'form' => [
        'create' => 'Создать пункт меню',
        'update' => 'Редактировать пункт меню',
        'preview' => 'Предпросмотр меню',
        'flashcreate' => 'Меню успешно создано!',
        'flashupdate' => 'Меню отредактировано',
        'flashdelete' => 'Меню удалено',
        'manage' => 'Управление меню'
    ],
    'create' => [
        'menus' => 'Меню',
        'creating' => 'Создаем меню...',
        'create' => 'Создать',
        'createclose' => 'Создать и закрыть',
        'cancel' => 'Отмена',
        'or' => 'или',
        'return' => 'Вернуться к пунктам меню',
        'nolink' => 'Нет ссылки на страницу'
    ],
    'update' => [
        'saving' => 'Сохраняем меню...',
        'save' => 'Сохранить',
        'saveclose' => 'Сохранить и закрыть',
        'deleting' => 'Удалить меню...',
        'reallydelete' => 'Вы действительно хотите удалить меню?'
    ],
    'modeldata' => [
        'title' => 'Название',
        'enabled' => 'Активно',
        'url' => 'Page linked to',
        'parameters' => 'Параметры',
        'query' => 'Строка запроса',
        'description' => 'Описание'
    ],
    'modeldataform' => [
        'title' => 'Название',
        'description' => 'Описание (необязательно)',
        'enabled' => 'Доступность ссылки',
        'optdisabled' => 'Выключена',
        'optenabled' => 'Включена',
        'external' => 'Тип ссылки',
        'selectmenutype' => '-- Выберите тип ссылки --',
        'optinternal' => 'Внутренняя',
        'optexternal' => 'Внешняя',
        'internalurl' => 'Привязать страницу к пункту меню',
        'internalurlplaceholder' => '-- Выберите страницу --',
        'externalurl' => 'Введите внешний URL',
        'externalurlcomment' => 'Например http://example.com',
        'linktarget' => 'Открыть ссылку',
        'self' => 'В текущем окне',
        'blank' => 'В новой вкладке',
        'parameters' => 'URL параметр пунтка в формате JSON, например если вы хотите использовать URL "/:slug"',
        'parameterscomment' => '{ "slug" : "название-пункта-меню" }',
        'querystr' => 'Строка запроса параматра, если Вы хотите использовать НЕ OctoberCMS (they will be automatically escaped)',
        'querystrcomment' => 'Например: "param1=foo&amp;param2=http://www.google.com"',
        'url' => 'URL'
    ],
    'component' => [
        'start' => [
            'title' => 'Родительский узел',
            'description' => 'Родительский узел для отображения дочерних'
        ],
        'activenode' => [
            'description' => 'Активная страница. Установите "по умолчанию" для текущей страницы, чтобы сделать пункт меню активным',
            'title' => 'Активный пункт',
        ],
        'listitemclasses' => [
            'description' => 'Класс для добавление в li"',
            'title' => 'Класс <li>',
        ],
        'primaryclasses' => [
            'description' => 'Класс для добавление в ul',
            'title' => 'Главный класс меню',
        ],
        'secondaryclasses' => [
            'description' => 'Дополнительный класс для отображения дочерних элементов',
            'title' => 'Дочерний класс',
        ],
        'tertiaryclasses' => [
            'description' => 'Добавить класс к вторичному ul тэгу',
            'title' => 'Класс для дочерних элементов 3-го уровня',
        ],
        'numberoflevels' => [
            'description' => 'Количество уровней выводимых в меню',
            'title' => 'Глубина меню',
        ]
    ]
];
