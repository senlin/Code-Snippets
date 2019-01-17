/**
 * Direct MySQL database query to remove all instances of old content
 * This is particularly useful when removing a language and being unable to track down
 * all instances of content of that language.
 *
 * Keep in mind to use the correct table-prefix and replace the xx for the language CODE that you want to remove
 *
 */

DELETE FROM `table-prefix_icl_translations` WHERE language_code = 'xx';