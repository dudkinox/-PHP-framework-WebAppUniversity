<?php
// ส่วนแจ้งเตือนต่างๆ
include 'component/content/Alert.component.php';
?>
<!-- import -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- ส่วน header -->
<?php include 'component/content/Header.component.php'; ?>

<div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <?php include 'component/content/Status.component.php'; ?>
        <?php include 'component/content/Content.component.php'; ?>
      </div>
    </div>
  </section>
</div>