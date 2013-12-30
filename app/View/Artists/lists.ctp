<?php
$this->Html->addCrumb('Artists', $this->here);
?>
<h3>Meet the Artists</h3>
<div class="content-container">
    <div class="meet-the-artist">

        <ul class="main-col3">
            <?php foreach ($artists as $artist): ?>
                <?php
                $profile_image_url = '';
                $folder_url = WWW_ROOT . "files/ProfileImages/" . $artist['User']['id'] . "/";
                $http_url = $this->base . "/files/ProfileImages/" . $artist['User']['id'] . "/";
                if (file_exists($folder_url)) {
                    foreach (new DirectoryIterator($folder_url) as $fn) {
                        if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
                            $profile_image_url = $http_url . $fn->getFilename();
                        }
                    }
                }
                ?>
                <li><a href="#"> <img src="<?php echo $profile_image_url; ?>" width="237" height="177" alt="1" /></a>
                    <div class="hide">
                        <h2><?php echo $artist['User']['first_name'] . ' ' . $artist['User']['last_name'] ?></h2>
                        <p><?php echo $this->Text->excerpt($artist['User']['about'], '', '20', '...'); ?></p>
                        <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', $artist['User']['username'])); ?> </span>

                    </div>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>