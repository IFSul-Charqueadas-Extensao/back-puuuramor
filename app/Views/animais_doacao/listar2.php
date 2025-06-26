<!-- Modal: Novo Animal -->
<div class="modal fade" id="modal-novo-animal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/doacaodash/cadastrar" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Cadastrar Animal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Espécie</label>
                            <input type="text" class="form-control" name="especie">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Idade</label>
                            <input type="number" class="form-control" name="idade">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Castrado</label>
                            <select class="form-control" name="castrado">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Vacinado</label>
                            <select class="form-control" name="vacinado">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" name="descricao"></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal: Editar Animal -->
<div class="modal fade" id="modal-editar-animal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/doacaodash/editar" method="post" enctype="multipart/form-data">
                <input type="hidden" name="animal_id" id="editar-animal-id">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Animal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" id="editar-animal-nome">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Espécie</label>
                            <input type="text" class="form-control" name="especie" id="editar-animal-especie">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Idade</label>
                            <input type="number" class="form-control" name="idade" id="editar-animal-idade">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Castrado</label>
                            <select class="form-control" name="castrado" id="editar-animal-castrado">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Vacinado</label>
                            <select class="form-control" name="vacinado" id="editar-animal-vacinado">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" name="descricao" id="editar-animal-descricao"></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Foto (nova)</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Listagem de Animais -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h1>Animais para Doação</h1>
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <button class="btn btn-info mb-3" data-toggle="modal" data-target="#modal-novo-animal">
                <i class="fas fa-plus-circle"></i> Novo Animal
            </button>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Espécie</th>
                        <th>Idade</th>
                        <th>Castrado</th>
                        <th>Vacinado</th>
                        <th>Descrição</th>
                        <th>Foto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($animais as $animal): ?>
                        <tr>
                            <td><?= $animal['id'] ?></td>
                            <td><?= $animal['nome'] ?></td>
                            <td><?= $animal['especie'] ?></td>
                            <td><?= $animal['idade'] ?></td>
                            <td><?= $animal['castrado'] ?></td>
                            <td><?= $animal['vacinado'] ?></td>
                            <td><?= $animal['descricao'] ?></td>
                            <td>
                                <?php if (!empty($animal['foto'])): ?>
                                    <img src="<?= base_url('uploads/' . $animal['foto']) ?>" width="80">
                                <?php else: ?>
                                    Sem foto
                                <?php endif; ?>
                            </td>
                            <td>
                                <!-- Botão Editar -->
                                <button
                                    class="btn btn-warning btn-sm"
                                    onclick="editarAnimal(
                                        '<?= $animal['id'] ?>',
                                        '<?= htmlspecialchars($animal['nome'], ENT_QUOTES) ?>',
                                        '<?= htmlspecialchars($animal['especie'], ENT_QUOTES) ?>',
                                        '<?= $animal['idade'] ?>',
                                        '<?= $animal['castrado'] ?>',
                                        '<?= $animal['vacinado'] ?>',
                                        `<?= htmlspecialchars($animal['descricao'], ENT_QUOTES) ?>`
                                    )">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <!-- Botão Excluir -->
                                <a href="/doacaodash/excluir/<?= $animal['id'] ?>" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function editarAnimal(id, nome, especie, idade, castrado, vacinado, descricao) {
        document.getElementById('editar-animal-id').value = id;
        document.getElementById('editar-animal-nome').value = nome;
        document.getElementById('editar-animal-especie').value = especie;
        document.getElementById('editar-animal-idade').value = idade;
        document.getElementById('editar-animal-castrado').value = castrado;
        document.getElementById('editar-animal-vacinado').value = vacinado;
        document.getElementById('editar-animal-descricao').value = descricao;

        $('#modal-editar-animal').modal('show');
    }
</script>