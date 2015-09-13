Ajax language localization script
=============================

Ajax-lng is very simple php script for localization your software.
This script allows get translate message from flat JSON file for server-side (PHP) and client-side (Javascript).


INSTALLATION
------------

Please make sure the release file is unpacked under a Web-accessible
directory. You shall see the following files and directories:

      ajax-lng/
      lng/                 directory for translation files
      get-lng.php          main script
      CHANGELOG            describing changes in every Yii release
      README               this file



REQUIREMENTS
------------

The minimum requirement by Ajax-lng is that your Web server supports
PHP 5.1.0 or above. Ajax-lng has been tested with Apache HTTP server
on Windows and Linux operating systems.



QUICK START
-----------

In your main application js file (for example app.js) you must call get-lng.php for retrieve
needed translation array.

Example ajax call script use Webix framework

// Calling get-lng.php scripn and set name variable to browser language en-en
var oTr = JSON.parse(webix.ajax().sync().get("libs/ajax-lng/get-lng.php?name="+navigator.language.toLocaleLowerCase()).responseText);

//You must define tr function
function tr(name) {
    if (oTr[name]!=undefined)
      return oTr[name];
    else
      return name+' - N/A';
}

That's all.

We can use it.
Calling function tr for retrieve translated text by identifier sb_main.
alert(tr('sb_main'));


WHAT's NEXT
-----------




Vladyslav Melnychenko
http://www.vladyslav.ml
