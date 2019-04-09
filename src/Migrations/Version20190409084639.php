<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190409084639 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "portrait")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "landscape")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "cityscape")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "nature")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "sport")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "animal")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "design")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "children")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "alien")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "tux")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "puppies")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(),  "object")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "chuck norris")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "programming")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "super man")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "porn")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "hentai")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "gill bates")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "angular markel")');
        $this->addsql('INSERT INTO tag(id, label) VALUE (UUID(), "rasmus")');
    }

    public function down(Schema $schema) : void
    {
        $this->addsql('DELETE FROM tag  WHERE label = "portrait"');
        $this->addsql('DELETE FROM tag  WHERE label = "landscape"');
        $this->addsql('DELETE FROM tag  WHERE label =  "cityscape"');
        $this->addsql('DELETE FROM tag  WHERE label =  "nature"');
        $this->addsql('DELETE FROM tag  WHERE label =  "sport"');
        $this->addsql('DELETE FROM tag  WHERE label =  "animal"');
        $this->addsql('DELETE FROM tag  WHERE label =  "design"');
        $this->addsql('DELETE FROM tag  WHERE label =  "children"');
        $this->addsql('DELETE FROM tag  WHERE label =  "alien"');
        $this->addsql('DELETE FROM tag  WHERE label =  "tux"');
        $this->addsql('DELETE FROM tag  WHERE label =  "puppies"');
        $this->addsql('DELETE FROM tag  WHERE label =  "object"');
        $this->addsql('DELETE FROM tag  WHERE label = "chuck norris"');
        $this->addsql('DELETE FROM tag  WHERE label = "programming"');
        $this->addsql('DELETE FROM tag  WHERE label = "super man"');
        $this->addsql('DELETE FROM tag  WHERE label = "porn"');
        $this->addsql('DELETE FROM tag  WHERE label = "hentai"');
        $this->addsql('DELETE FROM tag  WHERE label = "gill bates"');
        $this->addsql('DELETE FROM tag  WHERE label = "angular markel"');
        $this->addsql('DELETE FROM tag  WHERE label = "rasmus"');

    }
}
