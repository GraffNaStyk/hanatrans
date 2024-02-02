<?php

namespace App\Repositories;

use App\Entities\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository implements UserRepositoryInterface
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    )
    {
        parent::__construct($this->entityManager, $this->entityManager->getClassMetadata(User::class));
    }

    public function getUserByCredentials(string $email): ?User
    {
        return $this->createQueryBuilder("u")
            ->where("u.login = :login")
            ->andWhere("u.role <> 'ROLE_USER'")
            ->andWhere("u.role <> 'ROLE_AUTH_USER'")
            ->setParameter('login', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
