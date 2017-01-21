# Deny access to xmlrpc.php file via .htaccess file
#
# @source: https://www.keycdn.com/blog/wordpress-security/#xml-rpc
# 

# for Apache
<files xmlrpc.php>
Order deny,allow
Deny from all
</files>

# for Nginx
location = /xmlrpc.php {
    deny all;
}
