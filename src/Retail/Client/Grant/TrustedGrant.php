<?php

namespace DealPerch\Retail\Client\Grant;

/**
 * Represents a trusted (client-credentials) grant for supporting User Impersonation via API Service.
 *
 *
 */
class TrustedGrant extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'trusted';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [
            'id'
        ];
    }
}
