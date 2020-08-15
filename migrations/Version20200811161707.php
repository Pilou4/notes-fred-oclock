<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200811161707 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE terminal_option ADD tr_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE terminal_option ADD CONSTRAINT FK_29EA7D6572715269 FOREIGN KEY (tr_id_id) REFERENCES terminal (id)');
        $this->addSql('CREATE INDEX IDX_29EA7D6572715269 ON terminal_option (tr_id_id)');
        $this->addSql('ALTER TABLE terminal_util ADD terminal_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE terminal_util ADD CONSTRAINT FK_65A817D9CF2FC8D0 FOREIGN KEY (terminal_id_id) REFERENCES terminal (id)');
        $this->addSql('CREATE INDEX IDX_65A817D9CF2FC8D0 ON terminal_util (terminal_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE terminal_option DROP FOREIGN KEY FK_29EA7D6572715269');
        $this->addSql('DROP INDEX IDX_29EA7D6572715269 ON terminal_option');
        $this->addSql('ALTER TABLE terminal_option DROP tr_id_id');
        $this->addSql('ALTER TABLE terminal_util DROP FOREIGN KEY FK_65A817D9CF2FC8D0');
        $this->addSql('DROP INDEX IDX_65A817D9CF2FC8D0 ON terminal_util');
        $this->addSql('ALTER TABLE terminal_util DROP terminal_id_id');
    }
}
