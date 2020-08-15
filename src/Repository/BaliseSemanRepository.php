<?php

namespace App\Repository;

use App\Entity\BaliseSeman;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BaliseSeman|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaliseSeman|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaliseSeman[]    findAll()
 * @method BaliseSeman[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaliseSemanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaliseSeman::class);
    }

    // /**
    //  * @return BaliseSeman[] Returns an array of BaliseSeman objects
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
    public function findOneBySomeField($value): ?BaliseSeman
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
