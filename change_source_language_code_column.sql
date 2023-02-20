/**
 * Direct MySQL database query to change source_language_code of xx_icl_translations table
 * This is particularly useful when changing default language and the secondary languages are still pointing to
 * the previous default language.
 */

UPDATE wp_icl_translations 
SET source_language_code = 'en-au' //new source_language_code
WHERE source_language_code = 'en' //old source_language_code
