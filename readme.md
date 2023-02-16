# Клиент для рассылки почтовых уведомлений об истекающих подписках пользователей

Для тестирования модульности библиотеки "azasystems/email_sender_service_library"

## Установка и запуск

Выполните:

$ ./install.sh

Скрипт сделает установку зависимых библиотек в папку /vendor и создание composer.lock через composer install:

1. $ composer i

2. $ composer update

Далее произойдет основная установка компонентов библиотеки путем запуска скрипта инсталляции:

4. $ cd vendor/azasystems/email_sender_service_library

5. $ ./install.sh

6. Открываем в браузере единую точку входа:

http://localhost:85/script.php?help

http://localhost:85/script.php?help&service=tester

http://localhost:85/script.php?help&service=validator

http://localhost:85/script.php?help&service=sender

http://localhost:85/script.php?help&service=deadletter

5. Аналогичный запуск производим через командную строку:

6. php ./script.php
-   2023-02-16T07:54:41+00:00 [INFO] : Успешный запуск.
-   2023-02-16T07:54:41+00:00 [INFO] : Сервис для рассылки почтовых уведомлений об истекающих подписках пользователей!
-   2023-02-16T07:54:41+00:00 [INFO] : Вызов на сайте: script.php [parameters1]
-   2023-02-16T07:54:41+00:00 [INFO] : Вызов шелл-команды: script.php?parameters2
-   2023-02-16T07:54:41+00:00 [INFO] : Где возможные значения [parameters1]: --help --service=tester --service=validator --service=sender --service=deadletter
-   2023-02-16T07:54:41+00:00 [INFO] : Где возможные значения [parameters2]: ?help&service=tester&service=validator&service=sender&service=deadletter
-   и так далее идет работа скрипта...

### Февраль 2023 (С) Разработчик проекта:

[Наумов Дмитрий Витальевич](https://hh.ru/applicant/resumes/view?resume=fd547e4aff02ccc8390039ed1f484d38417a72)

[Мой Telegram](https://t.me/Dmitry_Vitalievich_Naumov)
