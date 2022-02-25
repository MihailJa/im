<?php

namespace App\Repository;

use App\Entity\Nested;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nested|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nested|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nested[]    findAll()
 * @method Nested[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NestedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nested::class);
    }

    // /**
    //  * @return Nested[] Returns an array of Nested objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nested
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
