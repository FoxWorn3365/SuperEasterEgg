# SuperEasterEgg
**SuperEasterEgg** è un plugin per FoxCloud che grantisce l'aggiunta di divertenti suoni tramite codice in JS

## Installazione
Per installare il plugin basta scaricare il file `.phar` allegato all'ultimo relase qua su GitHub<br>
ed inserirlo nella cartella dei plugin (di default è `protected/plugins/`).<br>
Ricorda di abilitarlo nella configurazione locale dei plugin se sono limitati ad un elenco ([guida dettagliata](https://foxcloud.fcosma.it/docs/v1.7#plugins-configurazione-globale))

## Configurazione
La configurazione di questo plugin verrà generata in `protected/config/SuperEE/` e permette di:<br>
- Tramite il parametro `enabled` di attivare o disattivare il plugin
- Tramite il parametro `easter_egg` decidere quali easter-egg attivare
Un esempio della configurazione alla `v1.0` è il seguente:<br>
```json
{
   "enabled":true,
   "easter_egg": {
       "tbbt":true,
       "scp":true,
       "tacos":true,
       "rickroll":true
   }
}
```

## Easter-egg presenti
### Sigla di TBBT (The Big Bang Theory)
Il primo easter-egg (indicato nella configurazione come `tbbt`) include la sigla ufficiale completa della SitCom americana [**The Big Bang Theory**](https://it.wikipedia.org/wiki/The_Big_Bang_Theory)<br><br>
**Trigger**: `big bang`<br>
**Brano:** `Big Bang Theory`<br>
**Autore:** BARENAKED LADIES<br>
**🎥** [Video su YouTube](https://www.youtube.com/watch?v=TzhIfN4UQv8)

### Rickroll
Il secondo easter-egg (indicato nella configurazione come `rickroll`) include un bellissimo [**rickroll**](https://it.wikipedia.org/wiki/rickroll)<br><br>
**Trigger**: `never`<br>
**Brano:** `Never Gonna Give you Up`<br>
**Autore:** Rick Astley<br>
**🎥** [Video su YouTube](https://www.youtube.com/watch?v=dQw4w9WgXcQ)

### Tacos
Il terzo easter-egg (nella configurazione indicato come `tacos`) include la bellissima canzone It's raining tacos<br><br>
**Trigger**: `lol`<br>
**Brano:** `Raining Tacos`<br>
**Autore:** Parry Gripp & BooneBum<br>
**🎥** [Video su YouTube](https://www.youtube.com/watch?v=npjF032TDDQ)

### SCP
Il quarto easter-egg (nella configurazione indicato come `scp`) include la canzone principale della [Fondazione SCP](https://it.wikipedia.org/wiki/SCP_Foundation)<br><br>
**Trigger**: `scp`<br>
**Brano:** `Ajoura - The SCP Foundation Main Theme`<br>
**Autore:** Ajoura<br>
**🎥** [Video su YouTube](https://www.youtube.com/watch?v=YJaeH8ffl_M)

## Hai altri easter-egg da aggiungere?
Non ti preoccupare!
### Se sai programmare in Js e le basi di PHP
Allora puoi tranquillamente aggiungerlo te facendo una pull request<br>
### Se invece non sai niente del mondo della programmazione
Ti basterà contattarmi su Discord `FoxWorn#0001` oppure via email `foxworn3365@gmail.com`

**SuperEasterEgg è un plugin Ufficiale per FoxCloud, come indicato [dalla lista dei plugin](https://github.com/FoxWorn3365/Cloud/blob/v1.7/plugins.md)
