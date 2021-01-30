<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210130222548 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add progressionName to exercisePlan table';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE exercise_plan ADD progression_name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE exercise_plan DROP progression_name');
    }
}
