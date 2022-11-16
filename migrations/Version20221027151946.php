<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221027151946 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agence (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) DEFAULT NULL, localisation VARCHAR(150) NOT NULL, code VARCHAR(10) DEFAULT NULL, tel INT NOT NULL, cel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agent (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE assurance (id INT AUTO_INCREMENT NOT NULL, libelle LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', prix LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avoir (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, prix INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom_cli VARCHAR(15) NOT NULL, pren_cli VARCHAR(65) NOT NULL, tel_cli VARCHAR(15) NOT NULL, mat_cli VARCHAR(25) NOT NULL, email_cli VARCHAR(25) NOT NULL, num_perm VARCHAR(25) NOT NULL, piece_identity VARCHAR(30) NOT NULL, ville VARCHAR(30) NOT NULL, commune VARCHAR(30) NOT NULL, quartier VARCHAR(30) NOT NULL, civility VARCHAR(30) NOT NULL, date_dn DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, date_s DATETIME NOT NULL, date_d DATETIME NOT NULL, date_f DATETIME NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, remise INT NOT NULL, montant_ht INT DEFAULT NULL, montant_ttc INT DEFAULT NULL, franchise INT NOT NULL, caution INT NOT NULL, km_t INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, civilite VARCHAR(25) NOT NULL, nom_four VARCHAR(55) NOT NULL, nationality VARCHAR(10) NOT NULL, date_dn DATETIME NOT NULL, tel INT NOT NULL, email VARCHAR(100) NOT NULL, addresse VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modele (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parking (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, ville VARCHAR(20) NOT NULL, commune VARCHAR(20) NOT NULL, capacity VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reglementfac (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, prix INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarification (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(80) DEFAULT NULL, tva INT DEFAULT NULL, prix INT DEFAULT NULL, km_p INT DEFAULT NULL, designation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_de_contrat (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(40) DEFAULT NULL, depart DATETIME DEFAULT NULL, retour DATETIME DEFAULT NULL, nb_jour INT NOT NULL, heure_r TIME NOT NULL, heure_d TIME NOT NULL, date_r DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, last_name VARCHAR(80) NOT NULL, first_name VARCHAR(120) NOT NULL, adress VARCHAR(80) NOT NULL, city VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, num_chassis VARCHAR(25) NOT NULL, date_a DATETIME NOT NULL, energy VARCHAR(10) NOT NULL, matricule VARCHAR(10) NOT NULL, prix_jr INT NOT NULL, nb_porte INT NOT NULL, nb_pasger INT NOT NULL, gps TINYINT(1) NOT NULL, aps TINYINT(1) NOT NULL, couleur VARCHAR(20) NOT NULL, antiderap TINYINT(1) NOT NULL, airbag TINYINT(1) NOT NULL, alarm TINYINT(1) NOT NULL, km INT NOT NULL, clim TINYINT(1) NOT NULL, etat VARCHAR(20) NOT NULL, lvl_carbu INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE agence');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE assurance');
        $this->addSql('DROP TABLE avoir');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE modele');
        $this->addSql('DROP TABLE parking');
        $this->addSql('DROP TABLE reglementfac');
        $this->addSql('DROP TABLE tarification');
        $this->addSql('DROP TABLE type_de_contrat');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE vehicule');
    }
}
