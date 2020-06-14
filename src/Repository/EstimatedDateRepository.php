<?php

namespace App\Repository;

use App\Entity\EstimatedDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EstimatedDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstimatedDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstimatedDate[]    findAll()
 * @method EstimatedDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstimatedDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstimatedDate::class);
    }

    // /**
    //  * @return EstimatedDate[] Returns an array of EstimatedDate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EstimatedDate
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
