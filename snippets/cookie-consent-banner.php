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
    <?php if($site->gdprKitCookieBannerTitle()->isNotEmpty()): ?>
      <strong><?php echo html::decode($site->gdprKitCookieBannerTitle()->html()) ?></strong>
    <?php endif ?>

    <?php if($site->gdprKitCookieBannerText()->isNotEmpty()): ?>
      <p class="gdpr-kit__cookie-banner__message">
        <?php echo strip_tags($site->gdprKitCookieBannerText()->kirbytext(), '<a>') ?>
      </p>
    <?php endif ?>
      <div id="more" class="gdpr-kit__settings">

        <?php
        /*
         * MANDATORY
         */
        ?>
        <?php if ($site->gdprKitCookieBannerSettingsMandatoryActive()->toBool() === true): ?>
          <div class="gdpr-kit__setting">
            <div class="gdpr-kit__setting__text">
              <?php if($site->gdprKitCookieBannerSettingsMandatoryTitle()->isNotEmpty()): ?>
                <strong><?php echo html::decode($site->gdprKitCookieBannerSettingsMandatoryTitle()->html()) ?></strong>
              <?php endif ?>
              <?php if($site->gdprKitCookieBannerSettingsMandatoryDescription()->isNotEmpty()): ?>
                <p><?php echo html::decode($site->gdprKitCookieBannerSettingsMandatoryDescription()->html()) ?></p>
              <?php endif ?>
            </div>
              <label class="gdpr-kit__toggle is-disabled">
                <input type="checkbox" id="gdprKitMandatoryCookies" class="gdpr-kit__toggle-input" checked disabled/>
                <span for="gdprKitMandatoryCookies"></span>
              </label><!-- .gdpr-kit__toggle -->
          </div><!-- .gdpr-kit__setting -->
        <?php endif ?>

        <?php
        /*
         * ANALYTICS
         */
        ?>
        <?php if ($site->gdprKitCookieBannerSettingsAnalyticsActive()->toBool() === true): ?>
          <div class="gdpr-kit__setting">
            <div class="gdpr-kit__setting__text">
              <?php if($site->gdprKitCookieBannerSettingsAnalyticsTitle()->isNotEmpty()): ?>
                <strong><?php echo html::decode($site->gdprKitCookieBannerSettingsAnalyticsTitle()->html()) ?></strong>
              <?php endif ?>
              <?php if($site->gdprKitCookieBannerSettingsAnalyticsDescription()->isNotEmpty()): ?>
                <p><?php echo html::decode($site->gdprKitCookieBannerSettingsAnalyticsDescription()->html()) ?></p>
              <?php endif ?>
            </div>
              <label class="gdpr-kit__toggle">
                <input type="checkbox" id="gdprKitAnalyticsCookies" class="gdpr-kit__toggle-input"/>
                <span for="gdprKitAnalyticsCookies"></span>
              </label><!-- .gdpr-kit__toggle -->
          </div><!-- .gdpr-kit__setting -->
        <?php endif ?>

        <?php
        /*
         * MARKETING
         */
        ?>
        <?php if ($site->gdprKitCookieBannerSettingsMarketingActive()->toBool() === true): ?>
          <div class="gdpr-kit__setting">
            <div class="gdpr-kit__setting__text">
              <?php if($site->gdprKitCookieBannerSettingsMarketingTitle()->isNotEmpty()): ?>
                <strong><?php echo html::decode($site->gdprKitCookieBannerSettingsMarketingTitle()->html()) ?></strong>
              <?php endif ?>
              <?php if($site->gdprKitCookieBannerSettingsMarketingDescription()->isNotEmpty()): ?>
                <p><?php echo html::decode($site->gdprKitCookieBannerSettingsMarketingDescription()->html()) ?></p>
              <?php endif ?>
            </div>
            <label class="gdpr-kit__toggle">
              <input type="checkbox" id="gdprKitMarketingCookies" class="gdpr-kit__toggle-input"/>
              <span for="gdprKitMarketingCookies"></span>
            </label><!-- .gdpr-kit__toggle -->
          </div><!-- .gdpr-kit__setting -->
        <?php endif ?>

        <?php
        /*
         * DATA PRIVACY
         */
        ?>
        <?php if($site->gdprKitFurtherDetailsText()->isNotEmpty()): ?>
          <div>
            <?php echo html::decode($site->gdprKitFurtherDetailsText()->html()) ?>
          </div>
        <?php endif ?>

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
