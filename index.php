<?php
    if (isset($_GET['auto'])) {
      if ($_GET['auto'] == 1) {
        autopost();
      }
    }
    else {
      echo "?auto=1&link=https://viblo.asia/p/cac-phim-tat-co-ban-trong-lap-trinh-android-1Je5Ej1LKnL";
    }
    function autopost()
    {
      $data = array(
          'access_token' => 'EAALzDmXb5V0BAMasbxZAR1SSqTUcw4nAr9JZCfXxTfwq7zAcrJmLFfFSFiTanVc24VjNveSkjZBoREZB0lQbraQKEOLojyMOkCtVxCJtV9eyB0AtQyZCGadjciThAnbFafHNe8odiYpPDeMY9eTOJ9KUb5mEAwF0JFutZBbxlY9YD9LzIJl02HbUwc4RJovwwZD',
          'link' => $_GET['link'],//https://nghiafashion.000webhostapp.com/
          // 'message' => 'Day la message',
          // 'picture' => 'https://external.fdad1-1.fna.fbcdn.net/safe_image.php?d=AQBkuxEmSPSHweE1&w=540&h=282&url=http%3A%2F%2Fdaotao.sict.udn.vn%2Fimages%2Fthongbao.jpg&cfs=1&upscale=1&fallback=news_d_placeholder_publisher&_nc_hash=AQDmAcx1QhV1kARu',
          // 'name' => 'Day la name',
          // 'description' => 'Day la description'
      );

      $payload = json_encode($data);

      $ch = curl_init('https://graph.facebook.com/v5.0/109789497080090/feed');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLINFO_HEADER_OUT, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

      // Set HTTP Header for POST request
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($payload))
      );

      $result = curl_exec($ch);

      curl_close($ch);

      echo ('Xong');
    }
  ?>
