<?php
/**
 * Index file
 *
 * @package GruenesBrett
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grünes Brett - Erkunden</title>
  <?php wp_enqueue_style( 'style', get_stylesheet_uri(), '', '1.0' ); ?>
  <?php wp_enqueue_style( 'featherlight', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css', '', '1.0' ); ?>
  <?php wp_head(); ?>
  <link rel="icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/favicon.png">
  <link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/favicon.png">
</head>
<body>
  <div class="wrapper">
    <header>
      <h1 class="logo">
        <a href=""><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo.svg" alt="Grünes Brett"></a>
      </h1>
      <nav>
        <div class="item">
          Erkunden / <a href="kalender.html">Kalender</a>
        </div>
        <div class="item">
          <a href="eintragen.html">Veranstaltung eintragen</a>
        </div>
        <div class="item">
          <a href="werwirsind.html">Wer wir sind</a>
        </div>
      </nav>
    </header>
    <aside>
      <nav>
        <div class="item">
          <a href="">Demo</a>
        </div>
        <div class="item">
          <a href="">Diskussion</a>
        </div>
        <div class="item">
          <a href="">Exkursion</a>
        </div>
        <div class="item">
          <a href="">Online</a>
        </div>
        <div class="item">
          <a href="">Pflegeeinsatz</a>
        </div>
        <div class="item">
          <a href="">Sonstiges</a>
        </div>
        <div class="item">
          <a href="">Tauschen</a>
        </div>
        <div class="item">
          <a href="">Treffen</a>
        </div>
        <div class="item">
          <a href="">Vortrag</a>
        </div>
        <div class="item">
          <a href="">Workshop</a>
        </div>
      </nav>
    </aside>
    <main class="explore">
      <article>
        <section class="image" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/placeholder.png);">
          <a href=""></a>
        </section>
        <h2><a href="">Umweltringvorlesung „Grüner Hedonimus – ist eine lebenswerte Welt tanzbar?!“</a></h2>
        <section class="meta">
          16.11.2020, 16:40-18:10
        </section>
        <section class="description">
          <p>Umweltringvorlesung der Umweltinitiative der TU Dresden (tuuwi) Feiern als gäb’s ein Morgen? Feierkultur und Klimaschutz bilden ein Spannungsverhältnis von Leidenschaft und Vernunft. Feiern als hedonistischer Akt, bezieht sich auf das lustvolle Leben und nach dem Streben nach Glück und Genuss. Im Alltag begegnet uns Hedonismus meist abwertend als egoistische Lebensweise…</p>
          <p class="details"><a href="">mehr Informationen</a></p>
        </section>
      </article>
      <article>
        <section class="image" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/placeholder.png);">
          <a href=""></a>
        </section>
        <h2><a href="">Klimaverträgliches Reisen – aber wie?! Von Titos Gebirgsbahn bis zum Trekking auf dem Lykischen Weg</a></h2>
        <section class="meta">
          16.11.2020, 18:00-19:30, Schloßstraße 2
        </section>
        <section class="description">
          <p>Eine Reise zum Balkan beginnt und endet mit dem Pallatschinken im Speisewagen des EC nach Budapest. Dazwischen lagen zwei Monate Reisen durch Montenegro, Kosovo, Albanien, Griechenland und der Türkei und einzigartige Wandererlebnisse auf den Weitwanderwegen Peaks of the Balkans und dem Lykischen Weg. Pralle Sonne an der türkischen Küste, herzliche…</p>
          <p class="details"><a href="">mehr Informationen</a></p>
        </section>
      </article>
      <article>
        <section class="image" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/feelfestivalvier.png-768x512.jpg);">
          <a href="detail.html .detail" data-featherlight="ajax"></a>
        </section>
        <h2><a href="detail.html .detail" data-featherlight="ajax">BUNDjugend Treffen</a></h2>
        <section class="meta">
          16.11.2020, 19:00-21:00, Kamenzer Straße 35
        </section>
        <section class="description">
          <p>Umweltschutz liegt dir am Herzen? Du möchtest gern in einem Umweltschutzverein aktiv werden? Dann komm vorbei! Die Treffen der BUNDjugend Dresden sind für alle Interessierte bis 27 Jahre offen - wir freuen uns immer über neue Gesichter! Egal ob du mit deinem Engagement erst anfängst oder schon erfahren bist: Bei…</p>
          <p class="details"><a href="detail.html .detail" data-featherlight="ajax">mehr Informationen</a></p>
        </section>
      </article>
      <article>
        <section class="image" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/Impressionen8-768x512.jpg);">
          <a href=""></a>
        </section>
        <h2><a href="">Praktischer Naturschutz BUND: Geräte einwintern</a></h2>
        <section class="meta">
          18.11.2020, Podemuser Ring 1
        </section>
        <section class="description">
          <p>Das Jahr neigt sich dem Ende zu, und auch der praktische Naturschutz macht eine kleine Pause. Bei Punsch, Gebäck und gemütlichem Beisammensein an der Feuerschale möchten wir unsere Arbeitsgeräte in den Winterschlaf begleiten und das Jahr gemeinsam ausklingen lassen. Wir möchten euch ganz herzlich dazu einladen euch uns auf dem…</p>
          <p class="details"><a href="">mehr Informationen</a></p>
        </section>
      </article>
      <article>
        <section class="image" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/placeholder.png);">
          <a href=""></a>
        </section>
        <h2><a href="">RepairCafé (Dresden)</a></h2>
        <section class="meta">
          19.11.2020, 18:00-21:00, Bürgerstr. 68
        </section>
        <section class="description">
          <p>Es ist etwas kaputt gegangen und du möchtest es gern reparieren, hast aber nicht das Werkzeug dafür oder traust dir das alleine nicht zu. Was nun? Komm ins RepairCafé Dresden und Freital! Unsere Hilfe ist kostenlos. Wenn jemand unsere ehrenamtliche Arbeit mit einer kleinen Spende unterstützt, freuen wir uns sehr.…</p>
          <p class="details"><a href="">mehr Informationen</a></p>
        </section>
      </article>
      <article>
        <section class="image" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/placeholder.png);">
          <a href=""></a>
        </section>
        <h2><a href="">Umweltringvorlesung „Grüner Hedonismus – ist eine lebenswerte Welt tanzbar?!“</a></h2>
        <section class="meta">
          23.11.2020, 16:40-18:10
        </section>
        <section class="description">
          <p>Umweltringvorlesung der TU Umweltinitiative (tuuwi) Feiern als gäb’s ein Morgen? Feierkultur und Klimaschutz bilden ein Spannungsverhältnis von Leidenschaft und Vernunft. Feiern als hedonistischer Akt, bezieht sich auf das lustvolle Leben und nach dem Streben nach Glück und Genuss. Im Alltag begegnet uns Hedonismus meist abwertend als egoistische Lebensweise mit kurzfristiger…</p>
          <p class="details"><a href="">mehr Informationen</a></p>
        </section>
      </article>
      <article>
        <section class="image" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/feelfestivalvier.png-768x512.jpg);">
          <a href=""></a>
        </section>
        <h2><a href="">BUNDjugend Treffen</a></h2>
        <section class="meta">
          23.11.2020, 19:00-21:00
        </section>
        <section class="description">
          <p>Umweltschutz liegt dir am Herzen? Du möchtest gern in einem Umweltschutzverein aktiv werden? Dann komm vorbei! Die Treffen der BUNDjugend Dresden sind für alle Interessierte bis 27 Jahre offen - wir freuen uns immer über neue Gesichter! Egal ob du mit deinem Engagement erst anfängst oder schon erfahren bist: Bei…</p>
          <p class="details"><a href="">mehr Informationen</a></p>
        </section>
      </article>
    </main>
  </div>
  <?php wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-latest.js', '', '1.0', true ); ?>
  <?php wp_enqueue_script( 'featherlight', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', '', '1.0', true ); ?>
  <?php wp_footer(); ?>
</body>
</html>
