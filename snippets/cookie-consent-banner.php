<?php /*
       * Multilanguage check
       * /
if($kirby->option('languages'));

*/?>

<?php /*
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

<?php /*
<?= js('media/plugins/wearecandyblue/gdpr-kit/js/gdpr-kit.js') ?>
*/ ?>



<div class="gdpr-kit">
  <div id="js-gdpr-kit__cookie-banner" class="gdpr-kit__cookie-banner">
    <?php if($site->gdprKitCookieBannerMessage()->isNotEmpty()): ?>
      <p class="gdpr-kit__cookie-banner__message">
        <?php echo strip_tags($site->gdprKitCookieBannerMessage()->kirbytext(), '<a>') ?>
      </p>
    <?php endif ?>
      <div id="more" class="gdpr-kit__settings">

        <div class="gdpr-kit__setting">
          <div class="gdpr-kit__setting__text">
            <strong>Erforderliche Cookies</strong>
            <p>Diese Cookies sind notwendig, damit die Website korrekt funktioniert.</p>
          </div>
            <label class="gdpr-kit__toggle is-disabled">
              <input type="checkbox" id="gdprKitMandatoryCookies" class="gdpr-kit__toggle-input" checked disabled/>
              <span for="gdprKitMandatoryCookies"></span>
            </label><!-- .gdpr-kit__toggle -->
        </div>

        <div class="gdpr-kit__setting">
          <div class="gdpr-kit__setting__text">
            <strong>Analytics Cookies</strong>
            <p>Diese Cookies helfen uns, das Nutzungsverhalten besser zu verstehen.</p>
          </div>
            <label class="gdpr-kit__toggle">
              <input type="checkbox" id="gdprKitAnalyticsCookies" class="gdpr-kit__toggle-input"/>
              <span for="gdprKitAnalyticsCookies"></span>
            </label><!-- .gdpr-kit__toggle -->
        </div>

        <div class="gdpr-kit__setting">
          <div class="gdpr-kit__setting__text">
            <strong>Marketing Cookies</strong>
            <p>Diese Cookies werden eingesetzt, um Dir personalisierte Inhalte anzeigen zu können.</p>
          </div>
          <label class="gdpr-kit__toggle">
            <input type="checkbox" id="gdprKitMarketingCookies" class="gdpr-kit__toggle-input"/>
            <span for="gdprKitMarketingCookies"></span>
          </label><!-- .gdpr-kit__toggle -->
        </div>

        <div>
          Ausführlichere Informationen zu den verwendeten Cookies findest Du in unserer <a href="#">Datenschutzerklärung</a>.
        </div>

      </div><!-- .gdpr-kit__settings -->



    <div class="gdpr-kit__cookie-banner__actions">
      <?php if($site->gdprKitCookieBannerActionShowSettings()->isNotEmpty()): ?>
        <button id="gdprKitShowSettings" class="gdpr-kit__show-settings gdpr-kit__text-link">
          <?php echo html::decode($site->gdprKitCookieBannerActionShowSettings()->html()) ?>
        </button>
      <?php endif ?>
      <?php if($site->gdprKitCookieBannerActionAcceptAll()->isNotEmpty()): ?>
        <button id="gdpr-kit__submit" class="gdpr-kit__cookie-banner__btn gdpr-kit__cookie-banner__btn--accept" data-cookie-consent-mandatory="1" data-cookie-consent-analytics="0" data-cookie-consent-marketing="0" data-adjust-settings-label="Auswahl speichern">
          <?php echo html::decode($site->gdprKitCookieBannerActionAcceptAll()->html()) ?>
        </button>
      <?php endif ?>
    </div><!-- .gdpr-kit__cookie-banner__actions -->
  </div><!-- .gdpr-kit__cookie-banner -->
</div><!-- .gdpr-kit -->
