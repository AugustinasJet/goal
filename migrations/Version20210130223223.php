<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210130223223 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Remove extra _id for plan and exercise columns';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE exercise_plan DROP FOREIGN KEY FK_847F39CF2CE2DBAB');
        $this->addSql('ALTER TABLE exercise_plan DROP FOREIGN KEY FK_847F39CF5A726995');
        $this->addSql('DROP INDEX IDX_847F39CF5A726995 ON exercise_plan');
        $this->addSql('DROP INDEX IDX_847F39CF2CE2DBAB ON exercise_plan');
        $this->addSql('ALTER TABLE exercise_plan ADD plan_id INT NOT NULL, ADD exercise_id INT NOT NULL, DROP plan_id_id, DROP exercise_id_id');
        $this->addSql('ALTER TABLE exercise_plan ADD CONSTRAINT FK_847F39CFE899029B FOREIGN KEY (plan_id) REFERENCES plan (id)');
        $this->addSql('ALTER TABLE exercise_plan ADD CONSTRAINT FK_847F39CFE934951A FOREIGN KEY (exercise_id) REFERENCES exercise (id)');
        $this->addSql('CREATE INDEX IDX_847F39CFE899029B ON exercise_plan (plan_id)');
        $this->addSql('CREATE INDEX IDX_847F39CFE934951A ON exercise_plan (exercise_id)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE exercise_plan DROP FOREIGN KEY FK_847F39CFE899029B');
        $this->addSql('ALTER TABLE exercise_plan DROP FOREIGN KEY FK_847F39CFE934951A');
        $this->addSql('DROP INDEX IDX_847F39CFE899029B ON exercise_plan');
        $this->addSql('DROP INDEX IDX_847F39CFE934951A ON exercise_plan');
        $this->addSql('ALTER TABLE exercise_plan ADD plan_id_id INT NOT NULL, ADD exercise_id_id INT NOT NULL, DROP plan_id, DROP exercise_id');
        $this->addSql('ALTER TABLE exercise_plan ADD CONSTRAINT FK_847F39CF2CE2DBAB FOREIGN KEY (plan_id_id) REFERENCES plan (id)');
        $this->addSql('ALTER TABLE exercise_plan ADD CONSTRAINT FK_847F39CF5A726995 FOREIGN KEY (exercise_id_id) REFERENCES exercise (id)');
        $this->addSql('CREATE INDEX IDX_847F39CF5A726995 ON exercise_plan (exercise_id_id)');
        $this->addSql('CREATE INDEX IDX_847F39CF2CE2DBAB ON exercise_plan (plan_id_id)');
    }
}
