<?php

namespace App\Repository;

use App\Entity\BaliseForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BaliseForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaliseForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaliseForm[]    findAll()
 * @method BaliseForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaliseFormRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaliseForm::class);
    }

    // /**
    //  * @return BaliseForm[] Returns an array of BaliseForm objects
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
    public function findOneBySomeField($value): ?BaliseForm
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
