      <div class="row">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li<?php echo ($segment == '' ? ' class="active"' : '') ?>><?php echo anchor('dashboard','Dashboard') ?></li>
              <li class="nav-header">Data</li>
              <li<?php echo ($segment == 'pengendara' ? ' class="active"' : '') ?>><?php echo anchor('dashboard/pengendara','Data Pribadi') ?></li>
              <li<?php echo ($segment == 'kendaraan' ? ' class="active"' : '') ?>><?php echo anchor('dashboard/kendaraan','Data Kendaraan') ?></li>
              <li class="nav-header">Pelanggaran</li>
              <li<?php echo ($segment == 'catatan' ? ' class="active"' : '') ?>><?php echo anchor('dashboard/catatan','Catatan Pelanggaran') ?></li>
              <li<?php echo ($segment == 'lapor' ? ' class="active"' : '') ?>><?php echo anchor('dashboard/lapor','Lapor Pelanggaran') ?></li>
            </ul>
          </div><!--/.well -->
        </div>
        <div class="span9">
          <?php echo $content; ?>
        </div>
      </div>