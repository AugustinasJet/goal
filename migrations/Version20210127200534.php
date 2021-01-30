<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210127200534 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Make exercise name unique';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AEDAD51C5E237E06 ON exercise (name)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP INDEX UNIQ_AEDAD51C5E237E06 ON exercise');
    }
}
