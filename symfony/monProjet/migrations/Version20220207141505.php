<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220207141505 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C5B70D9C1');
        $this->addSql('DROP INDEX IDX_BE2DDF8C5B70D9C1 ON produits');
        $this->addSql('ALTER TABLE produits CHANGE libelle_categorie_id id_categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C9F34925F FOREIGN KEY (id_categorie_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8C9F34925F ON produits (id_categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C9F34925F');
        $this->addSql('DROP INDEX IDX_BE2DDF8C9F34925F ON produits');
        $this->addSql('ALTER TABLE produits CHANGE libelle_produit libelle_produit VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE id_categorie_id libelle_categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C5B70D9C1 FOREIGN KEY (libelle_categorie_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8C5B70D9C1 ON produits (libelle_categorie_id)');
    }
}
