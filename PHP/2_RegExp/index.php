<?php
// https://regex101.com/r/cO8lqs/12
// https://medium.com/nuances-of-programming/%D1%88%D0%BF%D0%B0%D1%80%D0%B3%D0%B0%D0%BB%D0%BA%D0%B0-%D0%BF%D0%BE-%D1%80%D0%B5%D0%B3%D1%83%D0%BB%D1%8F%D1%80%D0%BD%D1%8B%D0%BC-%D0%B2%D1%8B%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F%D0%BC-%D0%B2-%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D1%85-53820a5f3435

// Возвращает все элементы массива,
// содержащие числа с плавающей точкой
$array = [ 'foo', '2.15', '4', 22.16, 4, '4,7', '.78' ];
$fl_array = preg_grep("/^(\d+)?\.\d+$/", $array);
echo('<pre>');
var_dump($fl_array);

/*

Simple regex

Regex quick reference
[abc]     A single character: a, b or c (одиночный символ)
[^abc]     Any single character but a, b, or c (^ внутри [] означает исключение)
[a-z]     Any single character in the range a-z
[a-zA-Z]     Any single character in the range a-z or A-Z
^     Start of line
$     End of line
\A     Start of string
\z     End of string
.     Any single character
\s     Any whitespace character
\S     Any non-whitespace character
\d     Any digit
\D     Any non-digit
\w     Any word character (letter, number, underscore)
\W     Any non-word character
\b     Any word boundary character
(...)     Capture everything enclosed
(a|b)     a or b
a?     Zero or one of a
a*     Zero or more of a
a+     One or more of a
a{3}     Exactly 3 of a
a{3,}     3 or more of a
a{3,6}     Between 3 and 6 of a

options: i case insensitive m make dot match newlines x ignore whitespace in regex o perform #{...} substitutions only once


*/


/*

preg_quote() - Экранирует символы в регулярных выражениях
preg_match_all() - Выполняет глобальный поиск шаблона в строке
preg_replace() - Выполняет поиск и замену по регулярному выражению
preg_split() - Разбивает строку по регулярному выражению
preg_last_error() - Возвращает код ошибки выполнения последнего регулярного выражения PCRE
preg_last_error_msg() - Возвращает сообщение об ошибке последней запущенной функции PCRE

mb_ereg_match — Совпадение с регулярным выражением для многобайтовой строки
mb_ereg_replace_callback — Выполняет поиск и замену по регулярному выражению с поддержкой многобайтовых кодировок используя callback-функцию
mb_ereg_replace — Осуществляет замену по регулярному выражению с поддержкой многобайтовых кодировок
mb_ereg_search_getpos — Возвращает начальную позицию следующего совпадения с регулярным выражением
mb_ereg_search_getregs — Выводит результат последнего сравнения с регулярным выражением
mb_ereg_search_init — Инициализация поиска соответствий регулярному выражению многобайтовой строкой и текстом регулярного выражения
mb_ereg_search_pos — Возвращает позицию и длину совпавшего с регулярным выражением участка многобайтовой строки
mb_ereg_search_regs — Возвращает совпавшую с регулярным выражением часть строки
mb_ereg_search_setpos — Задаёт начальную позицию в строке, с которой начнётся поиск соответствий регулярному выражению
mb_ereg_search — Поиск соответствий регулярному выражению для строк в многобайтовых кодировках
mb_ereg — Совпадение с регулярным выражением с поддержкой многобайтовых кодировок
mb_eregi_replace — Осуществляет замену по регулярному выражению с поддержкой многобайтовых символов без учёта регистра
mb_eregi — Поиск соответствий регулярному выражению с поддержкой многобайтовых символов без учёта регистра

*/
