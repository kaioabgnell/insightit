Nome: Kaio Gomes Andrade Santos
Data: 19/11/2021

1. 
Resposta: c) $_SERVER

2. 
Resposta: c) $cars = array("Volvo", "BMW", "Toyota");

3. 
Resposta: b) /phptutor/index.php

4. 
Resposta: a) implicitly

5. 
Resposta: a) son

6. 
Resposta: c) Um hacker pode fazer um upload de um arquivo PHP usando este comando.

7. 
Resposta: d) Serialization creates multiple chains of objects based on integer values

8. 
Resposta

<?php

    $begin = new DateTime( "2021-11-19" );
    $end   = new DateTime( "2021-11-30" );

    for($i = $begin; $i <= $end; $i->modify('+1 day')){
        echo $i->format("d/m/Y") . "<br>";
    }

?>

9. 
Resposta: 
a. Qual sistema operacional você escolheria? Por que?
 - Linux (e outros sistemas baseados em Unix), os riscos de segurança serão menores, no Linux, processos são executados de tal forma que não há a necessidade de reiniciar o dispositivo após um update ou a instalação de um programa.
b. Qual versão do PHP você daria como sugestão? Por que?
 - Estavel, melhor compatibilidade com os frameworks
c. Qual biblioteca é necessária para você montar PHP conversando com PostgreSQL
 - biblioteca ADODB
d. Defenda o uso de PostgreSQL em relação ao MySQL
- suporta tamanhos ilimitados de linhas, bancos de dados e tabelas (até 16TB), possui mais tipos de dados e conta com um bom mecanismo de FAILSAVE (Segurança contra falhas, por exemplo no desligamento repentino do sistema).
e. Qual framework você sugere para uso? Por que?
Laravel com Angular, O Laravel é um framework de desenvolvimento rápido para PHP, livre e de código aberto. Já existem varios pacotes desenvolvidos e testados para implementações no sistemas. Paineis administrativos, login, checkout, e varios outros.


f. Como você faria a integração com o PagSeguro? Explique ou monte um diagrama da comunicação entre a loja e o PagSeguro?
Primeiro passo é sempre verificar a documentação ao iniciar o desenvolvimento. 
Então: 
1passo: https://dev.pagseguro.uol.com.br/
2passo: Criar as chaves, aplicativos, tokens (sandbox e produção)
3passo: Criar a chamada do e-commerce -> pagSeguro
4passo: Envio dos parametros
5passo: Tratar erros (campos obrigatorios)
6passo: Buscar o retorno do pagamento (response)
7passo: Apresentar no frontend o retorno (aprovado, negado, codigo de segurança errado ...)
8passo: Continuar com o fluxo web.


g. O que você sugere como segurança? A sua resposta será avaliada pela completude.
- Utilizar sempre versões atualizadas de apis, realizar testes de vulnerabilidades, implementar a cloudflare no servidor, ter um servidor dedicado, instalar certificado SSL, checkout transparente.


10. 

<?php 

echo '<h1>New Users</h1>';
$sql = "SELECT * FROM users ORDER BY date_registered";
$result = mysql_query($sql) or die(mysql_error());

// Colocaria uma condição caso o $result fosse NULL; E um alerla tipo "nenhum usuario encontrado";
// Colocaria somente o username e date_registered no select, para melhorar a performace, então ficaria - SELECT username,date_registered FROM users ORDER BY date_registered

echo '<table class="my-table-class">';
while ($row = mysql_fetch_assoc($result)){
    echo '<tr><td>' . $row['username'] . '</td><td>' . $row['date_registered'] . '</td></tr>';
}

echo '</table>';
function random_custom_function($var)
{
    $var = $var + 1;
    // mudaria para -> "<span style='font-weight:bold;'>{$var}</span>";
    return '<span style="font-weight:bold;">' . $var . '</span>';
}

$sql = "SELECT * FROM table WHERE column = 'test'";
$result = mysql_query($sql) or die(mysql_error());

echo '<div id="test">';
$i = 0;
while ($row = mysql_fetch_assoc($result))
{
    if ($row['type'] == 3)
    {
        echo '<div style="margin-bottom:20px;">' . random_custom_function($row['val']) . '</div>';
        $i++;
    }else {
        echo '<div style="margin-bottom:20px;">' . $row['val'] . '</div>';
    }
}

if ($i == 0){
    echo '<table>';
    echo '<tr><td>Found none!</td></tr>';
    echo '</table>';
}
// fechar a DIV </div>
?>


11. Resposta e) João e José viajaram, ou ambos não viajaram.

12. Resposta d) André estiver na frente de Carlos.

13. Resposta e) Soluçar.

14. Resposta d) Se nada deu errado, então alguém não compareceu.

15. Resposta e) Seu autor tem pelo menos um filho do sexo masculino.



