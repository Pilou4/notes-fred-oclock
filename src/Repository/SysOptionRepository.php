<?php

namespace App\Repository;

use App\Entity\SysOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SysOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method SysOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method SysOption[]    findAll()
 * @method SysOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SysOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SysOption::class);
    }

    // /**
    //  * @return SysOption[] Returns an array of SysOption objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SysOption
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
