<?php

namespace App\Repository;

use App\Entity\BaliseTableau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BaliseTableau|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaliseTableau|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaliseTableau[]    findAll()
 * @method BaliseTableau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaliseTableauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaliseTableau::class);
    }

    // /**
    //  * @return BaliseTableau[] Returns an array of BaliseTableau objects
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
    public function findOneBySomeField($value): ?BaliseTableau
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
