<div class="card">
    <p class="text-center">
        Olá seja-bem vindo: <?=$_SESSION["feira"]["nome"]?>
    </p>
</div>
<div class="card">
    <div class="card-header">
        <h1>Atalhos</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-3">
                <a href="categoria/cadastro" title="Categorias" class="btn btn-outline-success w-100">
                    <i class="fas fa-tags fa-2x"></i>
                    <br>
                    Categorias
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="cadastro/produto" title="Produtos" class="btn btn-outline-success w-100">
                    <i class="fas fa-gift fa-2x"></i>
                    <br>
                    Produtos
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="cadastro/usuario" title="Usuários" class="btn btn-outline-success w-100">
                    <i class="fas fa-user fa-2x"></i>
                    <br>
                    Usuário
                </a>
            </div>
            <div class="col-12 col-md-3">
                <a href="index/sair" title="Sair" class="btn btn-outline-success w-100">
                    <i class="fas fa-power-off fa-2x"></i>
                    <br>
                    Sair
                </a>
            </div>
        </div>
    </div>
</div>