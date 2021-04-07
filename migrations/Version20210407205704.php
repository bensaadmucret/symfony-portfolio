<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407205704 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, reference_id INT DEFAULT NULL, relation_id INT DEFAULT NULL, path VARCHAR(255) NOT NULL, INDEX IDX_6A2CA10C1645DEA9 (reference_id), INDEX IDX_6A2CA10C3256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reference (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, star_at DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', end_at DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', company VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, level INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C1645DEA9 FOREIGN KEY (reference_id) REFERENCES reference (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C3256915B FOREIGN KEY (relation_id) REFERENCES reference (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C1645DEA9');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C3256915B');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE reference');
        $this->addSql('DROP TABLE skill');
    }
}
