<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class SendzapPluginConfig extends PluginConfig {

    // Provide compatibility function for versions of osTicket prior to
    // translation support (v1.9.4)
    function translate() {
        if (!method_exists('Plugin', 'translate')) {
            return array(
                function ($x) {
                    return $x;
                },
                function ($x, $y, $n) {
                    return $n != 1 ? $y : $x;
                }
            );
        }
        return Plugin::translate('sendzap');
    }

    function getOptions() {
        list ($__, $_N) = self::translate();

        return array(
          'sendzap-x-api-key' => new TextboxField(array(
            'label'           => $__('Sendzap x-api-key'),
            'required'        =>true,
            'default'         => '',
            'placeholder'     => "Sendzap x-api-key",
            'configuration' => array(
              'size'   => 130,
              'length' => 300
            )
          )),
          'sendzap-whatsapp-key' => new TextboxField(array(
            'label'           => $__('Sendzap Instance id'),
            'required'        =>true,
            'default'         => '',
            'placeholder'     => "Sendzap Instance id",
            'configuration' => array(
              'size'   => 130,
              'length' => 300
            )
          ))
        );
    }

}
