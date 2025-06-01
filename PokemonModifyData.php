
<?php
    $id = $_GET['M_id'] ?? '';
    $name = $_GET['M_name'] ?? '';
    $type = $_GET['M_type'] ?? '';
    $skill1 = $_GET['M_skill1'] ?? '';
    $skill2 = $_GET['M_skill2'] ?? '';
    $skill3 = $_GET['M_skill3'] ?? '';
    $skill4 = $_GET['M_skill4'] ?? '';
    $gender = $_GET['M_gender'] ?? '';
?>
<div class="bg_size">
  <h2 class="my-3" style="text-align: center;font-weight: bold;"><?php 
  if ($id != '') {
    echo "Pokemon módosítása";
  }
  else {
      echo  "Pokemon felvétele";
    }?></h2>
    <form method="POST" action=<?php if ($id != '') {
      echo "?todo=modify";
    }
    else{
      echo "?todo=add";
    }?> class="form" enctype="multipart/form-data">
      <div style="visibility: hidden;position:absolute;">
        <input type="text" name="id" class="form-control size" value='<?php echo $id ?>' required>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Név</label>
        <input type="text" class="form-control size" id="name" name="name" value='<?php echo $name ?>' required>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">típus</label>
        <input type="text" class="form-control size" id="type" name="type" value='<?php echo $type ?>' required>
      </div>
      <div class="mb-3">
        <label for="skill1" class="form-label">skill 1</label>
        <input type="text" class="form-control size" id="skill1" name="skill1" value='<?php echo $skill1 ?>' required>
      </div>
      <div class="mb-3">
        <label for="skill2" class="form-label">skill 2</label>
        <input type="text" class="form-control size" id="skill2" name="skill2" value='<?php echo $skill2 ?>' required>
      </div>
      <div class="mb-3">
        <label for="skill3" class="form-label">skill 3</label>
        <input type="text" class="form-control size" id="skill3" name="skill3" value='<?php echo $skill3 ?>' required>
      </div>
      <div class="mb-3">
        <label for="skill4" class="form-label">skill 4</label>
        <input type="text" class="form-control size" id="skill4" name="skill4" value='<?php echo $skill4 ?>' required>
      </div>
      <div class="mb-3">
          <div class="form-check form-check-inline">
            <label for="male" class="form-check-label">Hím</label>            
            <input type="radio" class="form-check-input" id="male" name="gender" value="0" <?php if ($gender == 0) {
              echo "checked";
            }
            else if ($gender == '') {
              echo "checked";
            } ?>>
          </div>
          <div class="form-check form-check-inline">
            <label for="female" class="form-check-label">Nőstény</label>
            <input type="radio" class="form-check-input" id="female" name="gender" value="1"<?php if ($gender == 1) {
              echo "checked";
            } ?>>
          </div>
          <div class="form-check form-check-inline">
            <label for="unknown" class="form-check-label">Ismeretlen</label>
            <input type="radio" class="form-check-input" id="unknown" name="gender" value="2"<?php if ($gender == 2) {
              echo "checked";
            } ?>>
          </div>
      </div>
      <div class="mb-3" style="margin: auto;">
        <label for="img" class="form-label">kép</label>
        <input type="file" class="size" name="img" id="img" accept="image/png, image/gif, image/jpeg" required/>
      </div>
      <button type="submit" class="btn btn-primary blackShadow">Felvesz</button>
      <a href='index.php'><button type="button" class="btn btn-primary blackShadow" style="margin-left: 25px;">Kilépés</button></a>
    </form>
</div>