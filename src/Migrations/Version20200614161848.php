<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200614161848 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE budgets (id INT AUTO_INCREMENT NOT NULL, estimateddate_id INT DEFAULT NULL, pricepreference_id INT DEFAULT NULL, user_id INT NOT NULL, description LONGTEXT NOT NULL, category INT NOT NULL, subcategory INT NOT NULL, INDEX IDX_DCAA95487D8CC5BA (estimateddate_id), INDEX IDX_DCAA954876982C74 (pricepreference_id), INDEX IDX_DCAA9548A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE estimated_date (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE price_preference (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE budgets ADD CONSTRAINT FK_DCAA95487D8CC5BA FOREIGN KEY (estimateddate_id) REFERENCES estimated_date (id)');
        $this->addSql('ALTER TABLE budgets ADD CONSTRAINT FK_DCAA954876982C74 FOREIGN KEY (pricepreference_id) REFERENCES price_preference (id)');
        $this->addSql('ALTER TABLE budgets ADD CONSTRAINT FK_DCAA9548A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE budgets DROP FOREIGN KEY FK_DCAA95487D8CC5BA');
        $this->addSql('ALTER TABLE budgets DROP FOREIGN KEY FK_DCAA954876982C74');
        $this->addSql('DROP TABLE budgets');
        $this->addSql('DROP TABLE estimated_date');
        $this->addSql('DROP TABLE price_preference');
    }
}
