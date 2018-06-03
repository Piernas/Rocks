<?php
  $languages = tep_get_languages();
  $languages_array = array();
  $languages_selected = DEFAULT_LANGUAGE;
  for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
    $languages_array[] = array('id' => $languages[$i]['code'],
                               'text' => $languages[$i]['name']);
    if ($languages[$i]['directory'] == $language) {
      $languages_selected = $languages[$i]['code'];
      $languages_selected_name = $languages[$i]['name'];
    }
  }
?>
<nav class="navbar navbar-inverse navbar-static-top navbar-no-corners navbar-no-margin" id="navbar-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header pull-left">
      <a class="navbar-brand" href="<?= tep_href_link ("index.php") ?>"><i class="fas fa-tachometer-alt"></i> <?= HEADER_TITLE_ADMINISTRATION ?></a>
    </div>
<?php
  if (tep_session_is_registered('admin')) {
?>
    <div class="navbar-header">
      <button type="button" id="menu-toggle" class="navbar-toggle">
        <span class="sr-only">Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <button type="button" id="btn-login" class="btn btn-primary navbar-toggle" data-toggle="collapse" data-target="#navbar-extra-collapse-login">
        <span class="sr-only">Account</span>
        <span class="fa fa-user"></span>
      </button>

      <button type="button" id="btn-language" class="btn btn-primary navbar-toggle" data-toggle="collapse" data-target="#navbar-extra-collapse-language">
        <span class="sr-only">language</span>
        <span class="fa fa-language"></span>
      </button>

      </div>

    <div class="collapse navbar-collapse navbar-right" id="navbar-extra-collapse-login">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a title="<?= 'Logged in as: ' . $admin['username'] ?>" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-user"></span> <?= $admin['username']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= tep_href_link('login.php', 'action=logoff') ?>"><i class="fa fa-sign-out"></i> Log out</a></li>
          </ul>
        </li>
      </ul>
    </div>

<?php
  }
  if (sizeof($languages) >1) {
?>
    <div class="collapse navbar-collapse navbar-right" id="navbar-extra-collapse-language">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-language"></span><span class="visible-xs-inline-block">&nbsp;Curent lang: <?= $languages_selected_name ?></span> <span class="hidden-xs"><?= $languages_selected; ?></span> <span class="caret"></span></a>
              <ul class="dropdown-menu">
<?php
    for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
?>
                <li><a href="<?= tep_href_link (basename($PHP_SELF),tep_get_all_get_params(array('language')) . 'language=' . $languages[$i]['code'])  ?>"><?= $languages[$i]['name'] ?></a></li>
<?php
    }
?>
              </ul>
        </li>
      </ul>
    </div>
<?php
  }
?>
  </div>
</nav>
