<?php

namespace App\Repository;

use App\Entity\BaliseList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BaliseList|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaliseList|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaliseList[]    findAll()
 * @method BaliseList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaliseListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaliseList::class);
    }

    // /**
    //  * @return BaliseList[] Returns an array of BaliseList objects
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
    public function findOneBySomeField($value): ?BaliseList
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
