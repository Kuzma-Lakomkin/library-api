<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240714135322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Добавление таблицы книг';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            "CREATE TABLE book (id INT PRIMARY KEY, 
                    title VARCHAR(255) NOT NULL)");

        $this->addSql("COMMENT ON COLUMN book.title IS 'Название книги'");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DROP TABLE book");
    }
}
