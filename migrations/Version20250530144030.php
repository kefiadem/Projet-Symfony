<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250530150000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Rename column user-id-id to user_id in cart table';
    }

    public function up(Schema $schema): void
    {
        // Rename column user-id-id to user_id
        $this->addSql('ALTER TABLE cart RENAME COLUMN `user_id_id` TO user_id');
    }

    public function down(Schema $schema): void
    {
        // Revert rename user_id back to user-id-id
        $this->addSql('ALTER TABLE cart RENAME COLUMN user_id TO `user_id_id`');
    }
}
