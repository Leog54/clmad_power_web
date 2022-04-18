<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Ressource;
use Authorization\IdentityInterface;

/**
 * Ressource policy
 */
class RessourcePolicy
{
    /**
     * Check if $user can create Ressource
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Ressource $ressource
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Ressource $ressource)
    {
    }

    /**
     * Check if $user can update Ressource
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Ressource $ressource
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Ressource $ressource)
    {
    }

    /**
     * Check if $user can delete Ressource
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Ressource $ressource
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Ressource $ressource)
    {
    }

    /**
     * Check if $user can view Ressource
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Ressource $ressource
     * @return bool
     */
    public function canView(IdentityInterface $user, Ressource $ressource)
    {
    }
}
