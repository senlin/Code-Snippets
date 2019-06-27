/**
 * Direct MySQL database query to batch change Translate Independently
 *
 * For rapid development on multilingual sites it can be handy to duplicate everything into the other language(s)
 * HOWEVER, all content in the other language(s) will then end up being "attached" to the original in such a way
 * that if you make changes to the translation without first clicking the big blue button that says "Translate Independently",
 * none of your edits will actually be safe.
 *
 * The reason for that is that WPML adds a hidden meta field of `_icl_lang_duplicate_of` to each "translation"
 *
 * The following is a direct database query to remove any and all of these hidden meta fields
 *
 * PLEASE ALWAYS DO A BACKUP BEFORE RUNNING THIS QUERY
 * PLEASE MAKE SURE THAT YOU CHANGE THE "TABLE-PREFIX_" PART TO MATCH YOUR OWN DATABASE TABLE PREFIX
 * PLEASE USE THIS AT YOUR OWN RISK
 *
 * source: //wpml.org/forums/topic/batch-change-translate-independently/
 */

DELETE FROM `table-prefix_postmeta` WHERE meta_key='_icl_lang_duplicate_of';
