<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Envoyer\Contracts;

interface Addressable
{
    /**
     * Compute the string value of the address.
     *
     * @return string
     */
    public function __toString();

    /**
     * returns the `name` of the address object.
     *
     * @return string|null
     */
    public function name();
}
