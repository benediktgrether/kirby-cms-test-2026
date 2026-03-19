<footer class="mt-40">
  <h2>Footer</h2>
  <p class="copyright"><?= $site->copyright() ?></p>
</footer>
<?php if (file_exists(kirby()->root('index') . '/public/assets/js/app.js')): ?>
  <?= js('/public/assets/js/app.js') ?>
<?php else: ?>
  <?= js('/assets/js/app.js') ?>
<?php endif ?>
</body>

</html>