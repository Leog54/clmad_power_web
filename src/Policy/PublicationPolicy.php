<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Publication;
use Authorization\IdentityInterface;

/**
 * Publication policy
 */
class PublicationPolicy
{
    /**
     * Check if $user can create Publication
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Publication $publication
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Publication $publication)
    {
        return true;
    }

    /**
     * Check if $user can update Publication
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Publication $publication
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Publication $publication)
    {
    }

    /**
     * Check if $user can delete Publication
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Publication $publication
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Publication $publication)
    {
    }

    /**
     * Check if $user can view Publication
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Publication $publication
     * @return bool
     */
    public function canView(IdentityInterface $user, Publication $publication)
    {
        return true;
    }

    protected function isAuthor(IdentityInterface $user, Publication $publication) 
    {
        return $publication->id_user === $user->getIdentifier();
    }
}
