<?php

namespace App\Repository;

use App\Entity\TerminalOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TerminalOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method TerminalOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method TerminalOption[]    findAll()
 * @method TerminalOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TerminalOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TerminalOption::class);
    }

    // /**
    //  * @return TerminalOption[] Returns an array of TerminalOption objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TerminalOption
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
