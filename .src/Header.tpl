@($db = null) <?php
 
 /** @var glx\core\I\Node $this */
 /** @var glx\DB\Connection $db */
 $db = $this->DB;
 $user = $db->from('auth.users')->where('id', 1)->select('fullname', 'login')->one();
echo $this->contacts->test();
 ?>
<? \glx\Context::log()->debug(\glx\Context::locale()->currency('USD')->format(120971.43)) ?>
<? \glx\Context::log()->debug((string)\glx\Context::http()->request()->uri()->query()->test) ?>
<?php
$new = new \glx\HTTP\URI(\glx\Context::http()->request()->uri());
$session = \glx\Context::http()->session('test');
$session->test++;
$test = $session->test;
if($test === 65)
  $session->refresh();
\glx\Context::log()->debug($test);
?><?= $this->external ?>

<span>user:</span><span><?= $user->fullname ?> (<?= $user->login ?>)</span>
