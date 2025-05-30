<div class="bg_size">
  <h2 class="my-3" style="text-align: center;font-weight: bold;">Pokemon felvétele</h2>
    <form method="POST" action="?todo=add" class="form" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="name" class="form-label">Név</label>
        <input type="text" class="form-control size" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">típus</label>
        <input type="text" class="form-control size" id="type" name="type" required>
      </div>
      <div class="mb-3">
        <label for="skill1" class="form-label">skill 1</label>
        <input type="text" class="form-control size" id="skill1" name="skill1" required>
      </div>
      <div class="mb-3">
        <label for="skill2" class="form-label">skill 2</label>
        <input type="text" class="form-control size" id="skill2" name="skill2" required>
      </div>
      <div class="mb-3">
        <label for="skill3" class="form-label">skill 3</label>
        <input type="text" class="form-control size" id="skill3" name="skill3" required>
      </div>
      <div class="mb-3">
        <label for="skill4" class="form-label">skill 4</label>
        <input type="text" class="form-control size" id="skill4" name="skill4" required>
      </div>
      <div class="mb-3">
          <div class="form-check form-check-inline">
            <label for="male" class="form-check-label">Hím</label>            
            <input type="radio" class="form-check-input" id="male" name="gender" value="0" checked>
          </div>
          <div class="form-check form-check-inline">
            <label for="female" class="form-check-label">Nőstény</label>
            <input type="radio" class="form-check-input" id="female" name="gender" value="1">
          </div>
          <div class="form-check form-check-inline">
            <label for="unknown" class="form-check-label">Ismeretlen</label>
            <input type="radio" class="form-check-input" id="unknown" name="gender" value="2">
          </div>
      </div>
      <div class="mb-3" style="margin: auto;">
        <label for="img" class="form-label">kép</label>
        <input type="file" class="size" name="img" id="img" accept="image/png, image/gif, image/jpeg" required/>
      </div>
      <button type="submit" class="btn btn-primary">Felvesz</button>
    </form>
</div>