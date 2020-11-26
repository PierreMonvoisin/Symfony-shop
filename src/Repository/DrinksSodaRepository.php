<?php

namespace App\Repository;

use App\Entity\DrinksSoda;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DrinksSoda|null find($id, $lockMode = null, $lockVersion = null)
 * @method DrinksSoda|null findOneBy(array $criteria, array $orderBy = null)
 * @method DrinksSoda[]    findAll()
 * @method DrinksSoda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrinksSodaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DrinksSoda::class);
    }

    // /**
    //  * @return DrinksSoda[] Returns an array of DrinksSoda objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DrinksSoda
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
