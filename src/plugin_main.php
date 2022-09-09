<?php
$api = $plugin->getAPI(file_get_contents('../config.json'));

// Verifico che la configurazione sia OK
$plugin->addEvent('pageLoad', 'before', function() {
  if (empty($api->getConfig()->easteregg)) {
    $list = array('tbbt' => true, 'tacos' => true, 'rickroll' => true, 'scp' => true);
    $api->editConfig(json_encode(array('enabled' => true, 'easter_egg' => $list)));
  }
}

$plugin->addEvent('containRequest', 'after', function() {
?>
<html>
<?php
  $config = (object)$api->getConfig()->easter_egg;
  if ($config->tbbt) {
?>
  <audio id='tbbt' style='display: none' autplay>
    <source id='tbbt_src' src='https://foxcloud.fcosma.it/assets/audio/tbbt.mp3'>
  </audio>
<?php
  }
  
  if ($config->tacos) {
?>
  <audio id='tacos' style='display: none' autplay>
    <source id='tacos_src' src='https://foxcloud.fcosma.it/assets/audio/tacos.mp3'>
  </audio>
<?php
  }
  
  if ($config->rickroll) {
    ?>
  <audio id='rickroll' style='display: none' autplay>
    <source id='rickroll_src' src='https://foxcloud.fcosma.it/assets/audio/rickroll.mp3'>
  </audio>
<?php
  }
  
  if ($config->scp) {
?>
  <audio id='scp' style='display: none' autplay>
    <source id='scp_src' src='https://foxcloud.fcosma.it/assets/audio/scp.mp3'>
  </audio>
<?php
  }
?>
  <script>
  if (document.getElementById('dirname')) {
    var id = 'dirname';
  } else if (document.getElementById('content')) {
    var id = 'content';
  } else if (document.getElementById('filename')) {
    var id = 'filename';
  } else if (document.getElementById('renameFile')) {
    var id = 'renameFile';
  }
   
  if (id !== "") {
    document.getElementById(id).addEventListener('input', () => {
      if (document.getElementById(id).value.toUpperCase().includes("BIG BANG") && document.getElementById('tbbt')) {
        document.getElementById('tbbt').play();
      } else if (document.getElementById(id).value.toUpperCase().includes("NEVER") && document.getElementById('rickroll')) {
        document.getElementById('rickroll').play();
      } else if (document.getElementById(id).value.toUpperCase().includes("LOL") && document.getElementById('tacos')) {
        document.getElementById('tacos').play();
      } else if (document.getElementById(id).value.toUpperCase().includes("SCP") && document.getElementById('scp')) {
        document.getElementById('iscp').play();
      } else {
        document.getElementById('scp').pause();
        document.getElementById('tacos').pause();
        document.getElementById('rickroll').pause();
        document.getElementById('tbbt').pause();
      }
    }
  }
  </script>
<?php
}, array('/rename/', '/new/', '/createDir/'));
