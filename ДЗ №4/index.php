<?php
$name = "Михаил";
$work_experience = [
    [
        'name_work' => 'Экономист СВА',
        'period' => 'Март 2012 - Декабрь 2014',
        'description' => 'Учет договоров по субаренде. Ведение учета и составление отчетности по оплате аренды помещений.',
    ],
    [
        'name_work' => 'Аудитор СВА',
        'period' => 'Январь 2015 - Май 2016',
        'description' => 'Финансовый контроль оплаченных счетов по договорам. Аудит бухгалтерской отчетности.',
    ],
    [
        'name_work' => 'Заместитель начальника отдела СВА',
        'period' => 'Июнь 2016 - Декабрь 2018',
        'description' => 'Организация работы службы внутреннего аудита. Финансовая экспертиза договоров.',
    ],
    [
        'name_work' => 'Заместитель генерального директора компании',
        'period' => 'Январь 2019 - по настоящее время',
        'description' => 'Орагнизация работы подчиненных служб и отделов. Исполнение обязанностец ГД во время его отсутствия.',
    ]
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=4OfHsvF7tmlyt9m3AJB3nOhySQKjHj43JfpNhl_XvrVWrS1uxSaaaK6BnMJ4ddPWOD75rQBCzC6NmtcdON-l2fX7gW5Zy2YW7wzoRX2twSXeaBq2CO6n6HQZThT0u2cp27w_LgcztYtevXR7IPnacgFQYxIGayUX0PZiay9OALZyn3Rbwk4v6C0pdR9GW6a84R2WgnYwfR6qPt-afFu_caHUr9yxIdgQRBO8PipWP3JsvfpnHjJ7KI5kPNBZWmwL3GfotJXdjdwQ2yqwB2U9q5-hGTOh_sVuRpRfC9So0benmGzFekG54L9GxagmyvDtPdMkZa2rrUzQjCeEAsRDEC1J99rk1kK1RszvpHeNr0Z1IXhDA3KSsxTeSGKTeD0q71zw-TwBPJDHGGu7Y0nfyntwOVz7f44bjGj2K5upcGf--99k_05mhL_LZmfJl5Yr03YHUajYi0cL5vjZ6kI2dhEs6KTpESCRsNBvfn-wTFtYySJ0R_8JaP5eZSzDf_r4nd-JF_d2xRVh_6AXriJW4QkjzC5_OLtuDePjx-43I3q4oVuk4KGQr4rErVRMvF1mwaYgNoGDej4JZH1BRKXLAfVC7zOJ0WBnvhM3_tEmtGInRiz8A2GjEncPNbcFZ-KCTMqNiGUDPACjb2nyj3zcyaX79Y2cmwvsO-uRAmNmP8cikCvnyG8Qfu8GLX22RgZEHPG9r3L8lSBW75kzA293bGu6X1pmioqYbv6h6kqbrlwJY1_Ai-N2dBTe7hrJ_DaNK3Q1SxytsqF2ApFJM35UMDwFA1Hzjfs83NAReRL00t0XBoOSQ-NLti2umv8tePmagbNWzd4m99et-Ko7KqUK7Yv4dbE9-haBGNUharZjpWb0zGRA8UkKEgHYvbsy9vTx4FCznSvH1jNTSNXou_M8L_3Ft4Pfm9toRPWV5jh9m2uqenBxMflRoH5M3m2YIxN6HbA3jm9sgFau3YqwV_-XSD4AvwH9JB0poIRGLkfYs2dzUTYc29UAuyPNi8AV5xXy13NWGTjxqBtV6PTrX9Faj3GEM3zmNojQnMNqNaDlo6U" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9zODM4c2FzLnN0b3JhZ2UueWFuZGV4Lm5ldC9yZGlzay8zNmUwNDZmMjZjZWQwMzFhNmVhNjBjOTlhNGY1N2FmODE1NzVlMjFmZWQ1ZGJiNWI5MDUxNDlmYjc1NTg2NmU2LzY0MzFkY2I2L3ZEQzViM0d2R0JGdnd5WWZaWXRLckdTMU5hSEVRRENrQ25xUTRpZmctLVJaazFqM21CaHNDWTA5d0pNR1M2aDNuUlpOZDlnc3JkZmExLU1TX1Q0dFJ3PT0_dWlkPTAmZmlsZW5hbWU9Y3YuaHRtbCZkaXNwb3NpdGlvbj1hdHRhY2htZW50Jmhhc2g9bFhoSDhLb3ZkUTRqNklRL3ZldHVWQzQ4TWxnVUV0aHJGa3duRDNpYTNxcVljSGN5ZmJhbUdWcXBKazNnRE1sNnEvSjZicG1SeU9Kb25UM1ZvWG5EYWclM2QlM2QlM2EvY3YuaHRtbCZsaW1pdD0wJmNvbnRlbnRfdHlwZT10ZXh0JTJmaHRtbCZvd25lcl91aWQ9NDE0NjEwMDY4JmZzaXplPTY2MzUmaGlkPWJmZjBmN2I0OTdiNGQyZjE5NmY0NDcyODIyMWQ5ZDE4Jm1lZGlhX3R5cGU9ZGV2ZWxvcG1lbnQmdGtudj12MiZydG9rZW49RkRDT1Z1Nk5ZMzBOJmZvcmNlX2RlZmF1bHQ9bm8meWNyaWQ9bmEtOWNmYjM0MTc1ZjM1MmM3ODg3ZWExMTg5ZGMxYTZkODMtZG93bmxvYWRlcjEwZSZ0cz01ZjhkOWQ2MDgxOTgwJnM9ZDM2NTJhZmUzZjY2Y2U0N2MwNDM5MzFiMTdiODY0ZWFmM2I5OTAzYTg4YmVhNDcyZGVjOTZlMjE2M2JkMzg3MCZwYj1VMkZzZEdWa1gxOVdwWkNWQVEtMmQwQjhHTXcxV1BxMFo1dGN4UU9IUWFZc3hTOHJMUWdMU1RUNld3RDJxX3FNYzdvaGtLOHNqV3Bfc1NXZkUxNWo4RWtkYU0tcmpQLUp6cFpWMFlVOU90QQ"/><style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?= $name?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <?php for ($i = 0; $i < count($work_experience); $i++): ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $work_experience[$i]['name_work']?> </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $work_experience[$i]['period']?></span></h6>
          <p><?= $work_experience[$i]['description']?></p>
          <hr>
        </div>
        <?php endfor;?>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
