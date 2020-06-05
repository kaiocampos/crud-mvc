<?php $render('header'); ?>


<a href="<?=$base?>">Voltar</a>

<h1>Editando o usuário</h1>

<form action="<?=$base?>usuario/<?=$usuario['id_usuario']?>/editar" method="post">

<label for="">
    Nome: <br>
    <input type="text" name="name" value="<?=$usuario['nome'];?>"> <br><br>
</label>
<label for="">
    E-mail: <br>
    <input type="email" name="email" value="<?=$usuario['email'];?>"> <br><br>
</label>

<input type="submit" value="Editar">
</form>

<?php $render('footer'); ?>