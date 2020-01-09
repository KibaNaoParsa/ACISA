<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select($tabela = NULL, $campo = "*", $where = NULL, $order = NULL) {
        $this->db->select($campo);
        if ($where) {
            $this->db->where($where);
        }
        if ($order) {
            $this->db->order_by($order);
        }
        $result = $this->db->get($tabela);
        return $result->result_array();
    }

    public function insere($tabela, $dados) {
        return $this->db->insert($tabela, $dados);
    }

    public function update($tabela, $dados, $where) {
        $this->db->where($where);
        return $this->db->update($tabela, $dados);
    }

    public function delete($tabela, $where) {
        $this->db->where($where);
        return $this->db->delete($tabela);
    }
    
    public function select4imagens($id_evento, $url) {
        $result = $this->db->query("SELECT *,'".$url."' as url FROM imagem WHERE imagem.id_evento_fk = ".$id_evento." LIMIT 4;");
        return $result->result_array();
    }
    
    public function selecetMembrosDaPesquisa($id_pesquisa) {
        $result = $this->db->query("SELECT membro.* FROM membro INNER JOIN membro_has_pesquisa ON membro.id_membro = membro_has_pesquisa.id_membro INNER JOIN pesquisa ON membro_has_pesquisa.id_pesquisa = pesquisa.id_pesquisa WHERE pesquisa.id_pesquisa = ".$id_pesquisa.";");
        return $result->result_array();
    }

    public function selecetEstudantessDaPesquisa($id_pesquisa) {
        $result = $this->db->query("SELECT estudante.* FROM estudante INNER JOIN estudante_has_pesquisa ON estudante.id_estudante = estudante_has_pesquisa.id_estudante INNER JOIN pesquisa ON estudante_has_pesquisa.id_pesquisa = pesquisa.id_pesquisa WHERE pesquisa.id_pesquisa = ".$id_pesquisa.";");
        return $result->result_array();
    }
    
    public function selecetRelacaoMembrosDaPesquisa($url) {
        $result = $this->db->query("SELECT '".$url."' as url, membro.id_membro, pesquisa.id_pesquisa, membro.nome as membronome, pesquisa.nome as pesquisanome  FROM membro_has_pesquisa INNER JOIN membro ON membro_has_pesquisa.id_membro = membro.id_membro INNER JOIN pesquisa ON membro_has_pesquisa.id_pesquisa = pesquisa.id_pesquisa;");
        return $result->result_array();
    }
    
    public function deletaRelacaoMembro($id_membro, $id_pesquisa) {
        $result = $this->db->query("DELETE FROM `membro_has_pesquisa` WHERE id_membro = ".$id_membro." AND id_pesquisa = ".$id_pesquisa.";");
        return $result;
    }
    
    public function selecetRelacaoEstudanteDaPesquisa($url) {
        $result = $this->db->query("SELECT '".$url."' url, estudante.id_estudante, pesquisa.id_pesquisa, estudante.nome as estudantenome, pesquisa.nome as pesquisanome FROM estudante_has_pesquisa INNER JOIN estudante ON estudante_has_pesquisa.id_estudante = estudante.id_estudante INNER JOIN pesquisa ON estudante_has_pesquisa.id_pesquisa = pesquisa.id_pesquisa");
        return $result->result_array();
    }
    
    public function deletaRelacaoEstudante($id_estudante, $id_pesquisa) {
        $result = $this->db->query("DELETE FROM `estudante_has_pesquisa` WHERE id_estudante = ".$id_estudante." AND id_pesquisa = ".$id_pesquisa.";");
        return $result;
	}
	
	public function selectPaginacaoReunioes($n) {
        $result = $this->db->query("SELECT * FROM reuniao ORDER BY  data DESC LIMIT ".$n);
        return $result->result_array();    
	}
	
	public function selectPaginacaoReunioespr($n) {
        $result = $this->db->query("SELECT * FROM reuniaoprivada ORDER BY  data DESC LIMIT ".$n);
        return $result->result_array();    
	}
	
	public function selectPaginacaoProxEventos($n) {
        $result = $this->db->query("SELECT * FROM agenda ORDER BY  data DESC LIMIT ".$n);
        return $result->result_array();    
	}

	public function selectPaginacaoNoticias($n) {
        $result = $this->db->query("SELECT * FROM eventos_participados ORDER BY  data_eventos_participados DESC LIMIT ".$n);
        return $result->result_array();    
    }
    
    
    
   

}
?>

