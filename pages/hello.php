<?php $name = $request->query->get('name', 'Luca');?>
Hello <?= htmlspecialchars($name, ENT_QUOTES,'UTF-8') ?>