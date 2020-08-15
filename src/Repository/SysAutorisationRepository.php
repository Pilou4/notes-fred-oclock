<?php

namespace App\Repository;

use App\Entity\SysAutorisation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SysAutorisation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SysAutorisation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SysAutorisation[]    findAll()
 * @method SysAutorisation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SysAutorisationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SysAutorisation::class);
    }

    // /**
    //  * @return SysAutorisation[] Returns an array of SysAutorisation objects
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
    public function findOneBySomeField($value): ?SysAutorisation
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
