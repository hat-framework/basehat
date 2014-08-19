<?php
        
class configConfigurations extends \classes\Classes\Options{
                
    protected $files   = array(
        'config/geral' => array(
            'title'        => 'Configurações Gerais',
            'descricao'    => 'Configurações Gerais do funcionamento do Site',
            'grupo'        => 'Configurações do site',
            'type'         => 'config', //config, plugin, jsplugin, template, resource
            'referencia'   => 'config/geral',
            'visibilidade' => 'webmaster', //'usuario', 'admin', 'webmaster'
            'configs'      => array(
                
                'DEBUG' => array(
                    'fieldset'      => 'Opções Gerais',
                    'name'          => 'DEBUG',
                    'label'         => 'Ativar debug',
                    'type'          => 'enum',//varchar, text, enum
                    'options'       => "'true' => 'Sim', 'false' => 'Não'",
                    'default'       => 'false',
                    'description'   => '',
                    'value'         => 'false',
                    'value_default' => 'false'
                ),
                
                'CHARSET' => array(
                    'name'          => 'CHARSET',
                    'label'         => 'Charset',
                    'type'          => 'enum',//varchar, text, enum
                    'options'       => "'utf-8' => 'UTF8', 'iso-8859-1' => 'ISO-8859-1'",
                    'default'       => 'utf-8',
                    'description'   => '',
                    'value'         => 'utf-8',
                    'value_default' => 'utf-8'
                ),
                
                'PROJETO_DEFAULT' => array(
                    'name'          => 'PROJETO_DEFAULT',
                    'label'         => 'Projeto Padrão',
                    'type'          => 'varchar',//varchar, text, enum
                    'value'         => 'hat',
                    'value_default' => 'hat'
                ),
                
                'is_amigavel' => array(
                    'name'          => 'is_amigavel',
                    'label'         => 'Url Amigável',
                    'type'          => 'enum',//varchar, text, enum
                    'options'       => "'true' => 'Sim', 'false' => 'Não'",
                    'default'       => 'true',
                    'value'         => 'true',
                    'value_default' => 'true'
                ),
                
                'LANGUAGE' => array(
                    'name'          => 'LANGUAGE',
                    'label'         => 'Linguagem Padrão (sigla)',
                    'type'          => 'varchar',//varchar, text, enum
                    'value'         => 'pt-br',
                    'value_default' => 'pt-br',
                    'description' => 'A linguagem padrão tem como objetivo informar aos navegadores qual o idioma presente no site',
                ),
                
                'AUTOR' => array(
                    'name'          => 'AUTOR',
                    'label'         => 'Desenvolvedor do Site',
                    'type'          => 'varchar',//varchar, text, enum
                    'value'         => 'Thompson Moreira Filgueiras',
                    'value_default' => 'Thompson Moreira Filgueiras'
                ),
            ),
        ),
        
        'config/crypt' => array(
            'title'        => 'Criptografia',
            'descricao'    => 'Aspectos ligados à segurança do site',
            'grupo'        => 'Configurações do Site',
            'referencia'   => 'config/crypt',
            'type'         => 'config',
            'visibilidade' => 'webmaster',
            'configs' => array(

                'Crypty_base64key' => array(
                    'name'          => 'Crypty_base64key',
                    'label'         => 'Chave criptográfica',
                    'description'   => 'Chave de criptografia encodificada em Base 64',
                    'type'          => 'varchar',//varchar, text, enum
                    'default'       => 'nuYhQLufGJneMVafZOLzO90Iyh1ur',
                    'value'         => 'nuYhQLufGJneMVafZOLzO90Iyh1ur',
                    'value_default' => 'nuYhQLufGJneMVafZOLzO90Iyh1ur'
                ),
                
                'Crypty_base64ivector' => array(
                    'name'          => 'Crypty_base64ivector',
                    'label'         => 'Chave criptográfica vector',
                    'description'   => 'Chave de criptografia encodificada em Base 64 - parâmetro vector',
                    'type'          => 'varchar',//varchar, text, enum
                    'default'       => 'CseLYWF/C49xr9VGG+TciIRY9dfEdVbtuXUrTVbCUTo=',
                    'value'         => 'CseLYWF/C49xr9VGG+TciIRY9dfEdVbtuXUrTVbCUTo=',
                    'value_default' => 'CseLYWF/C49xr9VGG+TciIRY9dfEdVbtuXUrTVbCUTo='
                ),

             )
         ),        
        
        'config/info' => array(
            'title'        => 'Informações do site',
            'descricao'    => 'Exibição das principais informações do site',
            'grupo'        => 'Configurações do Site',
            'referencia'   => 'config/info',
            'type'         => 'config',
            'visibilidade' => 'admin',
            'configs' => array(
                
                'SITE_NOME' => array(
                    'fieldset'      => 'Dados do site',
                    'name'          => 'SITE_NOME',
                    'label'         => 'Nome do Site',
                    'description'   => 'O nome do site é utilizado em vários locais, tais como rodapé, envio de emails, etc',
                    'type'          => 'varchar',
                    'default'       => '',
                    'value'         => '',
                    'value_default' => ''
                    
                ),
                
                'SITE_SLOGAN' => array(
                    'name'          => 'SITE_SLOGAN',
                    'label'         => 'Slogan',
                    'type'          => 'text',
                    'description'   => 'Escreva uma frase curta com o slogan do seu site ou empresa',
                    'default'       => '',
                    'value'         => '',
                    'value_default' => ''
                ),
                
                'SITE_DESCRIPTION' => array(
                    'name'          => 'SITE_DESCRIPTION',
                    'label'         => 'Descrição do site',
                    'type'          => 'text',
                    'description'   => 'Esta descrição será utilizada pelos mecanismos de pesquisa para descrever o seu site,
                        por exemplo, se alguém compartilhar no facebook o link da página inicial do seu site ou de alguma 
                        página cujo a descrição não foi definida esta será apresentada',
                    'default'       => '',
                    'value'         => '',
                    'value_default' => ''
                ),
                
                'SITE_KEYWORDS' => array(
                    'name'          => 'SITE_KEYWORDS',
                    'label'         => 'Palavras chave',
                    'type'          => 'varchar',
                    'description'   => 'Selecione um grupo de no máximo 6 palavras separadas por vírgulas que descrevem o conteúdo
                        existente no seu site. Isto ajudará a posicionar o seu site nos buscadores',
                    'default'       => '',
                    'value'         => '',
                    'value_default' => ''
                ),

                'SITE_EMAIL' => array(
                    'name'          => 'SITE_EMAIL',
                    'fieldset'      => 'Dados de Contato',
                    'label'         => 'Email de Contato',
                    'type'          => 'varchar',
                    'especial'      => 'email',
                    'description'   => 'Este email será exibido no rodapé ou na página de detalhes do seu site.
                        Este não será utilizado no recurso de enviar emails',
                    'default'       => '',
                    'value'         => '',
                    'value_default' => ''
                ),
                'SITE_TELEFONE' => array(
                    'name'          => 'SITE_TELEFONE',
                    'label'         => 'Telefone',
                    'type'          => 'varchar',
                    'especial'      => 'telefone',
                    'description'   => 'Este telefone será exibido no rodapé ou na página de detalhes do seu site. ',
                    'value'         => '',
                    'value_default' => ''
                ),
                'SITE_ENDERECO' => array(
                    'name'          => 'SITE_ENDERECO',
                    'label'         => 'Endereço',
                    'type'          => 'text',
                    'description'   => 'Este endereço será exibido no rodapé ou na página de detalhes do seu site. ',
                    'default'       => '',
                    'value'         => '',
                    'value_default' => ''
                )
             )
         ),

        'config/config' => array(
            'title'        => 'Configurações de Interface',
            'descricao'    => 'Aspectos ligados à Inteface do site',
            'grupo'        => 'Aparência',
            'referencia'   => 'config/config',
            'type'         => 'config',
            'visibilidade' => 'admin',
            'configs' => array(

                'TEMPLATE_DEFAULT' => array(
                    'name'          => 'TEMPLATE_DEFAULT',
                    'label'         => 'Template Padrão',
                    'description'   => 'Template a ser utilizado no site',
                    'type'          => 'varchar',//varchar, text, enum
                    'default'       => 'rf',
                    'value'         => 'rf',
                    'value_default' => 'rf',
                    'notnull'       => true,
                ),
                
                'MODULE_DEFAULT' => array(
                    'name'          => 'MODULE_DEFAULT',
                    'label'         => 'Plugin Padrão',
                    'description'   => 'Plugin que será exibido na página inicial do site',
                    'type'          => 'varchar',//varchar, text, enum
                    'default'       => 'usuario',
                    'value'         => 'usuario',
                    'value_default' => 'usuario',
                    'notnull'       => true,
                ),

             )
         ),        
    );
    
