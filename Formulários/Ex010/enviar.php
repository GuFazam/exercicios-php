<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $numeroWhatsapp = "+5519989968795";
    $urlWhatsapp = "https://api.whatsapp.com/send?phone=" . $numeroWhatsapp . "&text=Nome: " . urlencode($nome) . "%0AE-mail: " . urlencode($email) . "%0AMensagem: " . urlencode($mensagem);

    header("Location: " . $urlWhatsapp);
    exit;
}
    ?>