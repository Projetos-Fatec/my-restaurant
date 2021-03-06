<?php require_once "header.php";?>
    
    <main class="py-5">
        <div class="container">
            <a href="principal.php" class="btn btn-outline-danger mb-5"><i class="fas fa-arrow-left mr-2" style="font-size: 10pt;"></i>Voltar</a>
            <h1>Anotar Pedido</h1>
            <hr>

            <form action="inserirPedido.php" method="POST">
                <div class="form-group">
                    <label for="numMesa">Selecione o número da mesa</label>
                    <select class="form-control" name="numMesa" id="numMesa">
                       <option seleted value="0">Selecione o Número da mesa</option>
                       <?php
                       
                       require_once "../Models/DeskDAO.php";

                       $deskDAO = new deskDAO();
                       $retDesk = $deskDAO->allDesks();
                       
                        var_dump($retDesk);

                       foreach ($retDesk as $key => $desk) {
                        echo "<option seleted value='$desk->idDesk'>$desk->descriptive</option>";
                       }
                       
                       ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="order-name">Nome</label>
                    <input type="text" class="form-control" name="orderName" id="order-name" required>
                </div>
                <input type="submit" class="btn btn-danger btn-b" value="Continuar">
            </form>
        </div>
    </main>

    <?php require_once "footer.php";?>