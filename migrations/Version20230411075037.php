<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230411075037 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie ADD top_actor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26FB1EF3806 FOREIGN KEY (top_actor_id) REFERENCES top_actor (id)');
        $this->addSql('CREATE INDEX IDX_1D5EF26FB1EF3806 ON movie (top_actor_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie DROP FOREIGN KEY FK_1D5EF26FB1EF3806');
        $this->addSql('DROP INDEX IDX_1D5EF26FB1EF3806 ON movie');
        $this->addSql('ALTER TABLE movie DROP top_actor_id');
    }
}
