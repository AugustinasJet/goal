<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210124111139 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add workout table';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE workout (id INT AUTO_INCREMENT NOT NULL, exercise_id INT NOT NULL, performed_at DATETIME NOT NULL, sets INT NOT NULL, reps INT NOT NULL, note LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP TABLE workout');
    }
}
