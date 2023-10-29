<?php return array(
    'root' => array(
        'name' => 'ya/test',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'lw3/library' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'c4dd4844e12933218f8645c7d060b31f967764a5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../lw3/library',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
        'phpstan/phpstan' => array(
            'pretty_version' => '1.10.39',
            'version' => '1.10.39.0',
            'reference' => 'd9dedb0413f678b4d03cbc2279a48f91592c97c4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpstan/phpstan',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'ya/test' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
