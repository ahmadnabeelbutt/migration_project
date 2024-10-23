<?php

namespace Drupal\custom_migration\Command;

use Drush\Command\CommandAttributes;
use Drush\Command\DrupalCommands;

class MigrationCommands extends DrupalCommands {
  public function migrate() {
    $this->output()->writeln('Starting migration...');

    $this->getMigration('companies')->import();
    $this->getMigration('users')->import();

    $this->output()->writeln('Migration complete.');
  }
}
