# Deny access to readme.html file via .htaccess file
#
# deleting it is useless as WP update comes with new readme.html file
# 
# @source: http://disq.us/p/1ctge0y
# 

<files readme.html="">
Order allow,deny
Deny from all
</files>