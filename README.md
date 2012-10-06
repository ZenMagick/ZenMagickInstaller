ZenMagick Theme/Plugin Installer
===============

Composer installer for ZenMagick themes and plugins.

If you'd like your plugin or theme to be installable via
 `composer.phar` then create a file named `composer.json` 
with these contents.

````
{
    "name": "zenmagick/plugin-yourplugin",
    "type": "zenmagick-plugin",
    "require": {
        "zenmagick-installer": "*"
    }
}
````