<?php

namespace App\Repository;

use App\Entity\BaliseNiveau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BaliseNiveau|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaliseNiveau|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaliseNiveau[]    findAll()
 * @method BaliseNiveau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaliseNiveauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaliseNiveau::class);
    }

    // /**
    //  * @return BaliseNiveau[] Returns an array of BaliseNiveau objects
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
    public function findOneBySomeField($value): ?BaliseNiveau
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
