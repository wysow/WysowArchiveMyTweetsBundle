<?php

namespace Wysow\ArchiveMyTweetsBundle\Entity;

use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * TweetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TweetRepository extends EntityRepository
{
    public function findAllByCreatedAtDesc($favorited = false)
    {
        $qb = $this->createQueryBuilder('t')
            ->orderBy('t.createdAt', 'DESC');

        if($favorited) {
            $qb->where('t.favorited = 1');
        }

        return $qb->getQuery()->execute();
    }

    public function findAllByClient($client)
    {
        $rsm = new ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addRootEntityFromClassMetadata('Wysow\ArchiveMyTweetsBundle\Entity\Tweet', 't');

        $query = $this->getEntityManager()->createNativeQuery('SELECT * FROM tweets WHERE source REGEXP CONCAT("(<a.*>)?", ?, "(</a>)?")', $rsm)
            ->setParameter(1, $client);

        return $query->getResult();
    }

    public function getTweetsByMonths()
    {
        $this->addDoctrineExtensions();

        $qb = $this->createQueryBuilder('t')
            ->select('YEAR(t.createdAt) as y, MONTH(t.createdAt) as m, count(t.id) as total')
            ->groupBy('y,m')
            ->orderBy('t.createdAt', 'DESC');

        return $qb->getQuery()->execute();
    }

    public function getTotalClients()
    {
        $qb = $this->createQueryBuilder('t')
            ->select('count(distinct t.source) as total');

        return $qb->getQuery()->getSingleResult()['total'];
    }

    public function getClients()
    {
        $qb = $this->createQueryBuilder('t')
            ->select('t.source, count(t.id) as total')
            ->groupBy('t.source')
            ->orderBy('total', 'DESC');

        return $qb->getQuery()->execute();
    }

    public function findByYearAndMonth($year, $month)
    {
        $this->addDoctrineExtensions();

        $qb = $this->createQueryBuilder('t')
            ->select('t')
            ->where('YEAR(t.createdAt) = :year')
            ->andWhere('MONTH(t.createdAt) = :month')
            ->orderBy('t.createdAt', 'DESC')
            ->setParameter('year', $year)
            ->setParameter('month', $month);

        return $qb->getQuery()->execute();
    }

    private function addDoctrineExtensions()
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');
    }
}