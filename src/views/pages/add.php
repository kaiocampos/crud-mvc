<?php $render('header'); ?>


<a href="<?=$base?>">Voltar</a>

<h1>Adicionando novo usuário</h1>

<form action="<?=$base?>novo" method="post">

<label for="">
    Nome: <br>
    <input type="text" name="name"> <br><br>
</label>
<label for="">
    E-mail: <br>
    <input type="email" name="email"> <br><br>
</label>

<input type="submit" value="Cadastrar">
</form>

<?php $render('footer'); ?>