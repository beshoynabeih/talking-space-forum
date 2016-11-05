<?php include('includes/header.php');?>
<form role="form" method="POST" action="create.php">
  <div class="form-group">
    <label>Topic Title*</label>
    <input type="text" class="form-control" name="title" placeholder="Topic Title">
  </div>
  <div class="form-group">
    <label>Categotry*</label>
    <select class="form-control" name="category">
      <?php $cats = getcategories(); ?>
      <?php foreach ($cats as $cat) : ?>
        <option value="<?=$cat->id?>"><?=$cat->name?></option>
      <?php endforeach; ?>

    </select>
  </div>
  <div class="form-group">
    <label>Topic Body*</label>
    <textarea id="about" rows="6" cols="80" class="form-control" name="body" placeholder="Topic Body">

    </textarea><script>CKEDITOR.replace('body');</script>
  </div>
  <input name="doreply" type="submit" class="btn btn-default" value="Reply"/>
</form>
<?php include('includes/footer.php');?>
