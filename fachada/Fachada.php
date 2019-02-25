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

class fachada implements IFachada {

    private $mapObject;

    function __construct() {
        //Lista de regras para CREATE da classe Usuario
        $usuarioCreate[] = "Regra 1";
        $usuarioCreate[] = "Regra 2";
        $usuarioCreate[] = "Regra 3";

        //Mapa de comandos do objeto Usuario
        $mapUsuario["CREATE"] = $usuarioCreate;
        
        //Mapa Geral de Objetos
        $this->mapObject[get_class(new Usuario())] = $mapUsuario;
    }

    public function create($object) {
        $ret[] = $this->executeRules("CREATE", $object);
        $ret[] = $this->instanceDAO($object)->create($object);
        return $ret;
    }

    public function delete($object) {
        $this->executeRules("DELETE", $object);
    }

    public function read($object) {
        $ret[] = $this->executeRules("READ", $object);
        $ret[] = $this->instanceDAO($object)->read($object);
        return $ret;
    }

    public function update($object) {
        echo 'Update! </br><pre>';
        print_r($object);
        echo '</pre>';
    }

    private function executeRules($command, $object) {
        //error_reporting(0); //não mostra erros para o usuário
        try {//Verifica a existência de regras de negócio para o objeto em $object
            if (!$m = $this->mapObject[get_class($object)]) {
                throw new Exception; //lança exceção se não houver
            }
            if (!$r = $m[$command]) {//Verifica a existência de regras para o comando em $command
                throw new Exception; //lança exceção se não houver
            }
            //Executa as regras de negócio para o objeto $object e o comando $command
            foreach ($r as $rules) {
                $ret[] = $rules;
            }
            return $ret;
        } catch (Exception $ex) {
            return 'Não há regras de negócio para esse comando e objeto!';
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
