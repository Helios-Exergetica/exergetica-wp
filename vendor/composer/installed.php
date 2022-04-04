<?php return array(
    'root' => array(
        'pretty_version' => '5.9.2',
        'version' => '5.9.2.0',
        'type' => 'package',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'johnpbloch/wordpress',
        'dev' => true,
    ),
    'versions' => array(
        'johnpbloch/wordpress' => array(
            'pretty_version' => '5.9.2',
            'version' => '5.9.2.0',
            'type' => 'package',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core' => array(
            'pretty_version' => '5.9.2',
            'version' => '5.9.2.0',
            'type' => 'wordpress-core',
            'install_path' => __DIR__ . '/../../wordpress',
            'aliases' => array(),
            'reference' => '0eb92a65ce99816683e2c0d50e83774ae5bfcf1a',
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core-installer' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../johnpbloch/wordpress-core-installer',
            'aliases' => array(),
            'reference' => '237faae9a60a4a2e1d45dce1a5836ffa616de63e',
            'dev_requirement' => false,
        ),
        'wordpress/core-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '5.9.2',
            ),
        ),
    ),
);
