<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class WhatsfyPluginConfig extends PluginConfig {

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
        return Plugin::translate('whatsfy');
    }

    function getOptions() {
        list ($__, $_N) = self::translate();

        return array(
            'whatsfy-whatsapp-key' => new TextboxField(array(
              'label'           => $__('Whatsfy Whatsapp Key'),
              'required'        =>true,
              'default'         => '',
              'placeholder'     => "Whatsfy Whatsapp Key",
              'configuration' => array(
                'size'   => 130,
                'length' => 300
              )
              )),
              'whatsfy-x-api-key' => new TextboxField(array(
                'label'           => $__('Whatsfy x-api-key'),
                'required'        =>true,
                'default'         => '',
                'placeholder'     => "Whatsfy x-api-key",
                'configuration' => array(
                  'size'   => 130,
                  'length' => 300
                )
            ))
        );
    }

}
