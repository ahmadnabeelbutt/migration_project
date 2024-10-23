<?php

namespace Drupal\custom_migrate\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\Entity\User;

/**
 * Controller for displaying users and their companies.
 */
class UsersCompaniesController extends ControllerBase {

  /**
   * Displays users and their corresponding companies in a table.
   *
   * @return array
   *   Render array for the table.
   */
  public function display() {
    $users_data = [];
  
    // Load all user entities.
    $users = User::loadMultiple();

    foreach ($users as $user) {

      // Skip anonymous users
      if (($user->id() == 0)) {
        continue;
      }

      // Get company reference.
      $company = $user->get('field_company')->entity;
      $company_name = $company ? $company->label() : $this->t('N/A');
      $company_ca = $company ? $company->get('field_ca')->value : $this->t('N/A');
      $company_bs = $company ? $company->get('field_bs')->value : $this->t('N/A');

      // Capture address data directly for the user.
      $address_data = [
        'street' => $user->get('field_street')->value,
        'city' => $user->get('field_city')->value,
        'zipcode' => $user->get('field_zipcode')->value,
        'suite' => $user->get('field_suite')->value,
        'geo_lat' => $user->get('field_geo_latitude')->value,
        'geo_long' => $user->get('field_geo_longitude')->value,
      ];

      $users_data[] = [
        'id' => $user->id(),
        'name' => $user->get('field_name')->value,
        'username' => $user->getDisplayName(),
        'email' => $user->getEmail(),
        'phone' => $user->get('field_phone')->value,
        'website' => $user->get('field_website')->value,
        'company' => [
          'name' => $company_name,
          'catch_phrase' => $company_ca,
          'bs' => $company_bs,
        ],
        'address_data' => $address_data, // Directly assign the single address data
      ];
    }
   
    return [
      '#theme' => 'users_companies',
      '#users' => $users_data,
      '#attached' => [
        'library' => [
          'custom_migrate/custom_migrate_styles',
        ],
      ],
    ];
  }
}
