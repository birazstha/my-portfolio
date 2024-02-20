<?php

$getMethod = 'get';
$postMethod = 'post';
$putMethod = 'put';
$deleteMethod = 'delete';
$projectBaseUrl = "/projects";
$userBaseUrl = "/users";
$homeBaseUrl = "/home";
$frontendUserBaseUrl = "/frontendUsers";
$roleBaseUrl = "/roles";
$testimonialBaseUrl = "/testimonials";
$configBaseUrl = "/configs";
$frontendConfigBaseUrl = "/frontend-configs";
$enquiryBaseUrl = "/enquiries";
$permissionsBaseUrl = "/permissions";
$moduleBaseUrl = "/modules";
return [

    [
        'name' => 'Dashboard',
        'icon' => "<i class='fa fa-home'></i>",
        'hasSubmodules' => false,
        'route' => $homeBaseUrl,
    ],


    [
        'name' => 'Project Management',
        'icon' => '<i class="fas fa-server"></i>',
        'hasSubmodules' => false,
        'route' => $projectBaseUrl,
    ],

    [
        'name' => 'Testimonial Management',
        'icon' => '<i class="fas fa-comment-dots"></i>',
        'hasSubmodules' => false,
        'route' => $testimonialBaseUrl,
    ],

    [
        'name' => 'Enquiry Management',
        'icon' => '<i class="fas fa-question"></i>',
        'hasSubmodules' => false,
        'route' => $enquiryBaseUrl,
    ],

    //User Management
    // [
    //     'name' => 'User Management',
    //     'icon' => "<i class='fa fa-user parent-icon'></i>",
    //     'hasSubmodules' => true,
    //     'submodules' => [
    //         [
    //             'name' => 'Users',
    //             'icon' => '<i class="fas fa-user-cog parent-icon"></i>',
    //             'hasSubmodules' => false,
    //             'route' => $userBaseUrl,

    //         ],

    //         [
    //             'name' => 'Roles',
    //             'icon' => '<i class="fas fa-user-tie parent-icon"></i>',
    //             'hasSubmodules' => false,
    //             'route' => '/roles',

    //         ],
    //         [
    //             'name' => 'Permissions',
    //             'icon' => '<i class="fas fa-check parent-icon"></i>',
    //             'hasSubmodules' => false,
    //             'route' => $permissionsBaseUrl,
    //         ],
    //         [
    //             'name' => 'Modules',
    //             'icon' => '<i class="fas fa-list-ol parent-icon"></i>',
    //             'hasSubmodules' => false,
    //             'route' => $moduleBaseUrl,
    //         ],
    //     ],
    // ],

    [
        'name' => 'Configs',
        'icon' => '<i class="fas fa-cog parent-icon parent-icon"></i>',
        'hasSubmodules' => true,
        'submodules' => [
            [
                'name' => 'System Config',
                'icon' => '<i class="fas fa-bars"></i>',
                'hasSubmodules' => false,
                'route' => $configBaseUrl,
            ],
            [
                'name' => 'Frontend Config',
                'icon' => '<i class="far fa-images"></i>',
                'hasSubmodules' => false,
                'route' => $frontendConfigBaseUrl,
            ],
        ],
    ],
];
