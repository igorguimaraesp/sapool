<?php
setlocale(LC_MONETARY, 'pt_BR');

function consulta($tabela, $campo, $id, $conexao){
    $sql = "SELECT * FROM $tabela WHERE id LIKE '$id'";
    $result = mysqli_query($conexao,$sql);
    while ($rowplayers = mysqli_fetch_array($result)) {
        $resultado = $rowplayers[$campo];
    }
    return $resultado;
}

function fotoheader($conexao){
    $id = $_SESSION['usuarioId'];
    $sql = "SELECT * FROM USUARIOS WHERE id LIKE '$id'";
    $result = mysqli_query($conexao, $sql);
    while ($rowusers = mysqli_fetch_array($result)) {
        if (empty($rowusers['foto']))
            echo '<img src="assets/images/user.png" class="img-circle" data-lock-picture="assets/images/user.png" />';
        else
            echo '<img src="uploads/'.$rowusers['foto'].'" class="img-circle" data-lock-picture="assets/images/user.png" />';
    }
}


function fotoperfil($conexao){
    $id = $_SESSION['usuarioId'];
    $sql = "SELECT * FROM USUARIOS WHERE id LIKE '$id'";
    $result = mysqli_query($conexao, $sql);
    while ($rowusers = mysqli_fetch_array($result)) {
        if (empty($rowusers['foto']))
            echo '<img src="assets/images/user.png" style="width: 100%" class="img-circle" data-lock-picture="assets/images/user.png" />';
        else
            echo '<img src="uploads/'.$rowusers['foto'].'" style="width: 100%" class="img-circle" data-lock-picture="assets/images/user.png" />';
    }
}

function contar($tabela, $conexao){
    $cont=0;
    $sql = "SELECT * FROM $tabela";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $cont++;
    }
    return $cont;
}

function select_rotas($conexao){
    $option_full = '';
    $sql = "SELECT * FROM ROTAS WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $option = '<option value="'.$row['id'].'">'.$row['descricao'].'</option>';
        $option_full = $option_full.$option;
    }
    return $option_full;
}

function select_bairros($conexao){
    $option_full = '<option value="0">Vazio</option>';
    $sql = "SELECT * FROM BAIRROS";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $option = '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
        $option_full = $option_full.$option;
    }
    return $option_full;
}

function select_clientes($conexao){
    $option_full = '';
    $sql = "SELECT * FROM CLIENTES WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $option = '<option value="'.$row['id'].'">'.$row['razao'].'</option>';
        $option_full = $option_full.$option;
    }
    return $option_full;
}

function select_veiculos($conexao){
    $option_full = '';
    $sql = "SELECT * FROM VEICULOS WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $option = '<option value="'.$row['id'].'">'.$row['modelo'].'</option>';
        $option_full = $option_full.$option;
    }
    return $option_full;
}

function select_motoristas($conexao){
    $option_full = '';
    $sql = "SELECT * FROM MOTORISTAS WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $option = '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        $option_full = $option_full.$option;
    }
    return $option_full;
}

function select_clientes_rotas($conexao){
    $option_full = '';
    $sql = "SELECT * FROM CLIENTES_ROTAS";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $option = '<option value="'.$row['id'].'">'.consulta('CLIENTES', 'razao', $row['id_clientes'], $conexao).' - '.consulta('ROTAS', 'descricao', $row['id_rotas'], $conexao).'</option>';
        $option_full = $option_full.$option;
    }
    return $option_full;
}

function listar_adms($conexao){
    $sql = "SELECT * FROM USUARIOS";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        echo'
            <tr class="gradeA">
                <td>' . $row['name'] . '</td>
                <td>' . $row['username'] . '</td>
                <td><a href="" data-toggle="modal" data-target="#modal'.$row['id'].'"><i class="fa fa-trash-o"></i> Remover</a></td>
            </tr>
            '.modal($row['id'],'Remover Administrador', 'Tem certeza que deseja remover permanentemente o Administrador <b>'.$row['name'].'</b>?').'
            ';
    }
}

function listar_clientes($conexao){
    $sql = "SELECT * FROM CLIENTES WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        echo'
            <tr class="gradeA">
                <td>' . $row['nome'] . '</td>
                <td>' . $row['razao'] . '</td>
                <td>' . $row['tipo'] . '</td>
                <td><a href="" data-toggle="modal" data-target="#modal'.$row['id'].'"><i class="fa fa-trash-o"></i> Remover</a></td>
            </tr>
            '.modal($row['id'],'Remover Cliente', 'Tem certeza que deseja remover permanentemente o Cliente <b>'.$row['nome'].'</b>?').'
            ';
    }
}

function listar_veiculos($conexao){
    $sql = "SELECT * FROM VEICULOS WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        echo'
            <tr class="gradeA">
                <td>' . $row['tipo'] . '</td>
                <td>' . $row['modelo'] . '</td>
                <td>' . $row['fabricante'] . '</td>
                <td><a href="" data-toggle="modal" data-target="#modal'.$row['id'].'"><i class="fa fa-trash-o"></i> Remover</a></td>
            </tr>
            '.modal($row['id'],'Remover Veículo', 'Tem certeza que deseja remover permanentemente o Veículo <b>'.$row['modelo'].'</b>?').'
            ';
    }
}

