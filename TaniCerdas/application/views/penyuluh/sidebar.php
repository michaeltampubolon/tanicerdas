<div class="span2">    
    <style>.nav-list > li > a { font-size: 11px; }</style>
    <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
            <li class="nav-header">USERS</li>
            <li><a href="<?php echo site_url('penyuluh/petani_edit/'.$this->session->userdata('cibb_user_id')); ?>">My Profile</a></li>
            <li><a href="<?php echo site_url('penyuluh/petani_view'); ?>">View All</a></li>
            <li class="divider"></li>
            <li class="nav-header">ROLES</li>
            <li><a href="<?php echo site_url('penyuluh/role_create'); ?>">Crete New Role</a></li>
            <li><a href="<?php echo site_url('penyuluh/role_view'); ?>">View All</a></li>
            <li class="nav-header">THREAD</li>
            <li><a href="<?php echo site_url('penyuluh/category_create'); ?>">Kategori Baru</a></li>
            <li><a href="<?php echo site_url('penyuluh/category_view'); ?>">Semua Kategori</a></li>
            <li><a href="<?php echo site_url('penyuluh/thread_view'); ?>">Semua Forum</a></li>
        </ul>
    </div>
</div>