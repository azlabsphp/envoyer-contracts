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

interface ClientInterface
{
    /**
     * Sends the notification request to the server.
     */
    public function sendRequest(NotificationInterface $instance): NotificationResult;
}