function listar_motoristas($conexao){
    $sql = "SELECT * FROM MOTORISTAS WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        echo'
            <tr class="gradeA">
                <td>' . $row['name'] . '</td>
                <td>' . $row['tipo'] . '</td>
                <td>' . $row['cpf'] . '</td>
                <td>' . $row['endereco'] . '</td>
                <td>' . $row['municipio'] . '</td>
                <td>' . $row['bairro'] . '</td>
                <td><a href="" data-toggle="modal" data-target="#modal'.$row['id'].'"><i class="fa fa-trash-o"></i> Remover</a></td>
            </tr>
            '.modal($row['id'],'Remover Motorista', 'Tem certeza que deseja remover permanentemente o Motorista <b>'.$row['name'].'</b>?').'
            ';
    }
}

function listar_rotas($conexao){
    $sql = "SELECT * FROM ROTAS WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        echo'
            <tr class="gradeA">
                <td>' . $row['descricao'] . '</td>
                <td>' . money_format('%.2n',$row['valor_ida']) . '</td>
                <td>' . money_format('%.2n',$row['valor_volta']) . '</td>
                <td>' . $row['tipo'] . '</td>
                <td><a href="" data-toggle="modal" data-target="#modal'.$row['id'].'"><i class="fa fa-trash-o"></i> Remover</a></td>
            </tr>
            '.modal($row['id'],'Remover Rota', 'Tem certeza que deseja remover permanentemente a Rota <b>'.$row['descricao'].'</b>?').'
            ';
    }
}

function listar_bairros($conexao){
    $sql = "SELECT * FROM BAIRROS";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        if($row['id_bairros'] == 0) {
            $bairro = 'Vazio';
        }else{
            $bairro = consulta('BAIRROS', 'nome', $row['id_bairros'], $conexao);
        }
        echo'
            <tr class="gradeA">
                <td>' . $row['nome'] . '</td>
                <td>' . consulta('ROTAS', 'descricao', $row['id_rotas'], $conexao) . '</td>
                <td>' . $bairro . '</td>
                <td><a href="" data-toggle="modal" data-target="#modal'.$row['id'].'"><i class="fa fa-trash-o"></i> Remover</a></td>
            </tr>
            '.modal($row['id'],'Remover Rota', 'Tem certeza que deseja remover permanentemente o Bairro <b>'.$row['descricao'].'</b>?').'
            ';
    }
}

function listar_clientes_rotas($conexao){
    $sql = "SELECT * FROM CLIENTES_ROTAS";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        echo'
            <tr class="gradeA">
                <td>' . consulta('CLIENTES', 'nome', $row['id_clientes'], $conexao) . '</td>
                <td>' . consulta('ROTAS', 'descricao', $row['id_rotas'], $conexao) . '</td>
                <td><a href="" data-toggle="modal" data-target="#modal'.$row['id'].'"><i class="fa fa-trash-o"></i> Remover</a></td>
            </tr>
            '.modal($row['id'],'Remover Rota', 'Tem certeza que deseja remover permanentemente a Rota <b>'.$row['descricao'].'</b>?').'
            ';
    }
}

function listar_rotatividade($conexao){
    $sql = "SELECT * FROM ROTATIVIDADE WHERE status=1";
    $result = mysqli_query($conexao,$sql);
    while ($row = mysqli_fetch_array($result)) {
        $cliente = consulta('CLIENTES', 'razao', consulta('CLIENTES_ROTAS', 'id_clientes', $row['id_clientes_rotas'], $conexao), $conexao);
        $rota = consulta('ROTAS', 'descricao', consulta('CLIENTES_ROTAS', 'id_rotas', $row['id_clientes_rotas'], $conexao), $conexao);
        $valor_ida = consulta('ROTAS', 'valor_ida', consulta('CLIENTES_ROTAS', 'id_rotas', $row['id_clientes_rotas'], $conexao), $conexao);
        $valor_volta = consulta('ROTAS', 'valor_volta', consulta('CLIENTES_ROTAS', 'id_rotas', $row['id_clientes_rotas'], $conexao), $conexao);
        $valor = $valor_ida + $valor_volta;
        if($row['reserva'] == 1){
            $valor = $valor + 150;
            $reserva = 'Sim';
        }else{
            $reserva = 'Não';
        }
        echo'
            <tr class="gradeA">
                <td>' . consulta('VEICULOS', 'modelo', $row['id_veiculos'], $conexao) . '</td>
                <td>' . consulta('MOTORISTAS', 'name', $row['id_motoristas'], $conexao) . '</td>
                <td>' . $cliente . '</td>
                <td>' . $rota . '</td>
                <td>' . money_format('%.2n',$valor) . '</td>
                <td>' . $row['tipo'] . '</td>
                <td>' . $reserva . '</td>
                <td><a href="db/rotatividade-add?reserva=1&id='.$row['id'].'"><i class="fa fa-truck"></i> Reserva</a> | <a href="" data-toggle="modal" data-target="#modal'.$row['id'].'"><i class="fa fa-trash-o"></i> Remover</a></td>
            </tr>
            '.modal($row['id'],'Remover Cliente', 'Tem certeza que deseja remover permanentemente o Cliente <b>'.$row['nome'].'</b>?').'
            ';
    }
}

?>