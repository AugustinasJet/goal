<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210130215106 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add Plan and ExercisePlan tables';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE exercise_plan (id INT AUTO_INCREMENT NOT NULL, plan_id_id INT NOT NULL, exercise_id_id INT NOT NULL, progression_step INT NOT NULL, reps INT NOT NULL, sets INT NOT NULL, INDEX IDX_847F39CF2CE2DBAB (plan_id_id), INDEX IDX_847F39CF5A726995 (exercise_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plan (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE exercise_plan ADD CONSTRAINT FK_847F39CF2CE2DBAB FOREIGN KEY (plan_id_id) REFERENCES plan (id)');
        $this->addSql('ALTER TABLE exercise_plan ADD CONSTRAINT FK_847F39CF5A726995 FOREIGN KEY (exercise_id_id) REFERENCES exercise (id)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE exercise_plan DROP FOREIGN KEY FK_847F39CF2CE2DBAB');
        $this->addSql('DROP TABLE exercise_plan');
        $this->addSql('DROP TABLE plan');
    }
}
