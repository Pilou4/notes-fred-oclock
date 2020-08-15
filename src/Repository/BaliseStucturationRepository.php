<?php

namespace App\Repository;

use App\Entity\BaliseStucturation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BaliseStucturation|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaliseStucturation|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaliseStucturation[]    findAll()
 * @method BaliseStucturation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaliseStucturationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaliseStucturation::class);
    }

    // /**
    //  * @return BaliseStucturation[] Returns an array of BaliseStucturation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BaliseStucturation
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
