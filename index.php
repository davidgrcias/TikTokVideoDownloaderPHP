<?php require 'tiktokdownloader.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TikTok Downloader</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="tiktok-url" value="">
      <button type="submit" name="button">Convert</button>
    </form>
    <?php
    if(isset($_POST["tiktok-url"])){
      $check = check($_POST['tiktok-url']);
      $contentURL = contentURL($check[1]);

      if($store_locally){
        ?>
        <script type="text/javascript">
          $(document).ready(function(){
            $('body').append("<a id = 'wmarked_link'></a>");
            $('#wmarked_link').text("Loading...");
            $.get('index.php?url=<?php echo $contentURL; ?>').done(function(data){
              $('#wmarked_link').attr('href', data);
              $('#wmarked_link').attr('download', data);
              $('#wmarked_link').text("Download");
            })
          })
        </script>
        <?php
      }
    }
    ?>
  </body>
</html>
