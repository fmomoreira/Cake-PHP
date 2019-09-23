<div class="users view large-12 medium-12 columns content">
<h3><?php echo 'Perfil do Usuário ' . $usuario->name;?></h3>
<table clss="vertical-table">
<tr>
    <th>ID</th>
    <td><?php echo $usuario->id; ?></td>
</tr>
<tr>
    <th>Nome</th>
    <td><?php echo $usuario->name; ?></td>
</tr>
<tr>
    <th>E-MAIL</th>
    <td><?php echo $usuario->email; ?></td>
</tr>
<tr>
    <th>USUARIO</th>
    <td><?php echo $usuario->username; ?></td>
</tr>
<tr>
    <th>DATA CADASTRO</th>
    <td><?php echo $usuario->created; ?></td>
</tr>
<tr>
    <th>ALTERADP</th>
    <td><?php echo $usuario->modified; ?></td>
</tr>
</table>    
<?php echo  $this->Html->link(('Voltar'), ['controller' => 'users', 'action'=>'index']);?>
</div>
