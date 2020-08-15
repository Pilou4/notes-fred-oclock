<?php

namespace App\Repository;

use App\Entity\BaliseDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BaliseDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaliseDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaliseDescription[]    findAll()
 * @method BaliseDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaliseDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaliseDescription::class);
    }

    // /**
    //  * @return BaliseDescription[] Returns an array of BaliseDescription objects
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
    public function findOneBySomeField($value): ?BaliseDescription
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
