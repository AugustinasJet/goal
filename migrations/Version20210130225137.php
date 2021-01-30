<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210130225137 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add sets and reps from and to';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE exercise_plan ADD sets_from INT NOT NULL, ADD sets_to INT NOT NULL, ADD reps_from INT NOT NULL, ADD reps_to INT NOT NULL, DROP reps, DROP sets');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE exercise_plan ADD reps INT NOT NULL, ADD sets INT NOT NULL, DROP sets_from, DROP sets_to, DROP reps_from, DROP reps_to');
    }
}
