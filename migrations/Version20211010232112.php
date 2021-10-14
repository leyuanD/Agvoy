<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211010232112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('DROP INDEX IDX_CF60E67C54177093');
        $this->addSql('CREATE TEMPORARY TABLE __temp__owner AS SELECT id, room_id, familyname, firstname, address, country, image_name, image_updated_at, content_type FROM owner');
        $this->addSql('DROP TABLE owner');
        $this->addSql('CREATE TABLE owner (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER NOT NULL, familyname VARCHAR(255) NOT NULL COLLATE BINARY, firstname VARCHAR(255) DEFAULT NULL COLLATE BINARY, address CLOB DEFAULT NULL COLLATE BINARY, country VARCHAR(2) NOT NULL COLLATE BINARY, image_name VARCHAR(255) DEFAULT NULL COLLATE BINARY, image_updated_at DATETIME DEFAULT NULL, content_type VARCHAR(255) DEFAULT NULL COLLATE BINARY, CONSTRAINT FK_CF60E67C54177093 FOREIGN KEY (room_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO owner (id, room_id, familyname, firstname, address, country, image_name, image_updated_at, content_type) SELECT id, room_id, familyname, firstname, address, country, image_name, image_updated_at, content_type FROM __temp__owner');
        $this->addSql('DROP TABLE __temp__owner');
        $this->addSql('CREATE INDEX IDX_CF60E67C54177093 ON owner (room_id)');
        $this->addSql('DROP INDEX IDX_AB3946AC54177093');
        $this->addSql('DROP INDEX IDX_AB3946AC98260155');
        $this->addSql('CREATE TEMPORARY TABLE __temp__region_room AS SELECT region_id, room_id FROM region_room');
        $this->addSql('DROP TABLE region_room');
        $this->addSql('CREATE TABLE region_room (region_id INTEGER NOT NULL, room_id INTEGER NOT NULL, PRIMARY KEY(region_id, room_id), CONSTRAINT FK_AB3946AC98260155 FOREIGN KEY (region_id) REFERENCES region (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_AB3946AC54177093 FOREIGN KEY (room_id) REFERENCES room (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO region_room (region_id, room_id) SELECT region_id, room_id FROM __temp__region_room');
        $this->addSql('DROP TABLE __temp__region_room');
        $this->addSql('CREATE INDEX IDX_AB3946AC54177093 ON region_room (room_id)');
        $this->addSql('CREATE INDEX IDX_AB3946AC98260155 ON region_room (region_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_CF60E67C54177093');
        $this->addSql('CREATE TEMPORARY TABLE __temp__owner AS SELECT id, room_id, familyname, firstname, address, country, image_name, image_updated_at, content_type FROM owner');
        $this->addSql('DROP TABLE owner');
        $this->addSql('CREATE TABLE owner (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, room_id INTEGER NOT NULL, familyname VARCHAR(255) NOT NULL, firstname VARCHAR(255) DEFAULT NULL, address CLOB DEFAULT NULL, country VARCHAR(2) NOT NULL, image_name VARCHAR(255) DEFAULT NULL, image_updated_at DATETIME DEFAULT NULL, content_type VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO owner (id, room_id, familyname, firstname, address, country, image_name, image_updated_at, content_type) SELECT id, room_id, familyname, firstname, address, country, image_name, image_updated_at, content_type FROM __temp__owner');
        $this->addSql('DROP TABLE __temp__owner');
        $this->addSql('CREATE INDEX IDX_CF60E67C54177093 ON owner (room_id)');
        $this->addSql('DROP INDEX IDX_AB3946AC98260155');
        $this->addSql('DROP INDEX IDX_AB3946AC54177093');
        $this->addSql('CREATE TEMPORARY TABLE __temp__region_room AS SELECT region_id, room_id FROM region_room');
        $this->addSql('DROP TABLE region_room');
        $this->addSql('CREATE TABLE region_room (region_id INTEGER NOT NULL, room_id INTEGER NOT NULL, PRIMARY KEY(region_id, room_id))');
        $this->addSql('INSERT INTO region_room (region_id, room_id) SELECT region_id, room_id FROM __temp__region_room');
        $this->addSql('DROP TABLE __temp__region_room');
        $this->addSql('CREATE INDEX IDX_AB3946AC98260155 ON region_room (region_id)');
        $this->addSql('CREATE INDEX IDX_AB3946AC54177093 ON region_room (room_id)');
    }
}
