<?php

require_once '../interfaces/IFachada.php';
require_once '../daos/UsuarioDAO.php';
require_once '../daos/ClienteDAO.php';
require_once '../daos/SolicitanteDAO.php';
require_once '../daos/MoedaDAO.php';
require_once '../daos/CategoriaDAO.php';
require_once '../daos/SubCategoriaDAO.php';
require_once '../daos/PagamentoDAO.php';
require_once '../daos/ItemDAO.php';
require_once '../daos/TemplateDAO.php';
require_once '../daos/EquipeDAO.php';
require_once '../strategies/verificarNome.php';
require_once '../strategies/verificarDescricao.php';

class fachada implements IFachada {

    private $mapObject;

    function __construct() {
        //Lista de regras para CREATE da classe Usuario
        $usuarioCreate[] = new verificarNome();

        //Lista de regras para CREATE da classe Item
        $itemCreate[] = new verificarNome();
        $itemCreate[] = new verificarDescricao();

        //Mapa de comandos do objeto Usuario
        $mapUsuario["CREATE"] = $usuarioCreate;

        //Mapa de comandos do objeto Item
        $mapItem["CREATE"] = $itemCreate;

        //Mapa Geral de Objetos
        $this->mapObject[get_class(new Usuario())] = $mapUsuario;
        $this->mapObject[get_class(new Item())] = $mapItem;
    }

    public function create($object) {
        $ret[] = $this->executeRules("CREATE", $object);
        if (empty($ret[0])) {
            $ret[] = $this->instanceDAO($object)->create($object);
        }
        return $ret;
    }

    public function delete($object) {
        $ret[] = $this->executeRules("DELETE", $object);
        $ret[] = $this->instanceDAO($object)->delete($object);
        return $ret;
    }

    public function read($object) {
        $ret[] = $this->executeRules("READ", $object);
        $ret[] = $this->instanceDAO($object)->read($object);
        return $ret;
    }

    public function update($object) {
        $ret[] = $this->executeRules("UPDATE", $object);
        $ret[] = $this->instanceDAO($object)->upDate($object);
        return $ret;
    }

    private function executeRules($command, $object) {
        $verif = null;
        error_reporting(0); //não mostra erros para o usuário
        try {//Verifica a existência de regras de negócio para o objeto em $object
            if (!$m = $this->mapObject[get_class($object)]) {
                throw new Exception; //lança exceção se não houver
            }
            if (!$r = $m[$command]) {//Verifica a existência de regras para o comando em $command
                throw new Exception; //lança exceção se não houver
            }
            //Executa as regras de negócio para o objeto $object e o comando $command
            foreach ($r as $rules) {
                if (!empty($verif)) {
                    $verif .= '?' . $rules->verificar($object);
                } else {
                    $verif = $rules->verificar($object);
                }
            }
            return $verif;
        } catch (Exception $ex) {
            return null;
        }
    }

    private function instanceDAO($object) {
        $mapDAO[get_class(new Usuario())] = new UsuarioDAO();
        $mapDAO[get_class(new Cliente())] = new ClienteDAO();
        $mapDAO[get_class(new Solicitante())] = new SolicitanteDAO();
        $mapDAO[get_class(new Moeda())] = new MoedaDAO();
        $mapDAO[get_class(new Categoria())] = new CategoriaDAO();
        $mapDAO[get_class(new Subcategoria())] = new SubCategoriaDAO();
        $mapDAO[get_class(new Pagamento())] = new PagamentoDAO();
        $mapDAO[get_class(new Item())] = new ItemDAO();
        $mapDAO[get_class(new Template())] = new TemplateDAO();
        $mapDAO[get_class(new Equipe())] = new EquipeDAO();

        return $mapDAO[get_class($object)];
    }

}
