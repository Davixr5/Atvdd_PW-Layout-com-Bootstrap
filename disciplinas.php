<?php
    include "./cabecalho.php"; 
?>
<br/>
<div class="card">
    <div class="card-header">
        Lista de Disciplinas
    </div>
    <div class="card-body">
        <a href="#" class="btn btn-success">Nova Disciplina</a><br/><br/>
        <input class="form-control" type="text" /><br/>
        <button href="#"class="btn btn-primary">Pesquisar</a>
    </div>
</div>
<tbody>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col1">ID</th>
                <th scope="col2">Nome</th>
                <th scope="col3">Sigla</th>
                <th scope="col4">Apelido</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Administração Geral</td>
                <td></td>
                <td>ADM GERAL</td>
                <td><button type="button" class="btn btn-warning">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Segurança da Informção</td>
                <td></td>
                <td>SEG. DA INFO.</td>
                <td><button type="button" class="btn btn-warning">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Programação Web</td>
                <td></td>
                <td>PROG. WEB</td>
                <td><button type="button" class="btn btn-warning">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Sistemas de Informação</td>
                <td></td>
                <td>P.L</td>
                <td><button type="button" class="btn btn-warning">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Estrutura de Dados</td>
                <td></td>
                <td>E.D</td>
                <td><button type="button" class="btn btn-warning">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Gerência e Projetos</td>
                <td></td>
                <td>G.P</td>
                <td><button type="button" class="btn btn-warning">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
        </tbody>
    </table>
</tbody>
<?php 
    include "./rodape.php"; 
?>