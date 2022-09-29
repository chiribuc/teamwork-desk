<?php

function ticketPriorities(): array
{
    return [
        'list' => [
            "ticketpriorities" => [
                [
                    "id"           => 52522,
                    "name"         => "high",
                    "color"        => "#E2888D",
                    "icon"         => "priority-high",
                    "displayOrder" => 3,
                    "createdAt"    => "2018-07-02T08:30:09Z",
                    "updatedAt"    => "2018-07-02T08:30:09Z",
                    "createdBy"    => [
                        "id"   => 205154,
                        "type" => "users",
                    ],
                    "updatedBy"    => [
                        "id"   => 205154,
                        "type" => "users",
                    ],
                    "state"        => "active",
                ],
                [
                    "id"           => 52520,
                    "name"         => "low",
                    "color"        => "#B3D6B4",
                    "icon"         => "priority-low",
                    "displayOrder" => 1,
                    "createdAt"    => "2018-07-02T08:30:09Z",
                    "updatedAt"    => "2018-07-02T08:30:09Z",
                    "createdBy"    => [
                        "id"   => 205154,
                        "type" => "users",
                    ],
                    "updatedBy"    => [
                        "id"   => 205154,
                        "type" => "users",
                    ],
                    "state"        => "active",
                ],
                [
                    "id"           => 52521,
                    "name"         => "medium",
                    "color"        => "#EADBA4",
                    "icon"         => "priority-medium",
                    "displayOrder" => 2,
                    "createdAt"    => "2018-07-02T08:30:09Z",
                    "updatedAt"    => "2018-07-02T08:30:09Z",
                    "createdBy"    => [
                        "id"   => 205154,
                        "type" => "users",
                    ],
                    "updatedBy"    => [
                        "id"   => 205154,
                        "type" => "users",
                    ],
                    "state"        => "active",
                ],
            ],
            "included"         => [],
            "pagination"       => [
                "records"      => 3,
                "pageSize"     => 50,
                "pages"        => 1,
                "page"         => 1,
                "hasMorePages" => false,
            ],
            "meta"             => [
                "page" => [
                    "count"      => 3,
                    "pageSize"   => 50,
                    "pageOffset" => 0,
                    "pages"      => 1,
                    "hasMore"    => false,
                ],
            ],
        ],

        'find' => [
            "ticketpriority" => [
                "id"           => 52522,
                "name"         => "high",
                "color"        => "#E2888D",
                "icon"         => "priority-high",
                "displayOrder" => 3,
                "createdAt"    => "2018-07-02T08:30:09Z",
                "updatedAt"    => "2018-07-02T08:30:09Z",
                "createdBy"    => [
                    "id"   => 205154,
                    "type" => "users",
                ],
                "updatedBy"    => [
                    "id"   => 205154,
                    "type" => "users",
                ],
                "state"        => "active",
            ],
            "included"       => [],
        ],

        'create' => [
            "ticketpriority" => [
                "id"           => 65768,
                "name"         => "urgent",
                "color"        => "#FFF000",
                "icon"         => "priority-high",
                "displayOrder" => 0,
                "createdAt"    => "2022-09-29T15:58:18Z",
                "updatedAt"    => "2022-09-29T15:58:18Z",
                "createdBy"    => [
                    "id"   => 205154,
                    "type" => "users",
                ],
                "updatedBy"    => [
                    "id"   => 205154,
                    "type" => "users",
                ],
                "state"        => "active",
            ],
            "included"       => [],
        ],

        'update' => [
            "ticketpriority" => [
                "id"           => 65768,
                "name"         => "lowest",
                "color"        => "#FFF000",
                "icon"         => "priority-high",
                "displayOrder" => 0,
                "createdAt"    => "2022-09-29T15:58:18Z",
                "updatedAt"    => "2022-09-29T16:01:06Z",
                "createdBy"    => [
                    "id"   => 205154,
                    "type" => "users",
                ],
                "updatedBy"    => [
                    "id"   => 205154,
                    "type" => "users",
                ],
                "state"        => "active",
            ],
            "included"       => null,
        ],
    ];
}