<?php

$site_menu = array(
  'admin' => array(
    array(
      'text' => 'Add Project',
      'link' => '/addproject.php'
    ),
    array(
      'text' => 'Manage Projects',
      'link' => '/manageprojects.php'
    ),
    array(
      'text' => 'Funded Projects',
      'link' => '/fundedprojects.php'
    )
  ),
  'investor' => array(
    array(
      'text' => 'Dashboard',
      'link' => '/dashboard.php'
    ),
    array(
      'text' => 'Invest',
      'link' => '/invest.php'
    ),
    array(
      'text' => 'FAQ',
      'link' => '/faq.php'
    ),
    array(
      'text' => 'Documents',
      'link' => '/documents.php'
    )
  )
);

$account_menu = array(
  'admin' => array(
    array(
      'text' => 'Add Partner',
      'link' => '/addpartner.php'
    ),
    array(
      'text' => 'Manage Projects',
      'link' => '/manageprojects.php'
    ),
    array(
      'text' => 'Verify Investor',
      'link' => '/verifyinvestor.php'
    ),
    array(
      'text' => 'Document Center',
      'link' => '/documentcenter.php'
    ),
    array(
      'text' => 'Country Information',
      'link' => '#'
    ),
    array(
      'text' => 'Add Administrator',
      'link' => '#'
    ),
    array(
      'text' => 'Account History',
      'link' => '#'
    ),
    array(
      'text' => 'Databases',
      'link' => '#'
    ),
    array(
      'text' => 'Settings',
      'link' => '#'
    ),
    array(
      'text' => 'Sign Out',
      'link' => '#'
    )
  ),
  'investor' => array(
    array(
      'text' => 'Account History',
      'link' => '#'
    ),
    array(
      'text' => 'Settings',
      'link' => '#'
    ),
    array(
      'text' => 'Sign Out',
      'link' => '#'
    )
  )
);

$notifications = array(
  array(
    'id' => '0',
    'owner' => 'admin',
    'text' => 'New website changes',
    'link' => '/',
    'status' => 'active'
  ),
  array(
    'id' => '1',
    'owner' => 'admin',
    'text' => 'Bruno Mars released a new song!',
    'link' => 'https://www.youtube.com/watch?v=-FyjEnoIgTM',
    'status' => 'active'
  ),
  array(
    'id' => '2',
    'owner' => 'admin',
    'text' => "Get your Dunkin' Iced Coffee Now!",
    'link' => 'https://www.dunkindonuts.com',
    'status' => 'active'
  ),
  array(
    'id' => '3',
    'owner' => 'investor',
    'text' => 'Your project has been funded!',
    'link' => '/investproject.php',
    'status' => 'active'
  ),
  array(
    'id' => '4',
    'owner' => 'investor',
    'text' => "There's a new document waiting for you",
    'link' => '/documentcenter.php',
    'status' => 'active'
  )
);

?>
