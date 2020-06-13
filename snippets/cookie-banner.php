<?php /*
       * Multilanguage check
       * /
if($kirby->option('languages'));

*/?>


<div id="cookie_banner-wrapper" class="gdpr-kit__cookie-consent-banner">
  <p>
    <?php
      $link = t('wearecandyblue.gdpr-kit.data-privacy-statement-link');
      $target = $pages->findBy('intendedTemplate', 'data-privacy-statement')->url();

      echo I18n::template('wearecandyblue.gdpr-kit.cookie-consent-text', null, [
        'data-privacy-statement' => html::a($target, $link)
      ]);
    ?>
  </p>
  <button class="gdpr-kit__cookie-consent-banner__btn gdpr-kit__cookie-consent-banner__btn--reject" onclick="closeCookie()"><?= t('wearecandyblue.gdpr-kit.cookie-consent-btn-reject'); ?></button>
  <button class="gdpr-kit__cookie-consent-banner__btn gdpr-kit__cookie-consent-banner__btn--approve" onclick="closeCookie()"><?= t('wearecandyblue.gdpr-kit.cookie-consent-btn-approve'); ?></button>
</div>

<?= js('media/plugins/wearecandyblue/gdpr-kit/js/gdpr-kit.js') ?>
