<?php

namespace Laravel\Socialite\Two;

use Illuminate\Http\Request;

abstract class AbstractOwnProvider extends AbstractProvider
{
    /**
     * The auth server url
     *
     * @var string
     */
    protected $authServerUrl;

    /**
     * The realm
     *
     * @var string
     */
    protected $realm;

    /**
     * Create a new provider instance.
     *
     * @param  Request  $request
     * @param string host
     * @param  string  $clientId
     * @param  string  $clientSecret
     * @param  string  $redirectUrl
     * @return void
     */
    public function __construct(Request $request, $authServerUrl, $realm, $clientId, $clientSecret, $redirectUrl)
    {
        $this->request = $request;
        $this->authServerUrl = $authServerUrl;
        $this->realm = $realm;
        $this->clientId = $clientId;
        $this->redirectUrl = $redirectUrl;
        $this->clientSecret = $clientSecret;
    }
}
