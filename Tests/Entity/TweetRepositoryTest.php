<?php

namespace Wysow\ArchiveMyTweetsBundle\Tests\Entity;

use Wysow\ArchiveMyTweetsBundle\Entity\TweetRepository;
use Wysow\ArchiveMyTweetsBundle\Tests\Functional\BaseTestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-07-10 at 17:10:51.
 *
 * @group archive-my-tweets
 */
class TweetRepositoryTest extends BaseTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager()
        ;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->em->close();
        parent::tearDown();
    }

    /**
     * @covers Wysow\ArchiveMyTweetsBundle\Entity\TweetRepository::findAllByCreatedAtDesc
     */
    public function testFindAllByCreatedAtDesc()
    {
        $tweets = $this->em->getRepository('WysowArchiveMyTweetsBundle:Tweet')->findAllByCreatedAtDesc();

        $this->assertCount(50, $tweets);

        $tweets = $this->em->getRepository('WysowArchiveMyTweetsBundle:Tweet')->findAllByCreatedAtDesc(true);

        $this->assertCount(0, $tweets);
    }

    /**
     * @covers Wysow\ArchiveMyTweetsBundle\Entity\TweetRepository::findAllByClient
     */
    public function testFindAllByClient()
    {
        $tweets = $this->em->getRepository('WysowArchiveMyTweetsBundle:Tweet')->findAllByClient('Tweetdeck');

        $this->assertCount(40, $tweets);
    }

    /**
     * @covers Wysow\ArchiveMyTweetsBundle\Entity\TweetRepository::getTweetsByMonths
     */
    public function testGetTweetsByMonths()
    {
        $tweets = $this->em->getRepository('WysowArchiveMyTweetsBundle:Tweet')->getTweetsByMonths();

        // only the 2 first months of 2011 are in test fixtures
        $this->assertCount(2, $tweets);
    }

    /**
     * @covers Wysow\ArchiveMyTweetsBundle\Entity\TweetRepository::getTotalClients
     */
    public function testGetTotalClients()
    {
        $total = $this->em->getRepository('WysowArchiveMyTweetsBundle:Tweet')->getTotalClients();

        // only 3 clients in test fixtures
        $this->assertEquals(3, (int)$total);
    }

    /**
     * @covers Wysow\ArchiveMyTweetsBundle\Entity\TweetRepository::getClients
     */
    public function testGetClients()
    {
        $clients = $this->em->getRepository('WysowArchiveMyTweetsBundle:Tweet')->getClients();

        // only 3 clients in test fixtures
        $this->assertCount(3, $clients);
    }

    /**
     * @covers Wysow\ArchiveMyTweetsBundle\Entity\TweetRepository::findByYearAndMonth
     */
    public function testFindByYearAndMonth()
    {
        $tweets = $this->em->getRepository('WysowArchiveMyTweetsBundle:Tweet')->findByYearAndMonth(2011, 1);

        // 32 tweets in january 2011 in test fixtures
        $this->assertCount(32, $tweets);
    }

    /**
     * @covers Wysow\ArchiveMyTweetsBundle\Entity\TweetRepository::getSearchResults
     * @todo   Implement testGetSearchResults().
     */
    public function testGetSearchResults()
    {
        $tweets = $this->em->getRepository('WysowArchiveMyTweetsBundle:Tweet')->getSearchResults('viadeo');

        // 2 tweets talking about "viadeo" in test fixtures
        $this->assertCount(2, $tweets);
    }
}
