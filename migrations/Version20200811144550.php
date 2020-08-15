<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200811144550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE terminal_option (id INT AUTO_INCREMENT NOT NULL, un VARCHAR(255) NOT NULL, deux VARCHAR(255) DEFAULT NULL, trois VARCHAR(255) DEFAULT NULL, quatre VARCHAR(255) DEFAULT NULL, cinq VARCHAR(255) DEFAULT NULL, six VARCHAR(255) DEFAULT NULL, sept VARCHAR(255) DEFAULT NULL, huit VARCHAR(255) DEFAULT NULL, neuf VARCHAR(255) DEFAULT NULL, dix VARCHAR(255) DEFAULT NULL, onze VARCHAR(255) DEFAULT NULL, douze VARCHAR(255) DEFAULT NULL, treize VARCHAR(255) DEFAULT NULL, quatorze VARCHAR(255) DEFAULT NULL, quinze VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE terminal_util (id INT AUTO_INCREMENT NOT NULL, first VARCHAR(255) NOT NULL, second VARCHAR(255) DEFAULT NULL, third VARCHAR(255) DEFAULT NULL, four VARCHAR(255) DEFAULT NULL, five VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE terminal_option');
        $this->addSql('DROP TABLE terminal_util');
    }
}
