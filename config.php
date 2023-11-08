<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class SendfyPluginConfig extends PluginConfig {

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
        return Plugin::translate('sendfy');
    }

    function getOptions() {
        list ($__, $_N) = self::translate();

        return array(
          'sendfy-x-api-key' => new TextboxField(array(
            'label'           => $__('Sendfy x-api-key'),
            'required'        =>true,
            'default'         => '',
            'placeholder'     => "Sendfy x-api-key",
            'configuration' => array(
              'size'   => 130,
              'length' => 300
            )
          )),
          'sendfy-whatsapp-key' => new TextboxField(array(
            'label'           => $__('Sendfy Instance id'),
            'required'        =>true,
            'default'         => '',
            'placeholder'     => "Sendfy Instance id",
            'configuration' => array(
              'size'   => 130,
              'length' => 300
            )
          ))
        );
    }

}
