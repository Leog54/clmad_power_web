<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\LikePubli;
use Authorization\IdentityInterface;

/**
 * LikePubli policy
 */
class LikePubliPolicy
{
    /**
     * Check if $user can create LikePubli
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\LikePubli $likePubli
     * @return bool
     */
    public function canAdd(IdentityInterface $user, LikePubli $likePubli)
    {
        return true;
    }

    /**
     * Check if $user can update LikePubli
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\LikePubli $likePubli
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, LikePubli $likePubli)
    {
    }

    /**
     * Check if $user can delete LikePubli
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\LikePubli $likePubli
     * @return bool
     */
    public function canDelete(IdentityInterface $user, LikePubli $likePubli)
    {
        return true;
    }

    /**
     * Check if $user can view LikePubli
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\LikePubli $likePubli
     * @return bool
     */
    public function canView(IdentityInterface $user, LikePubli $likePubli)
    {
        return true;
    }
}
