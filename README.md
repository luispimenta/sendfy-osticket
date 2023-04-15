![osticket](https://demo.osticket.com.br/scp/images/ost-logo.png)

whatsfy-osTicket for osTicket 1.15 or less, for osTicet 1.17 [use this one](https://github.com/luispimenta/whatsfy-osticket-1-17)
==============
An plugin for [osTicket](https://osticket.com) to send Whatsapp message with [Whatsfy](https://whatsfy.app/)

Info
------
This plugin uses CURL and was designed/tested with osTicket-1.15

## Requirements
- php_curl

## Install
--------
1. Create your account on (https://app.whatsfy.app)
2. Create your Whatsapp instance and connect with QRCODE
3. Get your Whatsapp instance KEY (https://app.whatsfy.app/whatsapp_instances)
4. Get your x-api-key (https://app.whatsfy.app/users/edit)
5. [Download](https://github.com/luispimenta/whatsfy-osticket/releases/latest) the zip file, unzip inside a folder like name whatsfy-osticket and place the contents into your `include/plugins`.
6. Now the plugin needs to be enabled & configured, select "Admin Panel" then "Manage -> Plugins" you should be seeing the list of currently installed plugins.
7. Click in Add New Plugin button, you will se the plugin name Whatsfy Whatsapp Notification and click in Install.
8. Click to edit the plugin and on `Whatsfy Whatsapp Notification` paste your whatsapp-key and x-api-key ( step 3 and 4 )
9. Click `Save Changes`! (If you get an error about curl, you will need to install the Curl module for PHP).
10. After that, go back to the list of plugins and tick the checkbox next to "Whatsfy Whatsapp Notification" and select the "Enable" button.
11. That's it

Note: only tickets with Agents assigned and with full phone number (must have DDI)

## License

This plugin is released under the MIT license. See the file [LICENSE](LICENSE).
