<?php $render('header'); ?>


<a href="<?=$base?>novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario):?>
        <tr>
            <td><?=$usuario['id_usuario'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>usuario/<?=$usuario['id_usuario']?>/editar"> 
                    <img width="20" src="<?=$base;?>/assets/images/document.png" alt="">
                </a>
                <a href="<?=$base;?>usuario/<?=$usuario['id_usuario']?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">   
                    <img width="20" src="<?=$base;?>/assets/images/trash.png" alt="">
                </a>
            </td>
        </tr>
    <?endforeach;?>
</table>

<?php $render('footer'); ?>