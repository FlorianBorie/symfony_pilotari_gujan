<?php

namespace App\Repository;

use App\Entity\NumLicense;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NumLicense|null find($id, $lockMode = null, $lockVersion = null)
 * @method NumLicense|null findOneBy(array $criteria, array $orderBy = null)
 * @method NumLicense[]    findAll()
 * @method NumLicense[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumLicenseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NumLicense::class);
    }

    // /**
    //  * @return NumLicense[] Returns an array of NumLicense objects
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
    public function findOneBySomeField($value): ?NumLicense
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
