<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210124204756 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add user_id field to workout table';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE workout ADD CONSTRAINT FK_649FFB72A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_649FFB72A76ED395 ON workout (user_id)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE workout DROP FOREIGN KEY FK_649FFB72A76ED395');
        $this->addSql('DROP INDEX IDX_649FFB72A76ED395 ON workout');
    }
}
