<?php
	if (session_status() != 2) session_start();
	require_once($_SERVER['DOCUMENT_ROOT'] . "/settings.php");
	require(PATH.'/auth.php');
	$logo_path = 'http://localhost:8888/img/logo.png'; 
?>
<header class="main-header">
    <a href="<?php echo SITE?>">
    	<img src="<?php echo $logo_path ?>" width="153" height="42" alt="Логотип Дела в порядке">
    </a>

    <?php if($logged) : ?>
    <div class="main-header__side">
   	<a class="main-header__side-item button button--plus open-modal" href="/pages/form-task.php">Добавить задачу</a>
	<div class="main-header__side-item user-menu">
	    <div class="user-menu__data">
		<p><?php echo $_SESSION['username'] ?></p>
		<a href="/pages/logout.php">Выйти</a>
	    </div>
	</div>
    </div>
    <?php else : ?>
	<div class="main-header__side">
		<a class="main-header__side-item button button--transparent"  href="/pages/form-authorization.php">Войти</a>
	</div>
    <?php endif ?>
</header>
