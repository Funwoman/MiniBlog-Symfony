<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Author;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\PseudoTypes\False_;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $author1 = new Author();
        $author1->setName("Dickens");
        $author1->setEmail("dickens@example.com");
        $manager->persist($author1);

        $author2 = new Author();
        $author2->setName("Molière");
        $author2->setEmail("moliere@example.com");
        $manager->persist($author2);

        $author3 = new Author();
        $author3->setName("Balzac");
        $author3->setEmail("balzac@example.com");
        $manager->persist($author3);

        $category1 = new Category();
        $category1->setName("Policier");
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName("Comtemporain");
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName("Sentimental");
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setName("Technique");
        $manager->persist($category4);

        $article1 = new Article();
        $article1->setTitle("Le fond du puits");
        $article1->setContent("Lorem ipsum lorem ipsum lorem ipsum");
        $article1->setCreatedAt(new \DateTimeImmutable("2005-12-03"));
        $article1->setIsPublished(false);
        $article1->setAuthor($author1);
        $article1->setCategory($category2);
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setTitle("Au-delà des montagnes");
        $article2->setContent("Lorem ipsum dolor sit amet consectetur adipiscing elit");
        $article2->setCreatedAt(new \DateTimeImmutable("2008-06-15"));
        $article2->setIsPublished(true);
        $article2->setAuthor($author1);
        $article2->setCategory($category1);
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle("La nuit éternelle");
        $article3->setContent("Sed do eiusmod tempor incididunt ut labore");
        $article3->setCreatedAt(new \DateTimeImmutable("2010-01-20"));
        $article3->setIsPublished(true);
        $article3->setAuthor($author2);
        $article3->setCategory($category2);
        $manager->persist($article3);

        $article4 = new Article();
        $article4->setTitle("Les chemins oubliés");
        $article4->setContent("Ut enim ad minim veniam quis nostrud exercitation");
        $article4->setCreatedAt(new \DateTimeImmutable("2012-09-10"));
        $article4->setIsPublished(false);
        $article4->setAuthor($author2);
        $article4->setCategory($category1);
        $manager->persist($article4);

        $article5 = new Article();
        $article5->setTitle("Le souffle du vent");
        $article5->setContent("Duis aute irure dolor in reprehenderit");
        $article5->setCreatedAt(new \DateTimeImmutable("2014-03-05"));
        $article5->setIsPublished(true);
        $article5->setAuthor($author3);
        $article5->setCategory($category3);
        $manager->persist($article5);

        $article6 = new Article();
        $article6->setTitle("L’aube nouvelle");
        $article6->setContent("Excepteur sint occaecat cupidatat non proident");
        $article6->setCreatedAt(new \DateTimeImmutable("2016-07-22"));
        $article6->setIsPublished(true);
        $article6->setAuthor($author3);
        $article6->setCategory($category1);
        $manager->persist($article6);

        $article7 = new Article();
        $article7->setTitle("Les silences parlants");
        $article7->setContent("Sunt in culpa qui officia deserunt mollit anim");
        $article7->setCreatedAt(new \DateTimeImmutable("2018-11-30"));
        $article7->setIsPublished(false);
        $article7->setAuthor($author1);
        $article7->setCategory($category3);
        $manager->persist($article7);

        $article8 = new Article();
        $article8->setTitle("Le temps suspendu");
        $article8->setContent("Lorem ipsum dolor sit amet");
        $article8->setCreatedAt(new \DateTimeImmutable("2020-02-14"));
        $article8->setIsPublished(true);
        $article8->setAuthor($author2);
        $article8->setCategory($category2);
        $manager->persist($article8);

        $article9 = new Article();
        $article9->setTitle("L’écho des souvenirs");
        $article9->setContent("Consectetur adipiscing elit sed do eiusmod");
        $article9->setCreatedAt(new \DateTimeImmutable("2022-05-18"));
        $article9->setIsPublished(false);
        $article9->setAuthor($author3);
        $article9->setCategory($category1);
        $manager->persist($article9);

        $article10 = new Article();
        $article10->setTitle("Vers l’infini");
        $article10->setContent("Tempor incididunt ut labore et dolore magna aliqua");
        $article10->setCreatedAt(new \DateTimeImmutable("2024-01-08"));
        $article10->setIsPublished(true);
        $article10->setAuthor($author1);
        $article10->setCategory($category2);
        $manager->persist($article10);

        $manager->flush();
    }
}
