<?php class carrinhoController extends Controller{
    public function index(){
        $dados = array();
        
        $c = new Carrinho();
        $dados['carrinho'] = $c->getCarrinho();
        $dados['produtos'] = $c->getProdCarrinho();
        
        $this->loadTemplate("carrinho", $dados);
    }
}