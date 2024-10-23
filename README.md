# Custom Migration Module

This module is designed to migrate users and company content from a JSON endpoint into Drupal. It includes two migrations: one for users and another for companies. The user migration also links users to companies via an entity reference field.

## Requirements

- Drupal 9.x
- Migrate API
- Migrate Plus
- Migrate Tools

## Installation

1. Place this module in your `modules/custom/` directory.
2. Enable the module:
   ```bash
   drush en custom_migrate


## Database

1. Database named "migration_new.sql" is present in the repo, you need to import the db in phpmyadmin

## Import Commands

@command custom_migrate:import_all
@aliases cm-import-all

## Custom Route to display users and companies

1. /users-companies
