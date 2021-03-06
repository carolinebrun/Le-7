<?php $app->start('header'); ?>

    <?php echo  $app->assets(['collections:assets/collections.js','collections:assets/js/entry.js'], $app['cockpit/version']) ; ?>

    <?php $app->trigger('cockpit.content.fields.sources'); ?>

    <style>
        textarea { min-height: 150px; }
    </style>

    <script>
     var COLLECTION       = <?php echo  json_encode($collection) ; ?>,
         COLLECTION_ENTRY = <?php echo  json_encode($entry) ; ?>,
         LOCALES          = <?php echo  json_encode($locales) ; ?>;
    </script>

<?php $app->end('header'); ?>

<div data-ng-controller="entry" ng-cloak>

    <div id="entry-versions" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
          <div class="uk-panel">

              <div data-ng-show="versions.length">
                  <h3 class="uk-panel-title"><?php echo $app("i18n")->get('Versions'); ?></h3>

                  <ul class="uk-list uk-list-space" data-ng-show="versions.length">
                    <li class="uk-flex" data-ng-repeat="version in versions">

                      <div><i class="uk-icon-clock-o uk-margin-small-right"></i></div>

                      <div class="uk-flex-item-1">
                        <strong> {{ version.time | fmtdate:'d M, Y H:i:s' }}</strong>
                        <div class="uk-text-small">
                          <a class="uk-link uk-text-muted" href="#v-{{ version.uid }}" data-ng-click="restoreVersion(version.uid)"><?php echo $app("i18n")->get('Restore this version'); ?></a>
                        </div>
                      </div>

                    </li>
                  </ul>
                  <br>

                  <div class="uk-button-group">
                    <button type="button" class="uk-button uk-button-danger" data-ng-click="clearVersions()" title="<?php echo $app("i18n")->get('Clear version history'); ?>" data-uk-tooltip="{pos:'bottom-left'}"><i class="uk-icon-trash-o"></i></button>
                    <button type="button" class="uk-button uk-button-primary" onclick="UIkit.offcanvas.hide()" title="<?php echo $app("i18n")->get('Close versions'); ?>" data-uk-tooltip="{pos:'bottom-left'}"><?php echo $app("i18n")->get('Cancel'); ?></button>
                  </div>
              </div>

              <div class="uk-text-muted uk-text-center" data-ng-show="!versions.length">
                <div class="uk-margin-small-bottom"><i class="uk-icon-clock-o"></i></div>
                <div><?php echo $app("i18n")->get('Empty'); ?></div>
              </div>
          </div>
        </div>
    </div>


    <nav class="uk-navbar uk-margin-large-bottom">
        <span class="uk-navbar-brand">
          <a href="<?php $app->route("/collections"); ?>"><?php echo $app("i18n")->get('Collections'); ?></a> /
          <a href="<?php $app->route("/collections/entries"); ?>/{{ collection._id }}">{{ collection.name }}</a> /
          <?php echo $app("i18n")->get('Entry'); ?>
        </span>

        <?php if(count($locales)) { ?>
        <div class="uk-navbar-content uk-form" ng-show="hasLocals">
            <select ng-model="locale" data-uk-tooltip title="<?php echo $app("i18n")->get('Language'); ?>">
                <option value="">Default</option>
                <?php foreach($locales as $locale) { ?>
                <option value="<?php echo  $locale ; ?>"><?php echo  \Lime\Helper\I18n::$locals[$locale] ; ?></option>
                <?php } ?>
            </select>
        </div>
        <?php } ?>

        <div class="uk-navbar-content">
            <a href="#entry-versions" data-uk-offcanvas data-ng-show="versions.length"><i class="uk-icon-clock-o"></i> <?php echo $app("i18n")->get('Versions'); ?> <span class="uk-badge">{{ versions.length }}</span></a>
        </div>
    </nav>

    <form class="uk-form" data-ng-submit="save()" data-ng-show="collection">

        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-3-4">
                <div class="app-panel">

                    <div class="uk-form-row" data-ng-repeat="field in fieldsInArea('main')">

                        <label class="uk-text-small">
                            <span ng-if="field.localize"><i class="uk-icon-comments-o"></i></span>
                            {{ (field.label || field.name) | uppercase }}
                            <span ng-if="field.required">*</span>
                        </label>

                        <div class="uk-text-small uk-text-danger uk-float-right uk-animation-slide-top" data-ng-if="field.error">{{ field.error }}</div>

                        <contentfield options="{{ field }}" ng-model="entry[getFieldname(field)]"></contentfield>

                        <div class="uk-margin-top" ng-if="field.slug">
                            <input class="uk-width-1-1 uk-form-blank uk-text-muted" type="text" data-ng-model="entry[getFieldname(field)+'_slug']" app-slug="entry[getFieldname(field)]" placeholder="<?php echo $app("i18n")->get('Slug...'); ?>" title="{{ (field.label || field.name) }} slug" data-uk-tooltip="{pos:'left'}">
                        </div>

                    </div>

                    <div class="uk-form-row">
                        <button type="submit" class="uk-button uk-button-primary uk-button-large"><?php echo $app("i18n")->get('Save'); ?></button>
                        <a href="<?php $app->route('/collections/entries/'.$collection["_id"]); ?>" ><?php echo $app("i18n")->get('Cancel'); ?></a>
                    </div>

                </div>
            </div>

            <div class="uk-width-medium-1-4">
                    <div class="uk-form-row" data-ng-repeat="field in fieldsInArea('side')">

                        <label class="uk-text-small">
                            <span ng-if="field.localize"><i class="uk-icon-comments-o"></i></span>
                            {{ (field.label || field.name) | uppercase }}
                            <span ng-if="field.required">*</span>
                        </label>

                        <div class="uk-text-small uk-text-danger uk-float-right uk-animation-slide-top" data-ng-if="field.error">{{ field.error }}</div>

                        <contentfield options="{{ field }}" ng-model="entry[getFieldname(field)]"></contentfield>
                    </div>

                </div>
            </div>
        </div>

    </form>

</div>
