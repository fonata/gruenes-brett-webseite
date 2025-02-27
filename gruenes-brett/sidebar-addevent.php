<?php
/**
 * Navigation bar for the addevent page
 *
 * @package GruenesBrett
 */

if ( ! verify_community_calendar_loaded( true ) ) {
    return;
}

?>
<aside>
  <nav>
    <!-- TODO: make these links dynamic -->

    <?php if ( ! is_user_logged_in() ) : ?>
    <div class="item">
      <a href="/wp-login.php?redirect_to=/veranstaltung-eintragen">Anmelden für sofortige Freischaltung</a>
    </div>
    <div class="item">
      <a href="/wer-wir-sind">Account beantragen</a>
    </div>
    <?php endif; ?>

    <?php if ( Comcal_User_Capabilities::has_edit_privileges() ) : ?>
    <div class="item">
      <a href="/kategorien-bearbeiten">Administration</a>
    </div>
    <?php endif; ?>
  </nav>
</aside>
