
<?php 

function vape(){
    escreveProduto("vape","Vape Gradiente Ciano e Laranja","R$ 120,00","laranjaeCiano.jpg");
    escreveProduto("vape","Vape Macaco Zica","R$ 140,00","macaco.jpg");
    escreveProduto("vape","Vape Vista ao mar","R$ 150,00","vistaMar.jpg");
    escreveProduto("vape","Vape Mar Vermelho","R$ 170,00","marVermelho.jpg");
    escreveProduto("vape","Vape Vermelho","R$ 100,00","vermelhov2.jpg");
    escreveProduto("vape","Vape Pod Bolinha","R$ 90,00","pod.jpg");
    escreveProduto("vape","Vape Artico","R$ 100,00","artico.png");
    escreveProduto("vape","Vape Aple Mix","R$ 110,00","apleMix.jpg");
    escreveProduto("vape","Vape Bronze","R$ 115,00","kit-vaporesso-luxe-2-bronze-coral.jpg");
    escreveProduto("vape","Vape Black Sheep","R$ 90,00","black.png");
}
function esse(){
    escreveProduto("esse","Essência Suvertuva","R$ 12,00","Sovertuva.jpg");
    escreveProduto("esse","Essência Laranjola","R$ 14,00","laranja.jpg");
    escreveProduto("esse","Essência My Apricot","R$ 15,00","APRICOT.jpg");
    escreveProduto("esse","Essência Happy Berry","R$ 17,00","happy.jpg");
    escreveProduto("esse","Essêcia hermanos","R$ 10,00","hermanos.jpg");
    escreveProduto("esse","Essêcia Tamo Junto","R$ 10,00","tamojunto.jpg");
    escreveProduto("esse","Essêcia Banana","R$ 10,00","BANANA.jpg");
    escreveProduto("esse","Essêcia Mel","R$ 10,00","mel.jpg");
   }
function abafa(){
    escreveProduto("abafa","Abafador Amarelo","R$ 90,00","abafaAma.png");
    escreveProduto("abafa","Abafador Roxo","R$ 90,00","abafaRox.png");
    escreveProduto("abafa","Abafador Vermelo","R$ 90,00","abafaVer.png");
    escreveProduto("abafa","Abafador ciano","R$ 90,00","abafacia.png");
    escreveProduto("abafa","Abafador Azul","R$ 100,00","abafaAzu.png");
    escreveProduto("abafa","Abafador Star","R$ 100,00","abafastar.png");
    escreveProduto("abafa","Abafador Rosa","R$ 100,00","abafaRos.png");
     }
function narg(){
    escreveProduto("narg","Narguile Jack Daniels","R$ 270,00","jack.png");
    escreveProduto("narg","Narguile Trovão","R$ 290,00","rela.png");
    escreveProduto("narg","Narguile Roxo","R$ 190,00","rox.png");
    escreveProduto("narg","Narguile Roxo Versão 2","R$ 290,00","rox2.png");
    escreveProduto("narg","Narguile Branco com detalhe rosa","R$ 300,00","bran.png");
    escreveProduto("narg","Narguile Narguile Vermelho","R$ 390,00","ver.png");
    escreveProduto("narg","Narguile Rosa com Branco","R$ 90,00","ros.png");
}


function escreveProduto($categoria, $nome, $preco, $img){
    echo('
    <div class="col-md-4 padding_leri">
        <div class="vape_box" id="'.$categoria.'" name="'.$categoria.'">
            <a href="coki.php?categoria='.$categoria.'">
            <figure ><img src="assets/img/'.$img.'" alt="#" /></figure>
            <h3>'.$nome.'<br><br>'.$preco.'</h3>
            </a>
        </div>
    </div>
    ');
}
?>

