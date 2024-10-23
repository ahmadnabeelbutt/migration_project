<?php

namespace Drupal\custom_migrate\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\Entity\User;
use Drupal\Core\Link;
use Drupal\Core\Url;

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
    if (($user->id() == 0) || ($user->id() == 1)) {
      continue;
    }

      // Get company reference.
      $company = $user->get('field_company')->entity;
      $company_name = $company ? $company->label() : $this->t('N/A');
      $company_ca = $company ? $company->get('field_ca')->value : $this->t('N/A');
      $company_bs = $company ? $company->get('field_bs')->value : $this->t('N/A');
      //dd($company_ca);
       // Get address paragraph.
       $address = $user->get('field_address')->referencedEntities();
       $address_data = [];
       
       foreach ($address as $addr) {
         $address_data[] = [
           'street' => $addr->get('field_street')->value,
           'city' => $addr->get('field_city')->value,
           'zipcode' => $addr->get('field_zip_code')->value,
           'suite' => $addr->get('field_suite')->value,
           'geo_lat' => $addr->get('field_geo_latitude')->value,
           'geo_long' => $addr->get('field_ge')->value,
         ];
       }
       //dd($address_data);
      
      $users_data[] = [
        'id' => $user->id(),
        'name' => $user->get('field_name')->value,
        'username' => $user->getDisplayName(),
        'email' => $user->getEmail(),
        'phone' => $user->get('field_phone')->value,
        'website' => $user->get('field_website')->uri ? $user->get('field_website')->uri : '',
        'company' => [
          'name' => $company_name,
          'catch_phrase' => $company_ca,
          'bs' => $company_bs,
        ],
        'address_data' => $address_data,
      ];
    }
    //dd($users_data);
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
