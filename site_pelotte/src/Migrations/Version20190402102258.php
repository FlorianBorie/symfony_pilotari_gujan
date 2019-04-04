<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190402102258 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE licence (id INT AUTO_INCREMENT NOT NULL, num_licence VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil_events (profil_id INT NOT NULL, events_id INT NOT NULL, INDEX IDX_2278DE18275ED078 (profil_id), INDEX IDX_2278DE189D6A1065 (events_id), PRIMARY KEY(profil_id, events_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE profil_events ADD CONSTRAINT FK_2278DE18275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_events ADD CONSTRAINT FK_2278DE189D6A1065 FOREIGN KEY (events_id) REFERENCES events (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE events ADD contenu LONGTEXT NOT NULL, ADD image_name VARCHAR(255) NOT NULL, ADD updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE profil ADD licence_id INT DEFAULT NULL, DROP num_licence');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B29726EF07C9 FOREIGN KEY (licence_id) REFERENCES licence (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E6D6B29726EF07C9 ON profil (licence_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE profil DROP FOREIGN KEY FK_E6D6B29726EF07C9');
        $this->addSql('DROP TABLE licence');
        $this->addSql('DROP TABLE profil_events');
        $this->addSql('ALTER TABLE events DROP contenu, DROP image_name, DROP updated_at');
        $this->addSql('DROP INDEX UNIQ_E6D6B29726EF07C9 ON profil');
        $this->addSql('ALTER TABLE profil ADD num_licence VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP licence_id');
    }
}
