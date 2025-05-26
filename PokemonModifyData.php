<h2 class="my-3">Pokemon adat módositas</h2>
<form method="POST" action="?todo=add">
  <div class="mb-3">
    <label for="name" class="form-label">Név</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">típus</label>
    <input type="text" class="form-control" id="type" name="type">
  </div>
  <div class="mb-3">
    <label for="skill1" class="form-label">skill 1</label>
    <input type="text" class="form-control" id="skill1" name="skill1">
  </div>
  <div class="mb-3">
    <label for="skill2" class="form-label">skill 2</label>
    <input type="text" class="form-control" id="skill2" name="skill2">
  </div>
  <div class="mb-3">
    <label for="skill3" class="form-label">skill 3</label>
    <input type="text" class="form-control" id="skill3" name="skill3">
  </div>
  <div class="mb-3">
    <label for="skill4" class="form-label">skill 4</label>
    <input type="text" class="form-control" id="skill4" name="skill4">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">nem</label>
    <input type="gender" class="form-control" id="gender" name="gender">
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">kép</label>
    <input type="file" name="img" id="img" accept="image/png, image/gif, image/jpeg" />
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="completed" name="completed">
    <label class="form-check-label" for="completed">Kész</label>
  </div>
  <button type="submit" class="btn btn-primary">Felvesz</button>
</form>