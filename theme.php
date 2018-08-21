<?php

/**
 * Theme Information
 */
$aTheme = [
    'id'          => 'flowchild',
    'title'       => 'FlowChild',
    'description' => 'Flow child theme to show theme inheritance',
    'thumbnail'   => 'flowchild.png',
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
    'parentVersions' => ['3.0.0','3.0.1','3.0.2']
];
