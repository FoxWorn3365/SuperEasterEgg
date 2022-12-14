<?php
$api = new FoxCloud\API(file_get_contents('config.json'));

// Verifico che la configurazione sia OK
$plugin->addEvent('pageLoad', 'before', function() use($api, $plugin) {
  if (empty($api->getConfig()->easter_egg)) {
    $plugin->log("[#ERROR]", "[SuperEE] Generazione di una nuova configurazione! - Name: " . $api->getName());
    $list = array('tbbt' => true, 'tacos' => true, 'rickroll' => true, 'scp' => true);
    $api->editConfig(json_encode(array('enabled' => true, 'easter_egg' => $list)));
  }
});

$plugin->addEvent('containRequest', 'after', function() use($api, $plugin) {
  $plugin->log("", "[SuperEE] Plugin caricato con successo sulla pagina corrente!");
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

  console.log("Selected ID S0: " + id);
   
  if (id !== "") {
    document.getElementById(id).addEventListener('input', () => {
      if (document.getElementById(id).value.toUpperCase().includes("BIG BANG") && document.getElementById('tbbt')) {
        document.getElementById('tbbt').play();
      } else if (document.getElementById(id).value.toUpperCase().includes("NEVER") && document.getElementById('rickroll')) {
        document.getElementById('rickroll').play();
      } else if (document.getElementById(id).value.toUpperCase().includes("LOL") && document.getElementById('tacos')) {
        document.getElementById('tacos').play();
      } else if (document.getElementById(id).value.toUpperCase().includes("SCP") && document.getElementById('scp')) {
        document.getElementById('scp').play();
      } else {
        document.getElementById('scp').pause();
        document.getElementById('tacos').pause();
        document.getElementById('rickroll').pause();
        document.getElementById('tbbt').pause();
      }
    });
  }
  </script>
</html>
<?php
}, array('/rename/', '/new/', '/createDir/'));
