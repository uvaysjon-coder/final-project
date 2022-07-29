<?php

namespace App\Policies;

use App\Models\Reply;
use App\Models\User;

final class ReplyPolicy
{
    const CREATE = 'create';

    const UPDATE = 'update';

    const DELETE = 'delete';

    /**
     * Determine if replies can be created by the user.
     */
    public function create(User $user): bool
    {
        return $user->hasVerifiedEmail();
    }

    /**
     * Determine if the given reply can be updated by the user.
     */
    public function update(User $user, Reply $reply): bool
    {
        return $reply->isAuthoredBy($user) || $user->isModerator() || $user->isAdmin();
    }

    /**
     * Determine if the given reply can be deleted by the user.
     */
    public function delete(User $user, Reply $reply): bool
    {
        return $reply->isAuthoredBy($user) || $user->isModerator() || $user->isAdmin();
    }
}
