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

interface AttachmentsAware
{
    /**
     * Returns a list of files attached to the notification.
     *
     * @return resource[]|array|\SplFileInfo[]|\Psr\Http\Message\StreamInterface[]
     */
    public function getAttachments(): array;

    /**
     * Defines the list of attachments.
     *
     * @param resource[]|array|\SplFileInfo[]|\Psr\Http\Message\StreamInterface[] $attachments
     *
     * @return mixed
     */
    public function setAttachments(array $attachments = []);
}
