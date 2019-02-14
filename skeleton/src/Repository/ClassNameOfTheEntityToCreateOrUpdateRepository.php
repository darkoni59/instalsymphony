<?php

namespace App\Repository;

use App\Entity\ClassNameOfTheEntityToCreateOrUpdate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ClassNameOfTheEntityToCreateOrUpdate|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClassNameOfTheEntityToCreateOrUpdate|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClassNameOfTheEntityToCreateOrUpdate[]    findAll()
 * @method ClassNameOfTheEntityToCreateOrUpdate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassNameOfTheEntityToCreateOrUpdateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ClassNameOfTheEntityToCreateOrUpdate::class);
    }

    // /**
    //  * @return ClassNameOfTheEntityToCreateOrUpdate[] Returns an array of ClassNameOfTheEntityToCreateOrUpdate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClassNameOfTheEntityToCreateOrUpdate
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
