<?php

namespace App\Repository;

use App\Entity\Workout;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Workout|null find($id, $lockMode = null, $lockVersion = null)
 * @method Workout|null findOneBy(array $criteria, array $orderBy = null)
 * @method Workout[]    findAll()
 * @method Workout[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkoutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Workout::class);
    }

    // /**
    //  * @return Workout[] Returns an array of Workout objects
    //  */
    public function findByUser(int $value): array
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.user = :val')
            ->setParameter('val', $value)
            ->orderBy('w.performed_at', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Workout
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
