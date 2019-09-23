
<div class="user index large-12 medium-12 columns content">
<h3><?php echo 'Usuários'; ?></h3>
<table>
<thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
</thead>
<tbody>
    <?php foreach($usuarios as $usuario):?>
    <tr>
        <td><?php echo $usuario->id;?></td>  
        <td><?php echo $usuario->name;?></td> 
        <td><?php echo $usuario->email;?></td> 
        <td>
            <?php  
            echo $this->Html->link(('Ver '), ['action' => 'view ', $usuario->id]);
            echo $this->Html->link(('Editar '), ['action' => 'edit ', $usuario->id]);
            echo $this->Form->postLink(('Apagar '), ['action' => 'delete ', $usuario->id], ['confirm' => 'Deseja Apagar o usuario', $usuario->id ]);
            ?>
        </td>  
    </tr>
<?php endforeach; ?>
</tbody>
<?php echo  $this->Html->link(('Criar Usuário'), ['controller' => 'users', 'action'=>'add']);?>
</table>
    <div class="paginator">
        <ul class="pagination">
        <?php echo $this->Paginator->first('<< ' .__('Primeira')); ?>
        <?php echo $this->Paginator->prev('< ' .__('Anterior')); ?> 
        <?php echo $this->Paginator->numbers(); ?>
        <?php echo $this->Paginator->next(__('Próxima') .' >'); ?>
        <?php echo $this->Paginator->last(__('Ultima') .' >>'); ?>
        </ul>
        <p><?php echo $this->Paginator->counter(['format' => _('Pagina {{page}} de {{pages}}, mostrado {{current}} registros(s) do total de {{count}}')]);  ?>
        </p><br><br>
    </div>
    <?php echo  $this->Html->link(('Cadastrar'), ['controller' => 'users', 'action'=>'add']);?>
</div>