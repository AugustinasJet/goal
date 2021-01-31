<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210131171823 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add user plan table';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE user_plan (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, plan_id INT NOT NULL, INDEX IDX_A7DB17B4A76ED395 (user_id), INDEX IDX_A7DB17B4E899029B (plan_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_plan ADD CONSTRAINT FK_A7DB17B4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_plan ADD CONSTRAINT FK_A7DB17B4E899029B FOREIGN KEY (plan_id) REFERENCES plan (id)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP TABLE user_plan');
    }
}
