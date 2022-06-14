<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220614082001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE questionnaire_data (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, question VARCHAR(50) NOT NULL, answer VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE questionnaire CHANGE question question LONGTEXT DEFAULT NULL, CHANGE answer_a answer_a VARCHAR(100) DEFAULT NULL, CHANGE answer2 answer2 VARCHAR(100) DEFAULT NULL, CHANGE answer3 answer3 VARCHAR(100) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE questionnaire_data');
        $this->addSql('ALTER TABLE blog_article CHANGE title title VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE descritpion descritpion LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE article article LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE created_by created_by LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE blog_category CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE created_by created_by LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE questionnaire CHANGE question question LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE answer_a answer_a VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE answer2 answer2 VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE answer3 answer3 VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE username username VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
