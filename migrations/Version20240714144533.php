<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240714144533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Создание таблицы категорий книг';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE book_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE book_category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE book_category (
            id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql("COMMENT ON TABLE book_category IS 'Таблица категорий книг'");
        $this->addSql("COMMENT ON TABLE book IS 'Таблица книг'");
        $this->addSql("COMMENT ON COLUMN book_category.title IS 'Название категории'");
        $this->addSql("COMMENT ON COLUMN book_category.slug IS 'Слаг'");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE book_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE book_category_id_seq CASCADE');
        $this->addSql('DROP TABLE book_category');
        $this->addSql('COMMENT ON COLUMN book.title IS \'Название книги\'');
    }
}
