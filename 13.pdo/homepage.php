<h1>HOME PAGE</h1>

<form method="get">
  <input type="text" class="date" name="start" value="" placeholder="Start Date" value="<?= isset($_GET['start']) ? $_GET['start'] : '' ?>">
  <input type="text" class="date" name="end" value="" placeholder="End Date" value="<?= isset($_GET['end']) ? $_GET['end'] : '' ?>"><br>
  <input type="text" name="search" placeholder="Search.." value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
  <button type="submit">Search</button>
</form>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
  $( function() {
    $( ".date" ).datepicker({
      dateFormat: 'yy-mm-dd'
    });
  } );
</script>

<?php
  // $lessons = $db -> query('SELECT * FROM lessons')->fetchAll(PDO::FETCH_ASSOC);
  // $lessons = $db -> query('SELECT * FROM lessons WHERE id = 3')->fetch(PDO::FETCH_ASSOC);

  $where = [];

  $sql = 'SELECT lessons.id,
                 lessons.title,
                 lessons.confirmation,
                 GROUP_CONCAT(categories.name) as category_name,
                 GROUP_CONCAT(categories.id) as category_id
          FROM lessons
          INNER JOIN categories
          ON FIND_IN_SET(categories.id, lessons.category_id)';

  if(isset($_GET['search']) && !empty($_GET['search'])){
    $where[] = '(lessons.title LIKE "%' . $_GET['search'] . '%" || lessons.content LIKE "%'. $_GET['search'] .'%")';
  }

  if(isset($_GET['start']) && !empty($_GET['start']) && isset($_GET['end']) && !empty($_GET['end'])){
    $where[] = 'lessons.date BETWEEN "' . $_GET['start'] . ' 00:00:00" AND "' . $_GET['end'] . ' 23:59:59"';
  }

  if(count($where) > 0){
    $sql .= ' WHERE ' . implode(' && ', $where);
  }

  $sql .= ' GROUP BY lessons.id ORDER BY lessons.id DESC';

  $query = $db -> prepare($sql);
  $query -> execute();
  $lessons = $query -> fetchAll(PDO::FETCH_ASSOC);


  /*
  $query = $db -> prepare('SELECT * FROM lessons WHERE id = ?');
  $query -> execute([
    '7'
  ]);
  $lessons = $query -> fetch(PDO::FETCH_ASSOC);
  */


?>

<h3>LESSONS</h3>

<?php if($lessons): ?>
<ul>
  <?php foreach ($lessons as $lesson): ?>
    <li>
      <?= $lesson['title'] ?>
      -
      <?php
        $categoryName = explode(',', $lesson['category_name']);
        $categoryID = explode(',', $lesson['category_id']);

        foreach ($categoryName as $key => $val) {
          echo '<a href="index.php?page=category&id='. $categoryID[$key] .'">'. $val .'</a> ';
        }
       ?>
      <div class="">
        <?php if ($lesson['confirmation'] == 1): ?>
          <a href="index.php?page=read&id=<?= $lesson['id'] ?>">[READ]</a>
        <?php endif; ?>
        <a href="index.php?page=update&id=<?= $lesson['id'] ?>">[UPDATE]</a>
        <a href="index.php?page=delete&id=<?= $lesson['id'] ?>">[DELETE]</a>
      </div>
    </li>
  <?php endforeach; ?>
</ul>
<?php else: ?>
  <?php if (isset($_GET['search'])): ?>
    <h4>Not have searched title</h4>
  <?php else: ?>
    <h4>Nothing Have</h4>
  <?php endif; ?>
<?php endif; ?>
