<?php include_once 'includes/header.php'; ?>
              <ul id="topics">
                <?php if($topics) : ?>
                  <?php foreach ($topics as $topic) : ?>
                    <li class="topic">
                      <div class="row">
                        <div class="col-md-2">
                          <img class="avatar pull-left" src="<?=BASE_URL ?>/images/avatars/<?=$topic->avatar?>"/>
                        </div>
                        <div class="col-md-10">
                          <div class="topic-content pull-right">
                            <h3><a href="topic.php?t=<?=$topic->id?>"><?=$topic->title?></a></h3>
                            <div class="topic-info">
                              <a href="category.php?id=<?= urlformat($topic->cat_id)?>"><?=$topic->name?></a> >> <a href="topics.php?uid=<?= urlformat($topic->user_id);?>"><?=$topic->username?></a> >> <b>Posted on:</b> <?=dateFormat($topic->create_date)?>
                              <span class="badge pull-right"><?= replycount($topic->id) ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                <?php endforeach; ?>
              </ul>
            <?php else : ?>
              <p>There's no topics to been shown</p>
            <?php endif; ?>
              <h3>Forum Statistics</h3>
              <ul>
                <li>Total Number of Users: <strong><?=$unum?></strong></li>
                <li>Total Number of Topics: <strong><?=$tnum?></strong></li>
                <li>Total Number of Categories: <strong><?=$cnum?></strong></li>
              </ul>
<?php include_once 'includes/footer.php'; ?>
