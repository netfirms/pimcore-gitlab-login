<?php
/**
 * @category    Pimcore Plugin
 * @date        13/06/2017 12:07
 * @author      Jakub Płaskonka <jplaskonka@divante.pl>
 * @copyright   Copyright (c) 2017 Divante Ltd. (https://divante.co)
 */

namespace GitlabLogin\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

/**
 * Class Gitlab
 *
 * Overwriting default provider class, so we could extract Hosted Domain information
 *
 * @package GitlabLogin\OAuth2\Client\Provider
 */
class Gitlab extends \League\OAuth2\Client\Provider\Google
{
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return 'https://www.googleapis.com/plus/v1/people/me?' . http_build_query([
                'alt'    => 'json'
            ]);
    }
}