<nav class="navbar navbar-dark bg-primary justify-content-between text-navbar">
  <div>
    <a class="navbar-brand text-navbar"> My Blog </a>
    <span class="text-navbar"> 
      <?= $this->session->userdata('username'); ?> 
    </span>
  </div>

  <div class="mr-4">
    <?php if($this->session->userdata('username')) : ?>
      <a href="<?= base_url() ?>/home/logout" class="text-navbar"> Logout </a>
    <?php endif; ?>
  </div>
</nav>