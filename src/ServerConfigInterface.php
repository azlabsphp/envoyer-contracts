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

interface ServerConfigInterface
{
    /**
     * returns the `dsn` configuration for the server.
     */
    public function __toString(): string;

    /**
     * returns web service server ip or url.
     *
     * @return string|array|null
     */
    public function getHost();

    /**
     * returns web service server port.
     *
     * @return int
     */
    public function getHostPort();
}
