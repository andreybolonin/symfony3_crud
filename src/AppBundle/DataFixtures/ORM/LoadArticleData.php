<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Article;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadArticleData extends AbstractFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $article = new Article();
        $article->setName('Статья номер 1');
        $article->setDescription('ларыварвылаывалвыавы');
        $article->setCreatedAt(new \DateTime());
        $manager->persist($article);

        $article = new Article();
        $article->setName('Статья номер 2');
        $article->setDescription('312321');
        $article->setCreatedAt(new \DateTime());
        $manager->persist($article);

        $article = new Article();
        $article->setName('Статья номер 3');
        $article->setDescription('24fsdfdsfdsf23');
        $article->setCreatedAt(new \DateTime());
        $manager->persist($article);

        $manager->flush();
    }
}