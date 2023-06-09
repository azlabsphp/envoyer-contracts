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

interface NotificationResult
{
    /**
     * returns the notification result `date`.
     *
     * @return string|\DateTimeInterface
     */
    public function date();

    /**
     * returns the notification result `id`.
     *
     * @return string|int
     */
    public function id();

    /**
     * True if the notification was successful.
     *
     * @return bool
     */
    public function isOk();
}
