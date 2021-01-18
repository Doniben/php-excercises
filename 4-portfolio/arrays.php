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
  ?>
  
  <div>
      <ul>
          <li class="work-position">
          <h5><?php echo $jobs[0]['position'];?></h5>
          <p><?php echo $jobs[0]['description'];?></p>
          <em><?php echo $jobs[0]['time'];?></em>
          <strong>Achievements:</strong>
          <ul>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
          </ul>
        </li>
        <li class="work-position">
            <h5><?php echo $jobs[1]['position'];?></h5>
            <p><?php echo $jobs[1]['description'];?></p>
            <em><?php echo $jobs[1]['time'];?></em>
            <strong>Achievements:</strong>
            <ul>
              <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
              <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
              <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            </ul>
          </li>
          <li class="work-position">
            <h5><?php echo $jobs[2]['position'];?></h5>
            <p><?php echo $jobs[2]['description'];?></p>
            <em><?php echo $jobs[2]['time'];?></em>
              <strong>Achievements:</strong>
              <ul>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
              </ul>
            </li>
      </ul>
  </div>