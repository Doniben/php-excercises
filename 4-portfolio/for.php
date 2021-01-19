<?php
$jobs = [
    [
      'position' => 'Python Developer',
      'description' => 'Backend developer with Django and Django Rest',
      'time' => 'From Junio/2021 to January 2021'
    ],
    [
      'position' => 'JavaScript Developer',
      'description' => 'Backend developer with Nodejs and Express',
      'time' => 'From Junio/2019 to January 2020',
    ],
    [
      'position' => 'PHP Developer',
      'description' => 'Backend developer with PHP and Laravel',
      'time' => 'From Junio/2018 to January 2019',
    ]
    ];

    for ($i = 0; $i < count($jobs); $i++) {
        echo '<h5>' . $jobs[$i]['position'] . '</h5>';
        echo '<p>' . $jobs[$i]['description'] . '</p>';
        echo '<em>' . $jobs[$i]['time']. '</em>';
        echo '<strong><br>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
    }
?>