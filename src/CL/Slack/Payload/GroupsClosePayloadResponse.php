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
class GroupsClosePayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var bool
     */
    private $noOp;

    /**
     * @var bool
     */
    private $alreadyClosed;

    /**
     * @return boolean
     */
    public function isAlreadyClosed()
    {
        return $this->alreadyClosed;
    }

    /**
     * @return boolean
     */
    public function isNoOp()
    {
        return $this->noOp;
    }
}
