<?php

(!defined('SDG')) ? die ('Triple protection!') : null;

#SYSTEM DICTIONARYS#
$arrSysDict = array('Currency' => array('type' => 'index', 'discription' => 'Валюты', 'values' => array('Неважно', 'UAH', 'USD', 'EUR')), 'Gender' => array('type' => 'assoc', 'discription' => 'Половая принадлежность', 'values' => array('none' => 'Неважно', 'male' => 'Мужской', 'female' => 'Женский')), 'ActPeriod' => array('type' => 'assoc', 'discription' => 'Периоды размещения объявлений', 'values' => array('14' => '14 Дней', '21' => '21 День', '30' => '30 Дней', '45' => '45 Дней', '3660' => 'Бессрочно')), 'SearchPeriod' => array('type' => 'assoc', 'discription' => 'Периоды поиска объявлений', 'values' => array('0' => 'Сегодня', '1' => 'Вчера', '7' => 'За последние 7 дней', '30' => 'За месяц', '45' => 'За все время')), 'FeedbackSubject' => array('type' => 'index', 'discription' => 'Темы сообщений обратной связи', 'values' => array('Вопросы по приобретению скрипта', 'Вопросы по работе скрипта', 'Уведомление об ошибках работы скрипта', 'Общие вопросы к разработчикам')), 'AnnounceRecords' => array('type' => 'index', 'discription' => 'Количество объявлений отображаемых на странице', 'values' => array('5', '10', '20', '30', '40', '50')), 'SubscriptionPeriod' => array('type' => 'assoc', 'discription' => 'Периоды подписки на объявления', 'values' => array('1' => 'Ежедневно', '3' => 'Раз в 3 дня', '7' => 'Раз в неделю', '30' => 'Раз в месяц')));
#END SYSTEM DICTIONARYS#

#ADDITIONAL DICTIONARYS#
$arrAddDict = array('ChartWork' => array('type' => 'index', 'discription' => 'График работы', 'values' => array('Неважно', 'Полный день', 'Посменно', 'Свободный график')), 'Education' => array('type' => 'index', 'discription' => 'Образование', 'values' => array('Неважно', 'Среднее базовое', 'Среднее полное', 'Среднее специальное', 'Высшее незаконченное', 'Высшее образование', 'Высшее базовое [Бакалавр]', 'Высшее специальное [Специалист]', 'Высшее полное [Магистр]')), 'EducationType' => array('type' => 'index', 'discription' => 'Типы образования', 'values' => array('Среднее специальное', 'Второе высшее образование', 'Повышение квалификации/Курсы', 'Тесты/Аттестации', 'Экзамены/Сертификация')), 'Languages' => array('type' => 'index', 'discription' => 'Языки', 'values' => array('Русский', 'Украинский', 'Английский', 'Немецкий', 'Французский', 'Иврит', 'Испанский', 'Итальянский', 'Японский', 'Китайский', 'Санскрит')), 'LangDegree' => array('type' => 'index', 'discription' => 'Степени владения языками', 'values' => array('Нулевой', 'Элементарный', 'Ниже среднего', 'Средний', 'Выше среднего', 'Продвинутый', 'Экспертный')), 'Month' => array('type' => 'assoc', 'discription' => 'Месяцы года', 'values' => array('01' => 'Январь', '02' => 'Февраль', '03' => 'Март', '04' => 'Апрель', '05' => 'Май', '06' => 'Июнь', '07' => 'Июль', '08' => 'Август', '09' => 'Сентябрь', '10' => 'Октябрь', '11' => 'Ноябрь', '12' => 'Декабрь')), 'FeedbackSubject' => array('type' => 'assoc', 'discription' => 'Темы сообщений обратной связи ', 'values' => array('sales@site.org.ua' => 'Вопросы по приобретению скрипта', 'support@site.org.ua' => 'Вопросы по работе скрипта', 'errors@site.org.ua' => 'Уведомление об ошибках работы скрипта', 'developers@site.org.ua' => 'Общие вопросы к разработчикам')), 'ExpireWorkSearch' => array('type' => 'index', 'discription' => 'Опыт работы - Поиск', 'values' => array('Неважно', 'Нет опыта', 'Не требуется', 'Обязателен', 'От года', 'От двух лет', 'Более пяти лет')), 'ExpireWorkResume' => array('type' => 'index', 'discription' => 'Опыт работы - Резюме', 'values' => array('Нет опыта', 'От года', 'От двух лет', 'Более пяти лет')), 'ExpireWorkVacancy' => array('type' => 'index', 'discription' => 'Опыт работы - Вакансии', 'values' => array('Не требуется', 'Обязателен', 'От года', 'От двух лет', 'Более пяти лет')));
#END ADDITIONAL DICTIONARYS#