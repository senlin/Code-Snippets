/**
 * Direct MySQL database query to delete duplicate content
 *
 * ONLY USE THIS AFTER CHANGING HOW CONTENT IS TRANSLATED
 *
 * PLEASE ALWAYS DO A BACKUP BEFORE RUNNING THIS QUERY
 * PLEASE MAKE SURE THAT YOU CHANGE THE "TABLEPREFIX_" PART TO MATCH YOUR OWN DATABASE TABLE PREFIX
 * PLEASE USE THIS AT YOUR OWN RISK
 *
 * source: //wpml.org/documentation/translating-your-contents/displaying-untranslated-content-on-pages-in-secondary-languages/deleting-duplicate-content-after-changing-how-content-is-translated/
 */

/**
 * Delete duplicated content from wp_posts
 */
DELETE FROM tableprefix_posts
WHERE post_type = 'XXXX' AND ID IN (
  SELECT pm.post_id
  FROM tableprefix_postmeta pm
    JOIN tableprefix_icl_translations t ON t.element_id = pm.meta_value
  WHERE pm.meta_key = '_icl_lang_duplicate_of' AND pm.meta_value > 0 AND
    t.element_type LIKE 'post_%' AND t.language_code = 'YYYY'
)

/**
 * Delete translation settings from wp_icl_translations
 */
DELETE FROM tableprefix_icl_translations
WHERE element_type = 'post_XXXX' AND element_id IN (
  SELECT pm.post_id
  FROM tableprefix_postmeta pm
    JOIN tableprefix_icl_translations t ON t.element_id = pm.meta_value
  WHERE meta_key = '_icl_lang_duplicate_of' AND meta_value > 0 AND t.language_code = 'YYYY'
)

/**
 * Deleting orphans from wp_postmeta
 *
 * Please note that the execution of this query is slow and may time out, depending on your server’s settings.
 * Additionally, it is not mandatory to run this query as it is only used to clear your database of any orphaned post meta.
 */
DELETE pm
FROM tableprefix_postmeta pm
  LEFT JOIN tableprefix_posts wp ON wp.ID = pm.post_id
WHERE wp.ID IS NULL
