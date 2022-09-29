<?php

function inboxes(): array
{
    return [
        'list' => [
            'inboxes' => [
                [
                    'id'                            => 123456,
                    'name'                          => 'Inbox Name 1',
                    'email'                         => 'support@crobert.ro',
                    'localPart'                     => 'supportdomain',
                    'forwardingAddress'             => 'support@crobert.teamwork.com',
                    'verified'                      => false,
                    'useTeamworkMailServer'         => true,
                    'smtpProvider'                  => 'custom',
                    'smtpPort'                      => 465,
                    'smtpSecurity'                  => 'TLS',
                    'autoReplyEnabled'              => false,
                    'autoReplySubject'              => 'Support Request Received',
                    'autoReplyMessage'              => '<div class=\'\'>Thank you for submitting your support request. Someone 
    from our support team will begin reviewing the details of your request and provide a response within 24 hours or less.<br></div><div class=\'\'><br></div><div class=\'\'>Support Team</div>',
                    'displayOrder'                  => 0,
                    'spamThreshold'                 => 5,
                    'happinessRatingEnabled'        => false,
                    'happinessRatingMessage'        => 'Thanks for your feedback!',
                    'timeloggingEnabled'            => false,
                    'iconImage'                     => 'https://tw-desk-files.teamwork.com/i/491882/inboximage/205154.20190526171120776.205154.201905261711232237c5S0.png',
                    'publicIconImage'               => '',
                    'languageCode'                  => 'EN',
                    'onClosedLock'                  => 'never',
                    'onClosedWait'                  => 0,
                    'sendEmailsFrom'                => 'Mailbox Name',
                    'signature'                     => '<div>-- <br></div><div>{%user.fullName%}<br></div><div>{%mailbox.email%}<br></div>',
                    'usingOfficeHours'              => false,
                    'isAdmin'                       => false,
                    'notificationOnly'              => false,
                    'includeTicketHistoryOnForward' => true,

                    'users' => [
                        [
                            'id'   => 132322,
                            'type' => 'users',
                            'meta' => [
                                'isAdmin' => false,
                                'starred' => false,
                            ],
                        ],
                        [
                            'id'   => 232234,
                            'type' => 'users',
                            'meta' => [
                                'isAdmin' => false,
                                'starred' => false,
                            ],
                        ],
                        [
                            'id'   => 454345,
                            'type' => 'users',
                            'meta' => [
                                'isAdmin' => false,
                                'starred' => false,
                            ],
                        ],
                        [
                            'id'   => 345232,
                            'type' => 'users',
                            'meta' => [
                                'isAdmin' => false,
                                'starred' => false,
                            ],
                        ],
                    ],

                    'inboxaliases' => null,

                    'ticketstatus' => [
                        'id'   => 1,
                        'type' => 'ticketstatuses',
                    ],

                    'inboxemailrefs' => null,
                    'triggers'       => null,
                    'mailboxes'      => null,
                    'createdAt'      => '2019-02-19T17:37:36Z',
                    'updatedAt'      => '2021-05-25T03:39:21Z',

                    'createdBy' => [
                        'id'   => 205154,
                        'type' => 'users',
                    ],

                    'updatedBy' => [
                        'id'   => 205154,
                        'type' => 'users',
                    ],

                    'state' => 'active',
                ],
                [
                    'id'                            => 12345,
                    'name'                          => 'Inbox Name 2',
                    'email'                         => 'market_support@crobert.ro',
                    'localPart'                     => 'domainsupportmarket',
                    'forwardingAddress'             => 'marketsupport@crobert.teamwork.com',
                    'verified'                      => false,
                    'useTeamworkMailServer'         => true,
                    'smtpProvider'                  => 'custom',
                    'smtpPort'                      => 465,
                    'smtpSecurity'                  => 'TLS',
                    'autoReplyEnabled'              => false,
                    'autoReplySubject'              => '',
                    'autoReplyMessage'              => null,
                    'displayOrder'                  => 0,
                    'spamThreshold'                 => 5,
                    'happinessRatingEnabled'        => true,
                    'happinessRatingMessage'        => 'Thanks for your feedback!',
                    'timeloggingEnabled'            => false,
                    'iconImage'                     => 'inbox-box.png',
                    'publicIconImage'               => '',
                    'languageCode'                  => 'en',
                    'onClosedLock'                  => 'never',
                    'onClosedWait'                  => 0,
                    'sendEmailsFrom'                => 'User\'s Name',
                    'signature'                     => "<div>-- <br></div><div> {%user.fullName%}<br></div><div> {%mailbox.email%}<br></div>",
                    'usingOfficeHours'              => false,
                    'isAdmin'                       => false,
                    'notificationOnly'              => false,
                    'includeTicketHistoryOnForward' => true,

                    'users' => [
                        [
                            'id'   => 345876,
                            'type' => 'users',
                            'meta' => [
                                'isAdmin' => false,
                                'starred' => false,
                            ],
                        ],
                    ],

                    'inboxaliases' => null,

                    'ticketstatus' => [
                        'id'   => 3,
                        'type' => 'ticketstatuses',
                    ],

                    'inboxemailrefs' => null,
                    'triggers'       => null,
                    'mailboxes'      => null,
                    'createdAt'      => '2019-04-16T06:57:59Z',
                    'updatedAt'      => '2022-01-25T14:50:39Z',

                    'createdBy' => [
                        'id'   => 854443,
                        'type' => 'users',
                    ],

                    'updatedBy' => [
                        'id'   => 344555,
                        'type' => 'users',
                    ],

                    'state' => 'active',
                ],
            ],
        ],
        
        'find' => [
            'inbox' => [
                'id'                            => 123456,
                'name'                          => 'Inbox Name 1',
                'email'                         => 'support@crobert.ro',
                'localPart'                     => 'supportdomain',
                'forwardingAddress'             => 'support@crobert.teamwork.com',
                'verified'                      => false,
                'useTeamworkMailServer'         => true,
                'smtpProvider'                  => 'custom',
                'smtpPort'                      => 465,
                'smtpSecurity'                  => 'TLS',
                'autoReplyEnabled'              => false,
                'autoReplySubject'              => 'Support Request Received',
                'autoReplyMessage'              => '<div class=\'\'>Thank you for submitting your support request. Someone 
    from our support team will begin reviewing the details of your request and provide a response within 24 hours or less.<br></div><div class=\'\'><br></div><div class=\'\'>Support Team</div>',
                'displayOrder'                  => 0,
                'spamThreshold'                 => 5,
                'happinessRatingEnabled'        => false,
                'happinessRatingMessage'        => 'Thanks for your feedback!',
                'timeloggingEnabled'            => false,
                'iconImage'                     => 'https://tw-desk-files.teamwork.com/i/491882/inboximage/205154.20190526171120776.205154.201905261711232237c5S0.png',
                'publicIconImage'               => '',
                'languageCode'                  => 'EN',
                'onClosedLock'                  => 'never',
                'onClosedWait'                  => 0,
                'sendEmailsFrom'                => 'Mailbox Name',
                'signature'                     => '<div>-- <br></div><div>{%user.fullName%}<br></div><div>{%mailbox.email%}<br></div>',
                'usingOfficeHours'              => false,
                'isAdmin'                       => false,
                'notificationOnly'              => false,
                'includeTicketHistoryOnForward' => true,

                'users' => [
                    [
                        'id'   => 132322,
                        'type' => 'users',
                        'meta' => [
                            'isAdmin' => false,
                            'starred' => false,
                        ],
                    ],
                    [
                        'id'   => 232234,
                        'type' => 'users',
                        'meta' => [
                            'isAdmin' => false,
                            'starred' => false,
                        ],
                    ],
                    [
                        'id'   => 454345,
                        'type' => 'users',
                        'meta' => [
                            'isAdmin' => false,
                            'starred' => false,
                        ],
                    ],
                    [
                        'id'   => 345232,
                        'type' => 'users',
                        'meta' => [
                            'isAdmin' => false,
                            'starred' => false,
                        ],
                    ],
                ],

                'inboxaliases' => null,

                'ticketstatus' => [
                    'id'   => 1,
                    'type' => 'ticketstatuses',
                ],

                'inboxemailrefs' => null,
                'triggers'       => null,
                'mailboxes'      => null,
                'createdAt'      => '2019-02-19T17:37:36Z',
                'updatedAt'      => '2021-05-25T03:39:21Z',

                'createdBy' => [
                    'id'   => 205154,
                    'type' => 'users',
                ],

                'updatedBy' => [
                    'id'   => 205154,
                    'type' => 'users',
                ],

                'state' => 'active',
            ],
        ],
    ];
}