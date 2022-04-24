<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Commentaire;
use Authorization\IdentityInterface;

/**
 * Commentaire policy
 */
class CommentairePolicy
{
    /**
     * Check if $user can create Commentaire
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Commentaire $commentaire
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Commentaire $commentaire)
    {
        return true;
    }

    /**
     * Check if $user can update Commentaire
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Commentaire $commentaire
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Commentaire $commentaire)
    {
    }

    /**
     * Check if $user can delete Commentaire
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Commentaire $commentaire
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Commentaire $commentaire)
    {
    }

    /**
     * Check if $user can view Commentaire
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Commentaire $commentaire
     * @return bool
     */
    public function canView(IdentityInterface $user, Commentaire $commentaire)
    {
    }
}
