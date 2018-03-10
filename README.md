Выпускной проект №1 - Бургерная

Верстка для ВП1 -
https://drive.google.com/open?id=0B_uUv96get5NbHU0QWhsMmFwcTA

Ваша задача к данной верстке добавить обработку формы заказа.

Обработка заказа делится на три фазы.

Фаза 1​. Регистрация или “авторизация” пользователя.
Регистрация происходит по полю email, в эту же таблицу записывается имя и
телефон. В случае если пользователь уже заказывал - происходит “авторизация”.
Никаких паролей нет!

Фаза 2​. Оформление заказа.
Записывается в отдельную таблицу с указанием идентификатора
пользователя, адреса и деталей для доставок.

Фаза 3​. Письмо или запись в файл
После записи данных в БД высылается письмо с контактами. Заголовок - заказ
№{id}, где id - это уникальный номер записи заказа. Под заголовком: “Ваш заказ будет
доставлен по адресу”. Адрес содержит данные из БД или формы. Содержимое заказа
всегда одинаковое - DarkBeefBurger за 500 рублей, 1 шт, нигде в базе не хранится,
только высылается в письме. Внизу, под заказом идет дополнительная строка -
“Спасибо - это ваш первый заказ” или “Спасибо! Это уже 555 заказ”, где 555 - это
кол-во разов, сколько пользователь заказал. Письмо высылается функцией mail или
записывается с помощью функции file_put_contents в отдельную папку с временем
отправки. Красивая верстка не требуется, достаточно разделения строк.

Предусмотреть простейшую административную панель.

В админ-панели выводится:

1. список всех зарегистрированных пользователей.
2. список всех заказов.

Авторизации и паролей для доступ в админ панель НЕТУ, доступ только по
URL. Информацию об URL запишите в readme.md в проекте.
Выпускной проект должен быть завершен до старта следующей секции (до
14.03.2018 20:00)




Admin: admin.php