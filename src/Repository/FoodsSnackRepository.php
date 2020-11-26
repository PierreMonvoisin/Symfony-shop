<?php

namespace App\Repository;

use App\Entity\FoodsSnack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FoodsSnack|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodsSnack|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodsSnack[]    findAll()
 * @method FoodsSnack[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodsSnackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodsSnack::class);
    }

    // /**
    //  * @return FoodsSnack[] Returns an array of FoodsSnack objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FoodsSnack
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
