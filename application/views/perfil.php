<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <!-- Inclua os links para o Bootstrap CSS e jQuery (opcional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Perfil do Usuário</h5>
                        <span><p><strong>Saldo:</strong> <?php echo $usuario['saldo']; ?></p></span>
                    </div>
                    <div class="card-body">
                        <p><strong>Nome:</strong> <?php echo $usuario['nome']; ?></p>
                        <p><strong>Email:</strong> <?php echo $usuario['email']; ?></p>
                        <p><strong>Idade:</strong> <?php echo $usuario['idade']; ?></p>
                        <p><strong>Cidade:</strong> <?php echo $usuario['cidade']; ?></p>
                    </div>
                    <div>
                    <!--
                    <p><strong>Fatura Mensal:</strong></p>
                        <input type="text" value="<?php echo $fatura; ?>">
                    -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Inclua os scripts do Bootstrap e jQuery (opcional) no final do documento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Se você quiser usar jQuery com Bootstrap, inclua o jQuery antes do Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</body>
</html>
