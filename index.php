<?php
$min_timestamp = 739777960;
$max_timestamp = 1023774760;
$min_size = 193;
$max_size = 120351;
$name_padding = 75;
$date_padding = 30;
$items = [
  "Totally PhotoShop 2018.rar.01.com.scr",
  [ "name" => "Butt photos.tiff.java", "size" => 3411 ],
  "probably 1000+ pictures of cat assholes.tar.zip.gz.bz2.xz.7z",
  "how to make a pipe balm.rtf",
  "alt.sex.stories.urethral-sounding.gonewrong-full-backup-1997.zip",
  "How to get PBS, ABC, NPR illegally [tRue lEgIT].htm",
  "Sovereign citizen manifesto.PDF",
  "Journey - Any Way You Want It [10 hours mix].wav",
  "alt.fan.theories.backstreet.lizardpeople-partial [recovered].zip",
  "hamsterdance [full uncensored].wmv",
  "[0h1m3s4ma xXxtreme subz] sailor moon deleted scenes.cbr",
  "[HOWTO] Save $$$ @ home DIY dentistry [tRue lEgIT].htm",
  "[SHINING FIST PIRATES] sTaR WArs 4 - new hOPe - super8 cam.asf",
  "Bittorrent Pro - fuLl verSion v4.3.81 (cracked) {unlocked}.exe.torrent",
  "Adam Sandler nudes.jpg.scr",
  "spaghettiOs {full version} [tRue lEgIT].exe",
  "lrn 2 english at home in spr teim.avi",
  "[SHINING FIST PIRATES] rivER dANce - VHSrip.asf",
  "Lego Movie (1993) live action [tRue lEgIT].mpeg",
  "Eminem - Stan.midi",
];

function link_name($item) {
  if(is_array($item) && ! empty($item['name']))
    $name = $item['name'];
  else
    $name = $item;
  return $name;
}

function right_pad_name($item) {
  $name = link_name($item);
  global $name_padding;
  $padding = '';
  for($i = 1; $i < $name_padding - strlen($name); $i++) { 
    $padding .= ' ';
  }
  return $padding;
}

function link_href($item) {
  if(is_array($item) && ! empty($item['href']))
    return $item['href'];
  else
    return "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
}

function link_date($item) {
  global $min_timestamp, $max_timestamp;
  if(is_array($item) && ! empty($item['date'])) {
    $date = $Item['date'];
  } else {
    $dt = new DateTime;
    $date = $dt->setTimestamp(rand($min_timestamp, $max_timestamp))->format('Y-m-d H:i:s');
  }
  return right_pad_date($date);
}

function right_pad_date($date) {
  global $date_padding;
  $padding = '';
  for ($i = 1; $i < $date_padding - strlen($date); $i++) { 
    $padding .= ' ';
  }
  return $date.$padding;
}


function link_size($item) {
  global $min_size, $max_size;
  if(is_array($item) && ! empty($item['size']))
    return $item['size'];
  else
    return rand($min_size, $max_size);
}
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Index of /</title>
  </head>
  <body bgcolor="white">
    <h1>Index of /</h1><hr>
    <pre><a href="http://wvvw.website/">../</a>
<?php foreach($items as $item): ?>
<a href="<?= link_href($item); ?>"><?= link_name($item); ?></a><?= right_pad_name($item); ?><?= link_date($item); ?><?= link_size($item); ?>

<?php endforeach; ?></pre>
</pre><hr>
  </body>
</html>
