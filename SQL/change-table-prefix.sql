# Either use PHP MyAdmin to do the table prefix change in one go or use the commands below om a fresh install
# courtesy WP Beginner - https://www.wpbeginner.com/wp-tutorials/how-to-change-the-wordpress-database-prefix-to-improve-security/
# keep in mind to add other tables that were added to the list

RENAME table `wp_commentmeta` TO `newprefix_commentmeta`;
RENAME table `wp_comments` TO `newprefix_comments`;
RENAME table `wp_links` TO `newprefix_links`;
RENAME table `wp_options` TO `newprefix_options`;
RENAME table `wp_postmeta` TO `newprefix_postmeta`;
RENAME table `wp_posts` TO `newprefix_posts`;
RENAME table `wp_terms` TO `newprefix_terms`;
RENAME table `wp_termmeta` TO `newprefix_termmeta`;
RENAME table `wp_term_relationships` TO `newprefix_term_relationships`;
RENAME table `wp_term_taxonomy` TO `newprefix_term_taxonomy`;
RENAME table `wp_usermeta` TO `newprefix_usermeta`;
RENAME table `wp_users` TO `newprefix_users`;


# Then it is important to realise that there are two tables where the prefix also needs changing:
# - the former wp_options table
# the former wp_usermeta table

SELECT * FROM `newprefix_options` WHERE `option_name` LIKE '%wp_%'

SELECT * FROM `newprefix_usermeta` WHERE `meta_key` LIKE '%wp_%'

# After running these searches you will need to manually replace the prefix