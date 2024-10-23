<?php

namespace Drupal\custom_migrate\Commands;

use Drush\Commands\DrushCommands;
use Drush\Exceptions\UserAbortException;

class CustomMigrateCommands extends DrushCommands {

  /**
   * Runs both user migrations with a single command.
   *
   * @command custom_migrate:import_all
   * @aliases cm-import-all
   * @description Import both custom migrations.
   */
  public function importAll() {
    // First migration.
    $this->output()->writeln('Migrating companies...');
    $migrate_company = $this->executeMigration('migrate_company');
    
    // Check for failure.
    if ($migrate_company !== TRUE) {
      throw new UserAbortException('Migrating companies failed. Aborting.');
    }
    
    // Second migration 
    $this->output()->writeln('Migrating users...');
    $migrate_users = $this->executeMigration('migrate_users');
    
    // Check for failure.
    if ($migrate_users !== TRUE) {
      throw new UserAbortException('Migrating users failed. Aborting.');
    }
    
    $this->output()->writeln('Both migrations completed successfully.');
  }

  /**
   * Helper function to run a migration by its ID.
   *
   * @param string $migration_id
   *   The migration ID.
   *
   * @return bool
   *   TRUE if migration succeeds, FALSE otherwise.
   */
  protected function executeMigration($migration_id) {
    $migration = \Drupal::service('plugin.manager.migration')->createInstance($migration_id);
    $executable = new \Drupal\migrate_tools\MigrateExecutable($migration);
    
    try {
      $executable->import();
      return TRUE;
    }
    catch (\Exception $e) {
      $this->output()->writeln('Migration failed: ' . $e->getMessage());
      return FALSE;
    }
  }

}
