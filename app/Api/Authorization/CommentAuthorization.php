<?php

/*
 * This file is part of Jitamin.
 *
 * Copyright (C) 2016 Jitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jitamin\Api\Authorization;

/**
 * Class CommentAuthorization.
 */
class CommentAuthorization extends ProjectAuthorization
{
    public function check($class, $method, $comment_id)
    {
        if ($this->userSession->isLogged()) {
            $this->checkProjectPermission($class, $method, $this->commentModel->getProjectId($comment_id));
        }
    }
}
