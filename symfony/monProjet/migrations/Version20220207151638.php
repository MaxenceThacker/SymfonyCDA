<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220207151638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE textes');
        $this->addSql('DROP TABLE utilisateurs');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE textes (idTexte INT AUTO_INCREMENT NOT NULL, codeTexte VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, fr LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, en LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(idTexte)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE utilisateurs (idUtilisateur INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, prenom VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, adresseMail VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, motDePasse VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, role INT NOT NULL COMMENT \'2 Admin 1 User\', UNIQUE INDEX adresseMail (adresseMail), PRIMARY KEY(idUtilisateur)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE categories CHANGE libelle_categorie libelle_categorie VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produits CHANGE libelle_produit libelle_produit VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
