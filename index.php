<!--
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
-->
<?php
  $faq = [
    "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" => "La recente <a href='#'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
    Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si ultratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
    "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
    "Domanda" => "Risposta"
  ];

  // var_dump($faq);
  // foreach ($faq as $q => $answer) {
  //   echo $q."<br>";
  //   echo $answer."<br>";
  // }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <div class="body-wrap">
      <header>
        <nav class="top flex-box">
          <div class="policy flex-box">
            <a href="" class="inline-block">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1280px-Google_2015_logo.svg.png" alt="" class="logo">
            </a>
            <a href="" class="policy-index">Privacy e termini</a>
          </div>
          <div class="user flex-box">
            <a href="" class="inline-block user-nav">
              <i class="fas fa-th"></i>
            </a>
            <a href="#" class="inline-block user-img">
              <img src="" alt="">
            </a>
          </div>
        </nav>
        <nav class="bottom">
          <ul class="flex-box">
            <li>prova</li>
            <li>prova</li>
            <li>prova</li>
          </ul>
        </nav>
      </header>
      <main>
        <?php foreach ($faq as $q => $a): ?>
         <h2>
           <?php echo $q; ?>
         </h2><br>
         <p>
           <?php echo $a; ?>
         </p><br>
        <?php endforeach ?>
      </main>
    </div>
  </body>
</html>
