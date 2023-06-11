<?php

namespace Drewlabs\Envoyer\Contracts;

interface EncryptionAware
{

    /**
     * return the `encryption` value
     * 
     * @return string|null
     */
    public function getEncryption();
}