    public function getFiles(){
        $this->FindTemplates();
        $this->GenCryptKey();
        return $this->files;
    }
    
    private function FindTemplates(){
        $blocked = array('Config', 'area-admin');
        $this->LoadResource('files/dir', 'dobj');
        $out    = array();
        $pastas = array_keys(\classes\Classes\Registered::getAllTemplatesLocation());
        if(!empty($pastas)){
            foreach($pastas as $pasta){
                if(in_array($pasta, $blocked)) continue;
                $out[] = "'$pasta' => '".  ucfirst($pasta)."'";
            }
            $imp = implode(",",$out);
            $this->files['config/config']['configs']['TEMPLATE_DEFAULT']['type'] = 'enum';
            $this->files['config/config']['configs']['TEMPLATE_DEFAULT']['options'] = $imp;
        }
    }
    
    private function GenCryptKey(){
        if(function_exists('openssl_random_pseudo_bytes')){
            $arr = (array)json_decode(classes\Utils\cache::get("CRYPT_KEYS"));
            if($arr === false || empty($arr)){
                $arr['__Crypty_base64key']     = \classes\Classes\crypt::gen_base64_key();
                $arr['__Crypty_base64ivector'] = \classes\Classes\crypt::gen_base64_ivector();
                classes\Utils\cache::create("CRYPT_KEYS", json_encode($arr));
            }
            $this->files['config/crypt']['configs']['Crypty_base64key']['value']     =  $arr['__Crypty_base64key'];
            $this->files['config/crypt']['configs']['Crypty_base64ivector']['value'] =  $arr['__Crypty_base64ivector'];
        }
    }
}