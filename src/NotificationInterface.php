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

interface NotificationInterface
{
    /**
     * Unique identifier of the notification instance.
     *
     * @return int|string
     */
    public function id();

    /**
     * returns notification sender.
     */
    public function getSender(): Addressable;

    /**
     * returns the notification identifier of the notification receiver.
     */
    public function getReceiver(): Addressable;

    /**
     * returns the notification content.
     *
     * @return string|\Stringable
     */
    public function getContent();
}
