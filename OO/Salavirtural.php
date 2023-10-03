<?php
class SalaVirtual{
    private $nome;
    private $quantidade_aluno;
    private $professor_responsavel;

    public function nomesala($nomesala){
        $this->nome = $nomesala;
    }

    public function alterar_quantidade($quantidade){
        if(is_numeric($quantidade) AND $quantidade >=0){
            $this->quantidade_aluno = $quantidade;
        }
    }

    public function responsavel($prof_responsavel){
        if(is_string($prof_responsavel) AND $prof_responsavel !==NULL){
            $this->professor_responsavel = $prof_responsavel;
        }
    }

    public function mostrar_nome(){
        return $this->nome;
    }

    public function mostrar_quantidade(){
        return $this->quantidade_aluno;
    }

    public function mostrar_professor(){
        return $this->professor_responsavel;
    }
}

$sala01 = new SalaVirtual();
$sala01->nomesala('Desenvolvimento de Web 2');
$sala01->alterar_quantidade(35);
$sala01->responsavel('Orlando');

$sala02 = new SalaVirtual();
$sala02->nomesala('Técnica de Programação');
$sala02->alterar_quantidade(35);
$sala02->responsavel('Jeane');

print('==============================<br>');
print($sala01->mostrar_nome());
echo "<br>";
print($sala01->mostrar_quantidade());
echo "<br>";
print($sala01->mostrar_professor());
echo "<br>";
print('------------------------<br>');
echo $sala02->mostrar_nome();
echo "<br>";
print($sala02->mostrar_quantidade());
echo "<br>";
print($sala02->mostrar_professor());
echo "<br>";
#var_dump($sala01);
echo "<br>";
# var_dump($sala02);

?>