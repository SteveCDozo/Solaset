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
  'admin' => array(
    array(
      'text' => 'New website changes are awaiting your review.',
      'link' => '/index.php'
    ),
    array(
      'text' => 'Bruno Mars released a new song!',
      'link' => 'https://www.youtube.com/watch?v=-FyjEnoIgTM'
    ),
    array(
      'text' => "Get your Dunkin' Iced Coffee Now!",
      'link' => 'https://www.dunkindonuts.com'
    )
  ),
  'investor' => array(
    array(
      'text' => 'Your project has been funded!',
      'link' => '/investproject.php'
    ),
    array(
      'text' => "There's a new document waiting for you.",
      'link' => '/documentcenter.php'
    )
  )
);

?>
