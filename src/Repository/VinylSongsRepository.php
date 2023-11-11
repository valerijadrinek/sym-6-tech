<?php

namespace App\Repository;

use App\Entity\VinylSongs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VinylSongs>
 *
 * @method VinylSongs|null find($id, $lockMode = null, $lockVersion = null)
 * @method VinylSongs|null findOneBy(array $criteria, array $orderBy = null)
 * @method VinylSongs[]    findAll()
 * @method VinylSongs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VinylSongsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VinylSongs::class);
    }

//    /**
//     * @return VinylSongs[] Returns an array of VinylSongs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VinylSongs
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
