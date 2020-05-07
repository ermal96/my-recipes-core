# DEVELOPER INSTRUCTIONS

* Delete README.txt and LICENSE.txt if you don't intend to publish this plugin in the WordPress repository
* Run `composer install` to install composer and `composer dump-autoload -o` to update the autoload file
* Decide if you need a widget for the social icons or an administration panel: for the first case, delete the admin social links, for the last case delete the public social links.
* Fill in all the information required in THIS file
* Fill in all the user documentation in the admin facing page. Do a search on '[' to find the placheholder i have put.
* Finally, delete this first part

This plugin comes with built-in user documentation page, WordPress email and name change and the management of the social links

- - -
# My Recipes Core

My Recipes core plugin

[Insert a long description of the functionalities of this plugin.]

## Options

- mr-change-wp-contacts: stores an array with 'name' and 'email' keys, where are saved the 'From' name and the 'From email' for every communications from WordPress
- mr-social-links: stores and array with social names as keys, and social links as values

[Insert the options that this plugin manages, its values and its functions.]

