# The first command shows you the orphan postmeta that will be removed with the second command
#
# It is important that all post-types that are no longer needed are first deleted from the `tableprefix_posts` table.
#
# courtesy inmotionhosting comes this handy snippet
# https://www.inmotionhosting.com/support/website/wordpress/cleaning-up-old-post-meta-data-in-wordpress
#

# show the orphan postmeta
SELECT * FROM tableprefix_postmeta pm LEFT JOIN tableprefix_posts wp ON wp.ID = pm.post_id WHERE wp.ID IS NULL;

# remove the orphan postmeta
DELETE pm FROM tableprefix_postmeta pm LEFT JOIN tableprefix_posts wp ON wp.ID = pm.post_id WHERE wp.ID IS NULL;