<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Likecomm;
use Authorization\IdentityInterface;

/**
 * Likecomm policy
 */
class LikecommPolicy
{
    /**
     * Check if $user can create Likecomm
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Likecomm $likecomm
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Likecomm $likecomm)
    {
        return true;
    }

    /**
     * Check if $user can update Likecomm
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Likecomm $likecomm
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Likecomm $likecomm)
    {
    }

    /**
     * Check if $user can delete Likecomm
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Likecomm $likecomm
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Likecomm $likecomm)
    {
    }

    /**
     * Check if $user can view Likecomm
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Likecomm $likecomm
     * @return bool
     */
    public function canView(IdentityInterface $user, Likecomm $likecomm)
    {
    }
}
