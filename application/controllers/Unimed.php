<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unimed extends CI_Controller {

    private $menu;


    public function __construct() {
        parent::__construct();
        $this->load->database();

        if (!$this->session->userdata('email')) {
            $this->menu = [
                'modal_link' => 'modal_login_moderador',
                'modal' => 'modal',
                'link_logado' => '#'
            ];
        } else {
            $this->menu = [
                'modal_link' => '',
                'modal' => '#',
                'link_logado' => 'Restrita/'
            ];
        }
    }
    
    public function index($number = null) {
    	  $dados = $this->menu;
        $dados['url'] = base_url();
        $dados['display'] = 'none';
        $dados['acao'] = '';
		  $dados['conteudo'] = $this->parser->parse("cadastro", $dados, TRUE);

        $this->parser->parse('layout_adm', $dados);
    }
    
    
    public function v_cadastro() {
    	  $dados['url'] = base_url();
		  $dados['display'] = 'none';
		  $dados['acao'] = 'Cadastrar clientes';
		  $dados['conteudo'] = $this->parser->parse("cadastro", $dados, TRUE);
		  
		  $this->parser->parse("layout_adm", $dados);
    
    }
    
     
    public function v_pdf() {
    	  $dados['url'] = base_url();
		  $dados['display'] = 'none';
		  $dados['acao'] = 'Gerar recibos';
		  $dados['conteudo'] = $this->parser->parse("recibos", $dados, TRUE);
		  
		  $this->parser->parse("layout_adm", $dados);
    
    }

	public function v_editar() {
		$this->db->select("CLIENTE.idCLIENTE, CLIENTE.NOME, CLIENTE.MENSALIDADE, CLIENTE.ATIVO");
		$this->db->from("CLIENTE");
		$this->db->order_by("CLIENTE.NOME", 'asc');
		$dados['CLIENTE'] = $this->db->get()->result();		
 
      $dados['url'] = base_url();
   	$dados['display'] = 'none';
	   $dados['acao'] = 'Editar clientes';
		$dados['conteudo'] = $this->parser->parse("editar", $dados, TRUE);
		  
		$this->parser->parse("layout_adm", $dados);
	}
	
	public function v_telaeditar($id) {
		$this->db->select("CLIENTE.idCLIENTE, CLIENTE.NOME, CLIENTE.MENSALIDADE, CLIENTE.ATIVO");
		$this->db->from("CLIENTE");
		$this->db->where("CLIENTE.idCLIENTE", $id);
		$dados['CLIENTE'] = $this->db->get()->result();		
	
		$dados['url'] = base_url();
   	$dados['display'] = 'none';
	   $dados['acao'] = 'Editar cliente';
		$dados['conteudo'] = $this->parser->parse("editarcliente", $dados, TRUE);
		  
		$this->parser->parse("layout_adm", $dados);
	}    
    
	public function v_atualizar() {
		$dados['url'] = base_url();
   	$dados['display'] = 'none';
	   $dados['acao'] = 'Atualizar mensalidade';
		$dados['conteudo'] = $this->parser->parse("atualizar", $dados, TRUE);
		  
		$this->parser->parse("layout_adm", $dados);
	}    
    
	public function atualizar() {
		$form = $this->input->post();
		
		$antiga = $form['txt_men_antiga'];
		$data['MENSALIDADE'] = $form['txt_men_nova'];	
	
		$this->db->where('CLIENTE.MENSALIDADE', $antiga);
		$this->db->update("CLIENTE", $data);
		
		redirect('Unimed');
	
	}    
    
    
	public function editarcliente() {
		$form = $this->input->post();
		$nome = $form['txt_nome'];
		$data['NOME'] = strtoupper($nome);
		$data['MENSALIDADE'] = $form['txt_mensalidade'];
		$id = $form['id'];
		
		$this->db->where("CLIENTE.idCLIENTE", $id);
		$this->db->update("CLIENTE", $data);
		
		redirect('Unimed/v_editar');
	}     
    
   public function ativo($id, $ativo) {
		if ($ativo == 0) {
			$data['ATIVO'] = 1;		
		}
		if ($ativo == 1) {
			$data['ATIVO'] = 0;		
		}
		$this->db->where('CLIENTE.idCLIENTE', $id);
		$this->db->update('CLIENTE', $data);
		
		redirect('Unimed/v_editar');
   }

	public function cadastro() {
		$form = $this->input->post();
		$nome = $form['txt_nome'];
		$data['NOME'] = strtoupper($nome);
		$data['MENSALIDADE'] = $form['txt_mensalidade'];
		$data['ATIVO'] = 1;
		$data['MENSALIDADE'] += 0.00;
		
		$this->db->insert('CLIENTE', $data);
		
		$dados['url'] = base_url();
		$dados['display'] = 'none';
	   $dados['acao'] = 'Cadastrar clientes';
		$dados['conteudo'] = $this->parser->parse("cadastro", $dados, TRUE);
		  
		$this->parser->parse("layout_adm", $dados);
		
	}


	public function pdf() {
		require('assets/fpdf/fpdf.php');
		
		$form = $this->input->post();
		
		$mes = $form['txt_mes'];
		$ano = $form['txt_ano'];				
		
		$pdf = new FPDF();
				
		$this->db->select("CLIENTE.NOME, CLIENTE. MENSALIDADE");
		$this->db->from("CLIENTE");
		$this->db->where("CLIENTE.ATIVO", 1);
		$this->db->order_by("CLIENTE.NOME", 'asc');
		$data['CLIENTE'] = $this->db->get()->result();		

		$lim = count($data['CLIENTE']);
		
		for($i = 0; $i < $lim; $i++) {			
			$pdf->AddPage();

			$pdf->Image('assets/fpdf/acisa.png', 91, 10, 25);
			$pdf->SetY(35);
			$pdf->SetFont('Arial', '', 10);
			$pdf->MultiCell(190, 5, 'Associação Comercial, Industrial, Serviços e Agropecuária', 0, 'C');
			$pdf->MultiCell(190, 5, 'de Conceição do Rio Verde', 0, 'C');
			$pdf->MultiCell(190, 5, '035 9 9904-3190', 0, 'C');

			$pdf->Ln();
			$pdf->SetFont('Arial', 'bu', 14);
			$pdf->MultiCell(190, 5, 'RECIBO', 0, 'C');

			$pdf->Ln();
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(190, 5, 'Recebemos de '.$data['CLIENTE'][$i]->NOME.' a importância de R$ '
											.$data['CLIENTE'][$i]->MENSALIDADE.',00 ______________________________________');
			$pdf->Ln();
			$pdf->MultiCell(190, 5, 'referente aos serviços prestados - UNIMED de '.$mes.' de '.$ano.'.');
			
			$pdf->Ln();
			$pdf->SetY(90);
			$pdf->SetFont('Arial', '', 12);
			$pdf->MultiCell(190, 5, 'Conceição do Rio Verde, _____ de _______________ de '.date('Y').'.', 0, 'C');

			$pdf->Ln();
			$pdf->SetY(110);
			$pdf->MultiCell(190, 5, '_________________________________________________', 0, 'C');
			$pdf->SetFont('Arial', 'bu', 16);
			$pdf->MultiCell(190, 5, 'ACISA', 0, 'C');

			$pdf->Ln();
			$pdf->SetY(130);
			$pdf->SetFont('Arial', 'b', 9);			
			$pdf->MultiCell(190, 5, 'ACISA: Praça Prefeito José Fontes, 112, Centro / CEP 37430-000 / Conceição do Rio Verde-MG', 0, 'C');

			$pdf->Ln();
			$pdf->MultiCell(190, 5, '__________________________________________________________________________________________________________', 0, 'C');

			$i++;
			
			if ($i < $lim) {
		
				$pdf->Image('assets/fpdf/acisa.png', 91, 150, 25);
				$pdf->SetY(175);			
				$pdf->SetFont('Arial', '', 10);
				$pdf->MultiCell(190, 5, 'Associação Comercial, Industrial, Serviços e Agropecuária', 0, 'C');
				$pdf->MultiCell(190, 5, 'de Conceição do Rio Verde', 0, 'C');
				$pdf->MultiCell(190, 5, '035 9 9904-3190', 0, 'C');

				$pdf->Ln();
				$pdf->SetFont('Arial', 'bu', 14);
				$pdf->MultiCell(190, 5, 'RECIBO', 0, 'C');

				$pdf->Ln();
				$pdf->SetFont('Arial', '', 12);
				$pdf->Cell(190, 5, 'Recebemos de '.$data['CLIENTE'][$i]->NOME.' a importância de R$ '
											.$data['CLIENTE'][$i]->MENSALIDADE.',00 _____________________________________');
				$pdf->Ln();
				$pdf->MultiCell(190, 5, 'referente aos serviços prestados - UNIMED de '.$mes.' de '.$ano.'.');
			
				$pdf->Ln();
				$pdf->SetY(230);
				$pdf->SetFont('Arial', '', 12);
				$pdf->MultiCell(190, 5, 'Conceição do Rio Verde, _____ de _______________ de '.date('Y').'.', 0, 'C');

				$pdf->Ln();
				$pdf->SetY(250);
				$pdf->MultiCell(190, 5, '_________________________________________________', 0, 'C');
				$pdf->SetFont('Arial', 'bu', 16);
				$pdf->MultiCell(190, 5, 'ACISA', 0, 'C');

				$pdf->Ln();
				$pdf->SetY(270);
				$pdf->SetFont('Arial', 'b', 9);			
				$pdf->MultiCell(190, 5, 'ACISA: Praça Prefeito José Fontes, 112, Centro / CEP 37430-000 / Conceição do Rio Verde-MG', 0, 'C');											
			}		
		}
		
		$pdf->Output();	
	
	}


 }


