<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class EmojiListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var array<string, string>
     */
    private $emoji = [];

    /**
     * @return array<string, string>
     */
    public function getEmojis()
    {
        return $this->emoji;
    }
}
