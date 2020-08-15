<?php

namespace App\Repository;

use App\Entity\SysUtil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SysUtil|null find($id, $lockMode = null, $lockVersion = null)
 * @method SysUtil|null findOneBy(array $criteria, array $orderBy = null)
 * @method SysUtil[]    findAll()
 * @method SysUtil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SysUtilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SysUtil::class);
    }

    // /**
    //  * @return SysUtil[] Returns an array of SysUtil objects
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
    public function findOneBySomeField($value): ?SysUtil
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
