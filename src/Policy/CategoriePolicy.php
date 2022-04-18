<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Categorie;
use Authorization\IdentityInterface;

/**
 * Categorie policy
 */
class CategoriePolicy
{
    /**
     * Check if $user can create Categorie
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Categorie $categorie
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Categorie $categorie)
    {
    }

    /**
     * Check if $user can update Categorie
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Categorie $categorie
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Categorie $categorie)
    {
    }

    /**
     * Check if $user can delete Categorie
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Categorie $categorie
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Categorie $categorie)
    {
    }

    /**
     * Check if $user can view Categorie
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Categorie $categorie
     * @return bool
     */
    public function canView(IdentityInterface $user, Categorie $categorie)
    {
    }
}
