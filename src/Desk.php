<?php

declare(strict_types=1);

namespace Chiribuc\Teamwork;

use Chiribuc\Teamwork\Transporters\HttpTransporter;
use Chiribuc\Teamwork\ValueObjects\ApiToken;
use Chiribuc\Teamwork\ValueObjects\Transporter\BaseUri;
use Chiribuc\Teamwork\ValueObjects\Transporter\Headers;
use GuzzleHttp\Client as GuzzleClient;

final class Desk
{
    /**
     * Creates a new Teamwork Desk client with the given credentials.
     *
     * @param string $apiToken the Teamwork Desk API token
     * @param string $domain the domain used to log in to your Teamwork Desk dashboard
     *
     * @return \Chiribuc\Teamwork\Client
     */
    public static function client(string $apiToken, string $domain): Client
    {
        $apiToken = ApiToken::from($apiToken);

        $baseUri = BaseUri::from("{$domain}.teamwork.com/desk/api/v2");

        $headers = Headers::withAuthorization($apiToken);

        $client = new GuzzleClient();

        $transporter = new HttpTransporter($client, $baseUri, $headers);

        return new Client($transporter);
    }
}
