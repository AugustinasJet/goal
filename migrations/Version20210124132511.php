<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210124132511 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add exerciseId to workout';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE workout ADD CONSTRAINT FK_649FFB72E934951A FOREIGN KEY (exercise_id) REFERENCES exercise (id)');
        $this->addSql('CREATE INDEX IDX_649FFB72E934951A ON workout (exercise_id)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE workout DROP FOREIGN KEY FK_649FFB72E934951A');
        $this->addSql('DROP INDEX IDX_649FFB72E934951A ON workout');
    }
}
