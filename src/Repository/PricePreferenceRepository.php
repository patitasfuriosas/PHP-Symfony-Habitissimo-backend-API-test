<?php

namespace App\Repository;

use App\Entity\PricePreference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PricePreference|null find($id, $lockMode = null, $lockVersion = null)
 * @method PricePreference|null findOneBy(array $criteria, array $orderBy = null)
 * @method PricePreference[]    findAll()
 * @method PricePreference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PricePreferenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PricePreference::class);
    }

    // /**
    //  * @return PricePreference[] Returns an array of PricePreference objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PricePreference
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
