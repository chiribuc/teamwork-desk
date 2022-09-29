<?php

function customers(): array
{
    return [
        'list' => [
            'customers' => [
                [
                    'id'            => 789456,
                    'firstName'     => 'Cialupa',
                    'lastName'      => 'Samalan',
                    'email'         => 'cialupa@crobert.ro',
                    'organization'  => null,
                    'extraData'     => '',
                    'notes'         => '',
                    'verifiedEmail' => false,
                    'linkedinURL'   => '',
                    'facebookURL'   => '',
                    'twitterHandle' => '',
                    'numTickets'    => 9,
                    'jobTitle'      => '',
                    'phone'         => '+13055018000',
                    'mobile'        => '',
                    'address'       => '',
                    'externalId'    => '',
                    'avatarURL'     => '',

                    'contacts' => [
                        [
                            'id'   => 456123,
                            'type' => 'contacts',
                        ],
                    ],

                    'customerwelcomeemails' => null,
                    'trusted'               => false,
                    'welcomeEmailSent'      => false,
                    'createdAt'             => '2021-06-23T14:30:41Z',
                    'updatedAt'             => '2021-06-23T14:30:41Z',

                    'createdBy' => [
                        'id'   => 258369,
                        'type' => 'users',
                    ],

                    'updatedBy' => [
                        'id'   => 963258,
                        'type' => 'users',
                    ],

                    'state' => 'active',
                ],

                [
                    'id'            => 456784,
                    'firstName'     => 'Gigi',
                    'lastName'      => 'Box',
                    'email'         => 'gigi@crobert.ro',
                    'organization'  => null,
                    'extraData'     => '',
                    'notes'         => '',
                    'verifiedEmail' => false,
                    'linkedinURL'   => '',
                    'facebookURL'   => '',
                    'twitterHandle' => '',
                    'numTickets'    => 1,
                    'jobTitle'      => '',
                    'phone'         => '+14243721700',
                    'mobile'        => '',
                    'address'       => '',
                    'externalId'    => '',
                    'avatarURL'     => '',

                    'contacts' => [
                        [
                            'id'   => 985452,
                            'type' => 'contacts',
                        ],
                    ],

                    'customerwelcomeemails' => null,

                    'trusted'          => false,
                    'welcomeEmailSent' => false,

                    'createdAt' => '2021-08-12T00:07:05Z',
                    'updatedAt' => '2021-08-12T00:07:05Z',
                    'createdBy' => [
                        'id'   => 741258,
                        'type' => 'users',
                    ],
                    'updatedBy' => [
                        'id'   => 528746,
                        'type' => 'users',
                    ],

                    'state' => 'active',
                ],
            ],
        ],

        'find' => [
            'id'            => 789456,
            'firstName'     => 'Cialupa',
            'lastName'      => 'Samalan',
            'email'         => 'cialupa@crobert.ro',
            'organization'  => null,
            'extraData'     => '',
            'notes'         => '',
            'verifiedEmail' => false,
            'linkedinURL'   => '',
            'facebookURL'   => '',
            'twitterHandle' => '',
            'numTickets'    => 9,
            'jobTitle'      => '',
            'phone'         => '+13055018000',
            'mobile'        => '',
            'address'       => '',
            'externalId'    => '',
            'avatarURL'     => '',

            'contacts' => [
                [
                    'id'   => 456123,
                    'type' => 'contacts',
                ],
            ],

            'customerwelcomeemails' => null,
            'trusted'               => false,
            'welcomeEmailSent'      => false,
            'createdAt'             => '2021-06-23T14:30:41Z',
            'updatedAt'             => '2021-06-23T14:30:41Z',

            'createdBy' => [
                'id'   => 258369,
                'type' => 'users',
            ],

            'updatedBy' => [
                'id'   => 963258,
                'type' => 'users',
            ],

            'state' => 'active',
        ],

        'create' => [
            "customer" => [
                "id"            => 2545456,
                "firstName"     => "Gigi",
                "lastName"      => "Box",
                "email"         => "gigi@crobert.ro",
                "organization"  => null,
                "extraData"     => "",
                "notes"         => "",
                "verifiedEmail" => true,
                "linkedinURL"   => "",
                "facebookURL"   => "",
                "twitterHandle" => "",
                "numTickets"    => 0,
                "jobTitle"      => "",
                "phone"         => "",
                "mobile"        => "",
                "address"       => "Some address 22",
                "externalId"    => "",
                "avatarURL"     => "",

                "contacts" => [
                    [
                        "id"   => 987654,
                        "type" => "contacts",
                    ],
                ],

                "customerwelcomeemails" => null,
                "trusted"               => true,
                "welcomeEmailSent"      => true,
                "createdAt"             => "2022-09-29T12:28:12Z",
                "updatedAt"             => "2022-09-29T12:28:12Z",

                "createdBy" => [
                    "id"   => 315456,
                    "type" => "users",
                ],

                "updatedBy" => [
                    "id"   => 315456,
                    "type" => "users",
                ],

                "state" => "active",
            ],

            "included" => [
                "contacts" => [
                    [
                        "id"        => 549874,
                        "value"     => "gigi@crobert.ro",
                        "type"      => "email",
                        "isMain"    => true,
                        "createdAt" => "2022-09-29T12:28:12Z",
                        "updatedAt" => "2022-09-29T12:28:12Z",
                        "createdBy" => [
                            "id"   => 315456,
                            "type" => "users",
                        ],
                        "updatedBy" => [
                            "id"   => 315456,
                            "type" => "users",
                        ],
                        "state"     => "active",
                    ],
                ],

                "users" => [
                    [
                        "id"                       => 315456,
                        "email"                    => "surez@crobert.ro",
                        "firstName"                => "Technical",
                        "lastName"                 => "Support",
                        "avatarURL"                => "https://s3.amazonaws.com/TWFiles/491882/userAvatar/7b755f58-3d88-4fa5-a167-40ea4ca1233d.png",
                        "editMethod"               => "html",
                        "isPartTime"               => false,
                        "ticketReplyRedirect"      => "Inbox",
                        "reviewer"                 => false,
                        "trainingWheelsEnrollment" => null,
                        "role"                     => "Admin",
                        "sendPushNotifications"    => true,
                        "sendWebNotifications"     => false,
                        "timeFormatId"             => 1,
                        "timezoneId"               => 62,
                        "projectsCompanyId"        => 86546,
                        "isAppOwner"               => true,
                        "createdAt"                => "2018-07-02T08:30:09Z",
                        "updatedAt"                => "2022-09-17T22:06:58Z",

                        "createdBy" => [
                            "id"   => 999999999,
                            "type" => "users",
                        ],

                        "updatedBy" => [
                            "id"   => 315456,
                            "type" => "users",
                        ],

                        "state" => "active",
                    ],
                ],
            ],
        ],

        'update' => [
            "customer" => [
                "id"            => 2545456,
                "firstName"     => "Gabriel",
                "lastName"      => "Box",
                "email"         => "gigi@crobert.ro",
                "organization"  => null,
                "extraData"     => "",
                "notes"         => "",
                "verifiedEmail" => true,
                "linkedinURL"   => "",
                "facebookURL"   => "",
                "twitterHandle" => "",
                "numTickets"    => 0,
                "jobTitle"      => "",
                "phone"         => "",
                "mobile"        => "",
                "address"       => "Some address 22",
                "externalId"    => "",
                "avatarURL"     => "",

                "contacts" => [
                    [
                        "id"   => 987654,
                        "type" => "contacts",
                    ],
                ],

                "customerwelcomeemails" => null,
                "trusted"               => true,
                "welcomeEmailSent"      => true,
                "createdAt"             => "2022-09-29T12:28:12Z",
                "updatedAt"             => "2022-09-29T12:28:12Z",

                "createdBy" => [
                    "id"   => 315456,
                    "type" => "users",
                ],

                "updatedBy" => [
                    "id"   => 315456,
                    "type" => "users",
                ],

                "state" => "active",
            ],

            "included" => [
                "contacts" => [
                    [
                        "id"        => 549874,
                        "value"     => "gigi@crobert.ro",
                        "type"      => "email",
                        "isMain"    => true,
                        "createdAt" => "2022-09-29T12:28:12Z",
                        "updatedAt" => "2022-09-29T12:28:12Z",
                        "createdBy" => [
                            "id"   => 315456,
                            "type" => "users",
                        ],
                        "updatedBy" => [
                            "id"   => 315456,
                            "type" => "users",
                        ],
                        "state"     => "active",
                    ],
                ],

                "users" => [
                    [
                        "id"                       => 315456,
                        "email"                    => "surez@crobert.ro",
                        "firstName"                => "Technical",
                        "lastName"                 => "Support",
                        "avatarURL"                => "https://s3.amazonaws.com/TWFiles/491882/userAvatar/7b755f58-3d88-4fa5-a167-40ea4ca1233d.png",
                        "editMethod"               => "html",
                        "isPartTime"               => false,
                        "ticketReplyRedirect"      => "Inbox",
                        "reviewer"                 => false,
                        "trainingWheelsEnrollment" => null,
                        "role"                     => "Admin",
                        "sendPushNotifications"    => true,
                        "sendWebNotifications"     => false,
                        "timeFormatId"             => 1,
                        "timezoneId"               => 62,
                        "projectsCompanyId"        => 86546,
                        "isAppOwner"               => true,
                        "createdAt"                => "2018-07-02T08:30:09Z",
                        "updatedAt"                => "2022-09-17T22:06:58Z",

                        "createdBy" => [
                            "id"   => 999999999,
                            "type" => "users",
                        ],

                        "updatedBy" => [
                            "id"   => 315456,
                            "type" => "users",
                        ],

                        "state" => "active",
                    ],
                ],
            ],
        ],
    ];
}