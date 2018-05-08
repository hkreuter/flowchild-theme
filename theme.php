<?php

/**
 * Theme Information
 */
$aTheme = [
    'id'          => 'flowchild',
    'title'       => 'FlowChild',
    'description' => 'Flow child theme to show theme inheritance',
    'thumbnail'   => 'theme.jpg',
    'version'     => '0.0.1',
    'author'      => 'HR',
    'settings'    => [
        [
            'group' => 'customize',
            'name'  => 'blSomeSetting',
            'type'  => 'bool',
            'value' => 1,
        ]
    ],
    'parentTheme'    => 'flow',
    'parentVersions' => array('3.0.0'),
];
