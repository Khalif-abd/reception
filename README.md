# Для старта:

- Старт на хостинге или локальной машине
- Указать данные для подключение к БД в файле config.php
- Ипортировать таблицу reception.sql в БД

# Логика работы:

# index.php

Обычный view-файл, делает запросы на add.php без перезагрузки.

# add.php

Выполняет основную логику. Не дает сделать больше двух записей на один день.
При попытке записаться в третий раз за день, выдает предупреждение.
