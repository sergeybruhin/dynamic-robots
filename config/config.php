<?php

return [
    /*
    * Custom robots blade files directory prefix without trailing dot eg: robots
     * If null default package robots will be loaded
    */
    'directory' => null, // Custom robots blade files directory prefix without trailing dot eg: robots

    /*
    *  Relative url to sitemap.xml eg: sitemap.xml or sitemap-index.xml
    */
    'sitemap' => 'sitemap.xml',

    /*
     * Array of directives that will be appended to robots files of all environments.
     * Not applied for robots from custom directory.
     */
    'appendDirectives' => [
        'Disallow: /admin',
        'Disallow: /nova',
    ],
];
