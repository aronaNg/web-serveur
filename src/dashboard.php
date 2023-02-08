<?php

class dashboard {
  private $inscriptionCount;
  private $themeCount;

  public function __construct($inscriptionCount, $themeCount) {
    $this->inscriptionCount = $inscriptionCount;
    $this->themeCount = $themeCount;
  }

  public function getInscriptionCount() {
    return $this->inscriptionCount;
  }

  public function getThemeCount() {
    return $this->themeCount;
  }
}
?>


