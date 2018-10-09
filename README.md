# AJAXSiteEngie

## Targets:
+ Switch site pages with ajax
+ Optimization for indexing by search robots ([Yandex] (https://yandex.com), [Google] (https://google.com))
+ Prioritization of loading resources
+ Caching pages


## Цели:

+ Переход между страницами сайта при помощи ajax
+ Оптимизация для индексирования поисковыми ботами([Yandex](https://yandex.com), [Google](https://google.com))
+ Расстановка приоритетов загрузки ресурсов
+ Кэширование результата

## Описание папок и фалов
+ #### Files
  + #### Docs
    * *Папка с доскументами(.txt, .docx итд)*
  + #### Images
    * *Папка с изображениями(favicon.ico, logo.svg)*
+ #### Pages
  * *Папка со страницами сайта*
  + #### Main
    * *Основные страницы сайта(Главная, контакты, FAQ)*
    
    * contacts.php
    * faq.php
    * main.php
+ #### Scripts
  + #### JS
    * *JavaScript Скрипты*
    
    * switch_page.js (Переключение стрниц на стороне клиента)
  + #### PHP
    * *PHP скрипты*
    
    * load_page.php (Выдача стрниц сайта по ajax-запросу)
+ #### Style
  * *Стили сайта*
  
  * main.css (Базовые стили)

* .htaccess (Установка основной кодировки, заголовки кэширования)
* index.php 
* robots.txt (Указания поисковым ботам)

  
## Обязательные действия для полноценной работы движка
1. В файле index.php Подключить последнюю версию JQuery(min)
  * Пример:
  ```html
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  ```
  [Актуальная версия на сайте Jquery](https://jquery.com/)


### Дополнтельные действия:
* В файле index.php Установить свой заголовок, ключевые слова, описание сайта
* Изменить или добавить файлы в папке /Pages/Main
  * **Маршруты к файлам прописываются в фале _/Scripts/PHP/loadpage.php_**
* Загрузить свои изображения в папку /Files/Images
* Добавить свои стили

### Версии:
* #### 0.0.1
  * Базовый функционал
  * Три страницы сайта, навигация между ними
  * Базовые стили для теста системы
  * Возможность индексирования поисковыми ботами Yandex и Google
  
 
### Планы:
* Добавление кэширования результатов
* Реорганизация архитектуры сервера
  
