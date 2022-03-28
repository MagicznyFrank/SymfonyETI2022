<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220315154555 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_article ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE blog_article ADD CONSTRAINT FK_EECCB3E512469DE2 FOREIGN KEY (category_id) REFERENCES blog_category (id)');
        $this->addSql('CREATE INDEX IDX_EECCB3E512469DE2 ON blog_article (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_article DROP FOREIGN KEY FK_EECCB3E512469DE2');
        $this->addSql('DROP INDEX IDX_EECCB3E512469DE2 ON blog_article');
        $this->addSql('ALTER TABLE blog_article DROP category_id, CHANGE short_description short_description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE long_description long_description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE author author VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE blog_category CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
